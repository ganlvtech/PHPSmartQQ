<?php
$callback = function($single_msg) {
	// $single_msg['type']      // 消息类型：0=普通聊天、1=群、2=讨论组
	// $single_msg['content']   // 消息内容：（表情已转换成文字）
	// $single_msg['from_uin']  // 来源uin：普通聊天=对方uin，群=群uin，讨论组=讨论组uin
	// $single_msg['send_uin']  // 发送者uin：普通聊天=对方uin，群=发送者uin，讨论组=发送者uin
	// $single_msg['from_name'] // 来源名称：普通聊天=备注（如果没有备注为昵称），群=群名，讨论组=讨论组名
	// $single_msg['msg_id']    // 消息编号 
	// $single_msg['time']      // 发送时间戳
	// 返回empty为不回复，例如false, null, 0, ''
	if (1 === preg_match('/^PHPSmartQQ\s+--version$/i', $single_msg['content']))
		return 'PHPSmartQQ v1.0.0 by Ganlv(https://coding.net/u/ganlv/p/PHPSmartQQ/git)';
	return false;
};