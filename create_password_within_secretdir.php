<?php

include 'nataslevel5.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$path = '/NATASCyberWarGame/WhatsInHere/TheS3CR3TAwaits/password.txt';
$handle = fopen($_SERVER['DOCUMENT_ROOT'] . $path, 'w+') or die('Cannot open file: ' . $path);
$data = $natas5_username . ":" . $natas5_password;
fwrite($handle, $data);
fclose($handle);
?>

