<?php
$callback = function(&$single_msg, &$smartqq) {
	// $single_msg['type']      // 消息类型：0=普通聊天、1=群、2=讨论组
	// $single_msg['content']   // 消息内容：（表情已转换成文字）
	// $single_msg['from_uin']  // 来源uin：普通聊天=对方uin，群=群uin，讨论组=讨论组uin
	// $single_msg['send_uin']  // 发送者uin：普通聊天=对方uin，群=发送者uin，讨论组=发送者uin
	// $single_msg['from_name'] // 来源名称：普通聊天=备注（如果没有备注为昵称），群=群名，讨论组=讨论组名
	// $single_msg['msg_id']    // 消息编号 
	// $single_msg['time']      // 发送时间戳
	// 返回empty为不回复，例如false, null, 0, ''
	if (1 === preg_match('/^\s*PHPSmartQQ\s+--version\s*$/i', $single_msg['content']))
		return 'PHPSmartQQ v1.0.1 by Ganlv(https://coding.net/u/ganlv/p/PHPSmartQQ/git)';
	if (1 === preg_match('/^\s*PHPSmartQQ\s+--help\s*$/i', $single_msg['content']))
		return "PHPSmartQQ help:\nIn a group, a message start with an exclamatory mark can call the robot.\nExample:\n!How are you?\nChatting with the robot privately, you needn't to add an exclamatory mark.";
	$first_char = mb_substr($single_msg['content'], 0, 1);
	$is_command = ('!' === $first_char || '！' === $first_char);
	if ($is_command || 0 === $single_msg['type']) {
		$xml = curl(array(
			CURLOPT_URL => 'http://www.tuling123.com/web/product_exp_new!result.action',
			CURLOPT_POSTFIELDS => http_build_query(array(
				'info' => $is_command ? mb_substr($single_msg['content'], 1) : $single_msg['content'],
				'monitor' => 'monitor',
			)),
		));
		$xml_object = simplexml_load_string($xml, null, LIBXML_NOCDATA);
		switch($xml_object->MsgType) {
			case 'text':
				$reply = preg_replace('/<a target="_blank" href="(.+?)">(.+?)<\/a>/', '\\1 \\2', $xml_object->Content);
				break;
			case 'news':
				$reply = '';
				foreach ($xml_object->Articles->item as $item)
					$reply .= $item->Title . "\n" . $item->Url . "\n\n";
				break;
		}
		return str_replace('<br/>', "\n", $reply);
	}
	return false;
};
$schedule = function(&$smartqq) {
	// 计划任务，每次轮询结束后执行
	// 需要返回一个包含type, to, content数组
	// return array(
	//	'type' => 0,
	//	'to' => $info['uin'],
	//	'content' => date('Y-m-d H:i:s'),
	// );
	if (!file_exists('next.txt') || time() > (int)file_get_contents('next.txt')) {
		file_put_contents('next.txt', time() + 86400);
		foreach ($smartqq->friend['info'] as $info) {
			if (false !== strpos($info['nick'], '干驴')) {
				return array(
					'type' => 0,
					'to' => $info['uin'],
					'content' => date('Y-m-d H:i:s'),
				);
			}
		}
	}
	return false;
};