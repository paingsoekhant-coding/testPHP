<?php

$name = "normalCookies";
$value = "how are you?";
$expire =  time() + 3600;
$path = "/";
$domain = "localhost";
$secure = true;
$httpOnly = false;

setcookie($name, $value, $expire, $path, $domain, $secure, $httpOnly);
