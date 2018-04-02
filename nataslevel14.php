<?php

include 'sessions.php';

$natas14_username = 'natas14';
$natas14_password = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $natas14_username && $_POST['password'] === $natas14_password) {
        $_SESSION['submit'] = true;
        header("Location: nataslevel15view.php");
        $_SESSION = array();
        session_destroy();
    } else {
        echo "<script type='text/javascript'>alert('Unauthorized Attempt!')</script>";
    }
}
?>
