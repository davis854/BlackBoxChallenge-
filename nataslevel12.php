<?php

include 'sessions.php';

$natas12_username = 'natas12';
$natas12_password = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $natas12_username && $_POST['password'] === $natas12_password) {
        $_SESSION['submit'] = true;
        header("Location: nataslevel13view.php");
    } else {
        echo "<script type='text/javascript'>alert('Unauthorized Attempt!')</script>";
    }
}
?>


