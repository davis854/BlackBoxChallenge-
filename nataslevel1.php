<?php

include 'sessions.php';

$natas1_username = 'natas1';
$natas1_password = 'natas1';

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $natas1_username && $_POST['password'] === $natas1_password) {
        $_SESSION['submit'] = true;
        header("Location: nataslevel2view.php");
    } else {
        echo "<script type='text/javascript'>alert('Unauthorized Attempt!')</script>";
    }
}
?>
