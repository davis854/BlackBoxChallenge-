<?php

include 'sessions.php';

$natas0_username = 'natas0';
$natas0_password = 'natas0';

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $natas0_username && $_POST['password'] === $natas0_password) {
        $_SESSION['submit'] = true;
        header("Location: nataslevel1view.php");
        $_SESSION = array();
        $session_destroy();
    } else {
        echo "<script type='text/javascript'>alert('Unauthorized Attempt!')</script>";
    }
}
?>
