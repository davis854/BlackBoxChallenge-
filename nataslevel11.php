<?php

include 'sessions.php';

$natas11_username = 'natas11';
$natas11_password = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $natas11_username && $_POST['password'] === $natas11_password) {
        $_SESSION['submit'] = true;
        header("Location: nataslevel12view.php");
    } else {
        echo "<script type='text/javascript'>alert('Unauthorized Attempt!')</script>";
    }
}
?>