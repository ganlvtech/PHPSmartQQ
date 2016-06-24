<?php
/******************************************
**                                       **
**               PHPSmartQQ              **
**                                       **
**       A php-based SmartQQ class       **
**                                       **
**                by Ganlv               **
**                                       **
**       License: Apache License v2      **
**                                       **
******************************************/
define('APP_DEBUG', false);
define('LOG_FILE', 'log.txt');
define('COOKIE_FILE', 'cookie.txt');
define('QRCODE_FILE', 'qrcode.png');
define('FACE_TEXT', array('微笑','撇嘴','色','发呆','得意','流泪','害羞','闭嘴','睡','大哭','尴尬','发怒','调皮','呲牙','惊讶','难过','酷','冷汗','抓狂','吐','偷笑','可爱','白眼','傲慢','饥饿','困','惊恐','流汗','憨笑','大兵','奋斗','咒骂','疑问','嘘','晕','折磨','衰','骷髅','敲打','再见','擦汗','抠鼻','鼓掌','糗大了','坏笑','左哼哼','右哼哼','哈欠','鄙视','委屈','快哭了','阴险','亲亲','吓','可怜','菜刀','西瓜','啤酒','篮球','乒乓','咖啡','饭','猪头','玫瑰','凋谢','示爱','爱心','心碎','蛋糕','闪电','炸弹','刀','足球','瓢虫','便便','月亮','太阳','礼物','拥抱','强','弱','握手','胜利','抱拳','勾引','拳头','差劲','爱你','NO','OK','爱情','飞吻','跳跳','发抖','怄火','转圈','磕头','回头','跳绳','挥手','激动','街舞','献吻','左太极','右太极','双喜','鞭炮','灯笼','发财','K歌','购物','邮件','帅','喝彩','祈祷','爆筋','棒棒糖','喝奶','下面','香蕉','飞机','开车','左车头','车厢','右车头','多云','下雨','钞票','熊猫','灯泡','风车','闹钟','打伞','彩球','钻戒','沙发','纸巾','药','手枪','青蛙'));
// define('FACE_TEXT', array('Smile','Grimace','Drool','Scowl','CoolGuy','Sob','Shy','Silent','Sleep','Cry','Awkward','Angry','Tongue','Grin','Surprise','Frown','Ruthless','Blush','Scream','Puke','Chuckle','Joyful','Slight','Smug','Hungry','Drowsy','Panic','Sweat','Laugh','Commando','Determined','Scold','Shocked','Shhh','Dizzy','Tormented','Toasted','Skull','Hammer','Wave','Speechless','NosePick','Clap','Shame','Trick','Bah! L','Bah! R','Yawn','Pooh-pooh','Shrunken','TearingUp','Sly','Kiss','Wrath','Whimper','Cleaver','Watermelon','Beer','Basketball','PingPong','Coffee','Rice','Pig','Rose','Wilt','Lips','Heart','BrokenHeart','Cake','Lightning','Bomb','Dagger','Soccer','Ladybug','Poop','Moon','Sun','Gift','Hug','Strong','Weak','Shake','Peace','Fight','Beckon','Fist','Pinky','RockOn','NO','OK','InLove','Blowkiss','Waddle','Tremble','Aaagh','Twirl','Kotow','Dramatic','JumpRope','Surrender','Exciting','HipHot','ShowLove','Tai Chi L','Tai Chi R','Congratulations','Firecracker','Lantern','Richer','Karaoke','Shopping','Email','Handsome','Cheers','Pray','BlowUp','Lolly','Milk','Noodles','Banana','Plane','Car','Locomotive','Train','Train Tail','Cloudy','Rain','Dollor','Panda','Bulb','Windmill','Clock','Umbrella','Balloon','Ring','Sofa','toiletPaper','Pill','Pistol','Frog'));
define('FACE_CODE', array(14,1,2,3,4,5,6,7,8,9,10,11,12,13,0,50,51,96,53,54,73,74,75,76,77,78,55,56,57,58,79,80,81,82,83,84,85,86,87,88,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,32,113,114,115,63,64,59,33,34,116,36,37,38,91,92,93,29,117,72,45,42,39,62,46,47,71,95,118,119,120,121,122,123,124,27,21,23,25,26,125,126,127,128,129,130,131,132,133,134,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170));
define('FACE_DECODE', array(14=>0,1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9,10=>10,11=>11,12=>12,13=>13,0=>14,50=>15,51=>16,96=>17,53=>18,54=>19,73=>20,74=>21,75=>22,76=>23,77=>24,78=>25,55=>26,56=>27,57=>28,58=>29,79=>30,80=>31,81=>32,82=>33,83=>34,84=>35,85=>36,86=>37,87=>38,88=>39,97=>40,98=>41,99=>42,100=>43,101=>44,102=>45,103=>46,104=>47,105=>48,106=>49,107=>50,108=>51,109=>52,110=>53,111=>54,112=>55,32=>56,113=>57,114=>58,115=>59,63=>60,64=>61,59=>62,33=>63,34=>64,116=>65,36=>66,37=>67,38=>68,91=>69,92=>70,93=>71,29=>72,117=>73,72=>74,45=>75,42=>76,39=>77,62=>78,46=>79,47=>80,71=>81,95=>82,118=>83,119=>84,120=>85,121=>86,122=>87,123=>88,124=>89,27=>90,21=>91,23=>92,25=>93,26=>94,125=>95,126=>96,127=>97,128=>98,129=>99,130=>100,131=>101,132=>102,133=>103,134=>104,136=>105,137=>106,138=>107,139=>108,140=>109,141=>110,142=>111,143=>112,144=>113,145=>114,146=>115,147=>116,148=>117,149=>118,150=>119,151=>120,152=>121,153=>122,154=>123,155=>124,156=>125,157=>126,158=>127,159=>128,160=>129,161=>130,162=>131,163=>132,164=>133,165=>134,166=>135,167=>136,168=>137,169=>138,170=>139));
date_default_timezone_set('Asia/Shanghai');
function log_record($message) {
	file_put_contents(LOG_FILE, date('Y-m-d H:i:s') . ' : ' . trim($message) . "\n", FILE_APPEND);
	if (APP_DEBUG)
		echo trim($message), "\n";
}
function curl($options) {
	$ch = curl_init();
	$options[CURLOPT_COOKIEFILE] = COOKIE_FILE;
	$options[CURLOPT_COOKIEJAR] = COOKIE_FILE;
	if (substr($options[CURLOPT_URL], 0, 8) === 'https://') {
		$options[CURLOPT_SSL_VERIFYHOST] = 2;
		$options[CURLOPT_SSL_VERIFYPEER] = false;
	}
	if (isset($options[CURLOPT_POSTFIELDS]))
		$options[CURLOPT_POST] = true;
	$options[CURLOPT_ENCODING] = 'gzip,deflate';
	$options[CURLOPT_FOLLOWLOCATION] = true;
	$options[CURLOPT_MAXREDIRS] = 10;
	$options[CURLOPT_TIMEOUT] = 120;
	$options[CURLOPT_RETURNTRANSFER] = true;
	curl_setopt_array($ch, $options);
	if (APP_DEBUG) {
		$cmd = 'curl "' . $options[CURLOPT_URL] . '" -b "' . COOKIE_FILE . '" -c "' . COOKIE_FILE . '"';
		if (isset($options[CURLOPT_POSTFIELDS]))
			$cmd .= ' -d "' . $options[CURLOPT_POSTFIELDS] . '"';
		if (isset($options[CURLOPT_REFERER]))
			$cmd .= ' -H "Referer: ' . $options[CURLOPT_REFERER] . '"';
		log_record(str_replace('%', '"%"', $cmd));
	}
	curl_exec($ch);
	$content = curl_multi_getcontent($ch);
	curl_close($ch);
	return $content;
}
function rand2() {
	return mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();
}
function get_hash($uin, $ptwebqq) {
	$x = array(
		0, $uin >> 24 & 0xff ^ 0x45,
		0, $uin >> 16 & 0xff ^ 0x43,
		0, $uin >>  8 & 0xff ^ 0x4f,
		0, $uin       & 0xff ^ 0x4b,
	);
	for ($i = 0; $i < 64; ++$i)
		$x[($i & 3) << 1] ^= ord(substr($ptwebqq, $i, 1));
	$hex = array('0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F');
	$hash = '';
	for ($i = 0; $i < 8; ++$i)
		$hash .= $hex[$x[$i] >> 4 & 0xf] . $hex[$x[$i] & 0xf];
	return $hash;
}
function get_t() {
	return (int)(microtime(true) * 1000);
}
class SmartQQ {
	private $state = 0; // 0:init 1:qrcode-gotten 2:logged-in
	private $ptwebqq = null;
	private $psessionid = null;
	private $vfwebqq = null;
	private $hash = null;
	private $msg_id = null;
	public $friend = null;
	public $group = null;
	public $discuss = null;
	public $self = null;
	public $online = null;
	public $recent = null;
	
	public function getQRCode() {
		file_put_contents(QRCODE_FILE, curl(array(
			CURLOPT_URL => 'https://ssl.ptlogin2.qq.com/ptqrshow?' . http_build_query(array(
				'appid' => 501004106,
				'e'     => 0,
				'l'     => 'M',
				's'     => 5,
				'd'     => 72,
				'v'     => 4,
				't'     => rand(),
			)),
		)));
		$this->state = 1;
		log_record('getqrcode');
	}
	public function checkQRCode() {
		$jsonp = curl(array(
			CURLOPT_URL => 'https://ssl.ptlogin2.qq.com/ptqrlogin?' . http_build_query(array(
				'webqq_type'   => 10,
				'remember_uin' => 1,
				'login2qq'     => 1,
				'aid'          => 501004106,
				'u1'           => 'http://w.qq.com/proxy.html?login2qq=1&webqq_type=10',
				'ptredirect'   => 0,
				'ptlang'       => 2052,
				'daid'         => 164,
				'from_ui'      => 1,
				'pttype'       => 1,
				'dumy'         => '',
				'fp'           => 'loginerroralert',
				'action'       => '0-0-2177',
				'mibao_css'    => 'm_webqq',
				't'            => 'undefined',
				'g'            => 1,
				'js_type'      => 0,
				'js_ver'       => 10149,
				'login_sig'    => '',
				'pt_randsalt'  => 0,
			)),
		));
		log_record($jsonp);
		$json_array = json_decode(preg_replace(array('/ptuiCB\\((.+?)\\);/', "/'/"), array('[$1]', '"'), $jsonp), true);
		$retcode = (int)$json_array[0];
		if ($retcode === 65) {
			$this->getqrcode();
			return false;
		}
		if ($retcode !== 0)
			return false;
		file_put_contents(QRCODE_FILE, '');
		$check_sig_url = $json_array[2];
		$html = curl(array(
			CURLOPT_URL => $check_sig_url,
		));
		// log_record($html);
		return $this->checkCookie();
	}
	public function checkCookie() {
		if (!file_exists(COOKIE_FILE))
			return false;
		if (1 !== preg_match('/ptwebqq\\t(.+?)\\r\\n/', file_get_contents(COOKIE_FILE), $matches))
			return false;
		$this->ptwebqq = $matches[1];
		log_record("ptwebqq : {$this->ptwebqq}");

		$json = curl(array(
			CURLOPT_URL => 'http://s.web2.qq.com/api/getvfwebqq?' . http_build_query(array(
				'ptwebqq'    => $this->ptwebqq,
				'clientid'   => 53999199,
				'psessionid' => '',
				't'          => get_t(),
			)),
			CURLOPT_REFERER => 'http://s.web2.qq.com/proxy.html?v=20130916001&callback=1&id=1',
		));
		log_record($json);
		$json_array = json_decode($json, true);
		if (!isset($json_array['result']))
			return false;
		$this->vfwebqq = $json_array['result']['vfwebqq'];

		$json = curl(array(
			CURLOPT_URL => 'http://d1.web2.qq.com/channel/login2',
			CURLOPT_POSTFIELDS => http_build_query(array(
				'r' => json_encode(array(
					'ptwebqq'    => $this->ptwebqq,
					'clientid'   => 53999199,
					'psessionid' => '',
					'status'     => 'online',
				)),
			)),
		));
		log_record($json);
		$json_array = json_decode($json, true);
		if (0 !== $json_array['retcode'])
			return false;
		$this->psessionid = $json_array['result']['psessionid'];
		$this->msg_id = time() % 10000 * 10000;
		$hash = get_hash($json_array['result']['uin'], $this->ptwebqq);
		log_record("hash : $hash");

		$json = curl(array(
			CURLOPT_URL => 'http://s.web2.qq.com/api/get_user_friends2',
			CURLOPT_POSTFIELDS => http_build_query(array(
				'r' => json_encode(array(
					'vfwebqq' => $this->vfwebqq,
					'hash'    => $hash,
				)),
			)),
			CURLOPT_REFERER => 'http://s.web2.qq.com/proxy.html?v=20130916001&callback=1&id=1',
		));
		log_record($json);
		$json_array = json_decode($json, true);
		if (0 === $json_array['retcode'])
			$this->friend = $json_array['result'];

		$json = curl(array(
			CURLOPT_URL => 'http://s.web2.qq.com/api/get_group_name_list_mask2',
			CURLOPT_POSTFIELDS => http_build_query(array(
				'r' => json_encode(array(
					'vfwebqq' => $this->vfwebqq,
					'hash'    => $hash,
				)),
			)),
			CURLOPT_REFERER => 'http://s.web2.qq.com/proxy.html?v=20130916001&callback=1&id=1',
		));
		log_record($json);
		$json_array = json_decode($json, true);
		if (0 === $json_array['retcode'])
			$this->group = $json_array['result'];

		$json = curl(array(
			CURLOPT_URL => 'http://s.web2.qq.com/api/get_discus_list?' . http_build_query(array(
				'clientid'   => 53999199,
				'psessionid' => $this->psessionid,
				'vfwebqq'    => $this->vfwebqq,
				't'          => get_t(),
			)),
			CURLOPT_REFERER => 'http://s.web2.qq.com/proxy.html?v=20130916001&callback=1&id=1',
		));
		log_record($json);
		$json_array = json_decode($json, true);
		if (0 === $json_array['retcode'])
			$this->discuss = $json_array['result'];

		$json = curl(array(
			CURLOPT_URL => 'http://s.web2.qq.com/api/get_self_info2?' . http_build_query(array(
				't' => get_t(),
			)),
			CURLOPT_REFERER => 'http://s.web2.qq.com/proxy.html?v=20130916001&callback=1&id=1',
		));
		log_record($json);
		$json_array = json_decode($json, true);
		if (0 === $json_array['retcode'])
			$this->self = $json_array['result'];

		$json = curl(array(
			CURLOPT_URL => 'http://d1.web2.qq.com/channel/get_online_buddies2?' . http_build_query(array(
				'vfwebqq' => $this->vfwebqq,
				'clientid' => 53999199,
				'psessionid' => $this->psessionid,
				't' => get_t(),
			)),
			CURLOPT_REFERER => 'http://d1.web2.qq.com/proxy.html?v=20151105001&callback=1&id=2',
		));
		log_record($json);
		$json_array = json_decode($json, true);
		if (0 === $json_array['retcode'])
			$this->online = $json_array['result'];

		$json = curl(array(
			CURLOPT_URL => 'http://d1.web2.qq.com/channel/get_recent_list2',
			CURLOPT_REFERER => 'http://d1.web2.qq.com/proxy.html?v=20151105001&callback=1&id=2',
			CURLOPT_POSTFIELDS => http_build_query(array(
				'r' => json_encode(array(
					'vfwebqq'    => $this->vfwebqq,
					'clientid'   => 53999199,
					'psessionid' => $this->psessionid,
				)),
			)),
		));
		log_record($json);
		$json_array = json_decode($json, true);
		if (0 === $json_array['retcode'])
			$this->recent = $json_array['result'];

		$this->state = 2;
		return true;
	}
	public function poll() {
		if ($this->state < 2)
			return null;
		$json = curl(array(
			CURLOPT_URL => 'http://d1.web2.qq.com/channel/poll2',
			CURLOPT_REFERER => 'http://d1.web2.qq.com/proxy.html?v=20151105001&callback=1&id=2',
			CURLOPT_POSTFIELDS => http_build_query(array(
				'r' => json_encode(array(
					'ptwebqq' => $this->ptwebqq,
					'clientid' => 53999199,
					'psessionid' => $this->psessionid,
					'status' => 'online',
				)),
			)),
		));
		log_record($json);
		return json_decode($json, true);
	}
	public function &simplify(&$json_array) {
		$simplified_array = array(
			'retcode' => $json_array['retcode'],
			// 'errmsg' => isset($json_array['errmsg']) ? $json_array['errmsg'] : '',
			'result' => array(),
		);
		if (!isset($json_array['result']) || $json_array['retcode'] !== 0)
			return $simplified_array;
		foreach ($json_array['result'] as &$single_msg) {
			$from_uin = $single_msg['value']['from_uin'];
			$from_name = '';
			switch ($single_msg['poll_type']) {
				case 'message':
					$type = 0;
					foreach ($this->friend['marknames'] as $markname) {
						if ($markname['uin'] === $from_uin) {
							$from_name = $markname['markname'];
							break;
						}
					}
					if (!$from_name) {
						foreach ($this->friend['info'] as $markname) {
							if ($markname['uin'] === $from_uin) {
								$from_name = $markname['nick'];
								break;
							}
						}
					}
					break;
				case 'group_message':
					$type = 1;
					foreach ($this->group['gnamelist'] as $group) {
						if ($group['gid'] === $from_uin) {
							$from_name = $group['name'];
							break;
						}
					}
					break;
				case 'discu_message':
					$type = 2;
					foreach ($this->discuss['dnamelist'] as $discuss) {
						if ($discuss['did'] === $from_uin) {
							$from_name = $discuss['name'];
							break;
						}
					}
					break;
				default:
					$type = -1;
					break;
			}
			$content = '';
			foreach ($single_msg['value']['content'] as &$msg_node) {
				if (is_array($msg_node)) {
					switch ($msg_node[0]) {
						case 'face':
							$content .= '[' . FACE_TEXT[FACE_DECODE[$msg_node[1]]] . ']';
							break;
						// case 'font':
							// break;
						default:
							break;
					}
				} else {
					$content .= $msg_node;
				}
			}
			$simplified_array['result'][] = array(
				'type'      => $type,
				'content'   => $content,
				'from_uin'  => $from_uin,
				'send_uin'  => isset($single_msg['value']['send_uin']) ? $single_msg['value']['send_uin'] : $from_uin,
				'from_name' => $from_name,
				'msg_id'    => $single_msg['value']['msg_id'],
				'time'      => $single_msg['value']['time'],
			);
		}
		return $simplified_array;
	}
	private function getMsgId() {
		++$this->msg_id;
		return $this->msg_id;
	}
	public function send($type, $to, $content) {
		if ($this->state < 2)
			return false;
		switch ($type) {
			case 0:
				$url = 'http://d1.web2.qq.com/channel/send_buddy_msg2';
				$to_key = 'to';
				break;
			case 1:
				$url = 'http://d1.web2.qq.com/channel/send_qun_msg2';
				$to_key = 'group_uin';
				break;
			case 2:
				$url = 'http://d1.web2.qq.com/channel/send_discu_msg2';
				$to_key = 'did';
				break;
			default:
				return false;
				break;
		}
		$r = json_encode(array(
			$to_key => $to,
			'content' => json_encode(array(
				$content,
				array(
					'font',
					array(
						'name' => '宋体',
						'size' => 10,
						'style' => array(0, 0, 0),
						'color' => '000000',
					),
				),
			)),
			'face' => 603,
			'clientid' => 53999199,
			'msg_id' => $this->getMsgId(),
			'psessionid' => $this->psessionid,
		));
		log_record($r);
		$json = curl(array(
			CURLOPT_URL => $url,
			CURLOPT_REFERER => 'http://d1.web2.qq.com/proxy.html?v=20151105001&callback=1&id=2',
			CURLOPT_POSTFIELDS => http_build_query(array(
				'r' => $r,
			)),
		));
		log_record($json);
		$json_array = json_decode($json, true);
		if (!isset($json_array['errCode']) || 0 !== $json_array['errCode'])
			return false;
		return true;
	}
}