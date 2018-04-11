<?php
function generate_password_key(){
    $pwd_length = 10;
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxya0123456789';
    $pwd = array();
    $alphasize = strlen($chars)-1;
    for($i = 0; $i < $pwd_length; $i++){
        $k = rand(0, $alphasize);
        $pwd[] = $chars[$k];
    }
    return implode($pwd);
}

include_once 'nataslevel3.php';

$user1 = "Dr. Wahjudi";
$user2 = "Dr. Yoo";
$user3 = "Christopher Davis";
$user4 = "Geoffrey Samples";
$user5 = "Adam Roberts";
$user6 = "Ben Hughes";

$user1_pwd = generate_password_key();
$user2_pwd = generate_password_key();
$user3_pwd = generate_password_key();
$user4_pwd = generate_password_key();
$user5_pwd = generate_password_key();
$user6_pwd = generate_password_key();


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$path = '/NATASCyberWarGame/Files/users.txt';
$handle = fopen($_SERVER['DOCUMENT_ROOT'].$path, 'w+') or die('Cannot open file: '.$path);
$data = $user1.":".$user1_pwd."\n".$user2.":".$user2_pwd."\n".$user3.":".$user3_pwd.
        "\n".$natas3_username.":".$natas3_password."\n".$user4.":".$user4_pwd.
        "\n".$user5.":".$user5_pwd."\n".$user6.":".$user6_pwd;
fwrite($handle, $data);
fclose($handle);
?>
