<?php

include 'sessions.php';

$natas4_username = 'natas4';
$natas4_password = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $natas4_username && $_POST['password'] === $natas4_password) {
        $_SESSION['submit'] = true;
        header("Location: nataslevel5view.php");
    } else {
        echo "<script type='text/javascript'>alert('Unauthorized Attempt!')</script>";
    }
}
?>
