<?php

include 'sessions.php';

$natas8_username = 'natas8';
$natas8_password = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $natas8_username && $_POST['password'] === $natas8_password) {
        $_SESSION['submit'] = true;
        header("Location: nataslevel9view.php");
    } else {
        echo "<script type='text/javascript'>alert('Unauthorized Attempt!')</script>";
    }
}
?>
