# PHPSmartQQ

* A php-based SmartQQ class
* Author: Ganlv
* **License: Apache License v2**

## Instruction

1. Edit `callback_files.php` and `callback.php`
2. Open `index.htm`
3. Input `php server.php` in command-line mode
4. Scan the QRCode
5. OK, Let it run

## Documentation

### SmartQQ class

    class SmartQQ {
        public $friend;   // 好友信息 
        public $group;    // 群信息
        public $discuss;  // 讨论组信息
        public $self;     // 个人信息
        public $online;   // 在线好友
        public $recent;   // 近期聊天列表
        public function getQRCode() {}   // 获取二维码
        public function checkQRCode() {} // 检验二维码
        public function checkCookie() {} // 通过Cookie登陆
        public function poll() {}        // 轮询
        public function simplify($json_array) {}      // 简化轮询返回的消息
        public function send($type, $to, $content) {} // 发送消息
    }

### server.php

### callback_files.php

### callback.php
