<?php

include 'sessions.php';

$natas10_username = 'natas10';
$natas10_password = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $natas10_username && $_POST['password'] === $natas10_password) {
        $_SESSION['submit'] = true;
        header("Location: nataslevel11view.php");
        $_SESSION = array();
        session_destroy();
    } else {
        echo "<script type='text/javascript'>alert('Unauthorized Attempt!')</script>";
    }
}
?>

