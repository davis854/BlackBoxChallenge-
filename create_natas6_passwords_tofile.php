<?php
include 'nataslevel6.php';

$pwd1 = "*(*(*&&^%%$";
$pwd2 = "lm01";
$pwd3 = "33223&&&**$$#";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$path = '/NATASCyberWarGame/NATAS6/natas6.txt';
$handle = fopen($_SERVER['DOCUMENT_ROOT'] . $path, 'w+') or die('Cannot open file: ' . $path);
$data = $pwd1."\n".$pwd2."\n".$natas6_password."\n".$pwd3;
fwrite($handle, $data);
fclose($handle);
?>

