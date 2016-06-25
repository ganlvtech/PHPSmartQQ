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
if (php_sapi_name() !== 'cli')
	exit;
define('MAX_ERROR_TIMES', 20);
date_default_timezone_set('Asia/Shanghai');
require 'SmartQQ.php';
$smartqq = new SmartQQ();
for (;;) {
	if (!$smartqq->checkCookie()) {
		$error_times = 0;
		$smartqq->getQRCode();
		// echo "Scan the QRCode\n";
		while (!$smartqq->checkQRCode()) {
			sleep(2);
			++$error_times;
			if ($error_times > MAX_ERROR_TIMES) {
				echo "MAX_ERROR_TIMES reached\n";
				exit;
			}
		}
	}
	$error_times = 0;
	for (;;) {
		$json_array = $smartqq->poll();
		$simplified_array = $smartqq->simplify($json_array);
		require 'callback_files.php';
		if ($simplified_array['retcode'] == 0) {
			foreach ($callback_files as &$callback_file) {
				require $callback_file;
				foreach ($simplified_array['result'] as &$single_msg) {
					if (isset($callback) && $reply = $callback($single_msg, $smartqq)) {
						if ($smartqq->send($single_msg['type'], $single_msg['from_uin'], $reply)) {
							$error_times = 0;
						} else {
							++$error_times;
						}
					}
				}
				if (isset($schedule) && $send_array = $schedule($smartqq)) {
					if ($smartqq->send($send_array['type'], $send_array['to'], $send_array['content'])) {
						$error_times = 0;
					} else {
						++$error_times;
					}
				}
				unset($callback);
				unset($schedule);
			}
		} else {
			++$error_times;
		}
		if ($error_times > MAX_ERROR_TIMES) {
			echo "poll MAX_ERROR_TIMES reached\n";
			break;
		}
	}
}