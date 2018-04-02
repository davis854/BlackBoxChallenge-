<?php

include 'sessions.php';

$natas3_username = 'natas3';
$natas3_password = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $natas3_username && $_POST['password'] === $natas3_password) {
        $_SESSION['submit'] = true;
        header("Location: nataslevel4view.php");
    } else {
        echo "<script type='text/javascript'>alert('Unauthorized Attempt!')</script>";
    }
}
?>