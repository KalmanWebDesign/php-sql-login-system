<?php
// Secure session settings
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_secure', 1);
ini_set('session.use_only_cookies', 1);

session_start([
    'cookie_lifetime' => 0,
    'cookie_httponly' => true,
    'cookie_secure' => true,
    'use_only_cookies' => true,
    'cookie_samesite' => 'Strict'
]);
