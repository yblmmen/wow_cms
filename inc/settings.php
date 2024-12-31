<?php

$config = array(
    'HOST' => '172.30.1.100',
    'USER' => 'root',
    'PASS' => 'password',
    'DB'   => 'acore_auth',
    'CORE' => 'AzerothCore'
);

// General Settings
if (!defined('EXPANSION')) {
    define('EXPANSION', 2); // 0 = Vanilla / 1 = TBC / 2 = WOTLK
}

if (!defined('REALMLIST')) {
    define('REALMLIST', 'set realmlist logon.servername.com');
}

// Google ReCaptcha Settings
if (!defined('CAPTCHA_SECRET')) {
    define('CAPTCHA_SECRET', 'PUT_YOUR_SECRET_KEY_HERE'); // 여기에 실제 Google ReCaptcha 비밀 키를 넣으세요.
}

if (!defined('CAPTCHA_CLIENT_ID')) {
    define('CAPTCHA_CLIENT_ID', 'PUT_YOUR_SITE_KEY_HERE'); // 여기에 실제 Google ReCaptcha 사이트 키를 넣으세요.
}

// Message Settings
if (!defined('SUCCESS_MESSAGE')) {
    define('SUCCESS_MESSAGE', 'Successfully Registered!');
}

?>

