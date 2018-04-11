<?php

include 'nataslevel5.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$path = '/NATASCyberWarGame/Files/secret.txt';
$handle = fopen($_SERVER['DOCUMENT_ROOT'] . $path, 'w+') or die('Cannot open file: ' . $path);
$data = "/WhatsInHere/";
fwrite($handle, $data);
fclose($handle);
?>
