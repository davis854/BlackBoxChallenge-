<?php

include 'sessions.php';

$natas2_username = 'natas2';
$natas2_password = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $natas2_username && $_POST['password'] === $natas2_password) {
        $_SESSION['submit'] = true;
        header("Location: nataslevel3view.php");
    } else {
        echo "<script type='text/javascript'>alert('Unauthorized Attempt!')</script>";
    }
}
?>
