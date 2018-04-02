<?php

include 'sessions.php';

$natas9_username = 'natas9';
$natas9_password = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $natas9_username && $_POST['password'] === $natas9_password) {
        $_SESSION['submit'] = true;
        header("Location: nataslevel10view.php");
    } else {
        echo "<script type='text/javascript'>alert('Unauthorized Attempt!')</script>";
    }
}
?>