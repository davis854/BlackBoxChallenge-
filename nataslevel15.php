<?php

include 'sessions.php';

$natas15_username = 'natas15';
$natas15_password = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $natas15_username && $_POST['password'] === $natas15_password) {
        $_SESSION['submit'] = true;
        header("Location: summary_of_results.php");
        $_SESSION = array();
        session_destroy();
    } else {
        echo "<script type='text/javascript'>alert('Unauthorized Attempt!')</script>";
    }
}
?>

