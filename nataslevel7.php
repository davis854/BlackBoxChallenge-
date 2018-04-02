<?php

include 'sessions.php';

$natas7_username = 'natas7';
$natas7_password = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $natas7_username && $_POST['password'] === $natas7_password) {
        $_SESSION['submit'] = true;
        header("Location: nataslevel8view.php");
    } else {
        echo "<script type='text/javascript'>alert('Unauthorized Attempt!')</script>";
    }
}
?>
