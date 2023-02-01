<?php

$myPwd = 'mySecretPwd123';
$hash = password_hash($myPwd,PASSWORD_DEFAULT);
var_dump($hash);

$verifyPwd = password_verify($myPwd, '1', $hash);
var_dump($verifyPwd);
?>