<?php

include 'sessions.php';

$natas5_username = 'natas5';
$natas5_password = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $natas5_username && $_POST['password'] === $natas5_password) {
        $_SESSION['submit'] = true;
        header("Location: nataslevel6view.php");
    } else {
        echo "<script type='text/javascript'>alert('Unauthorized Attempt!')</script>";
    }
}
?>

