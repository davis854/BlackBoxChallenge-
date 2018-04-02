<?php

include 'sessions.php';

$natas13_username = 'natas13';
$natas13_password = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $natas13_username && $_POST['password'] === $natas13_password) {
        $_SESSION['submit'] = true;
        header("Location: nataslevel14view.php");
        $_SESSION = array();
        session_destroy();
    } else {
        echo "<script type='text/javascript'>alert('Unauthorized Attempt!')</script>";
    }
}
?>
