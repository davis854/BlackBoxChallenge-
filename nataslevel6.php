<?php

include 'sessions.php';

$natas6_username = 'natas6';
$natas6_password = "abcD09";

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $natas6_username && $_POST['password'] === $natas6_password) {
        $regex_pattern = "/[a-zA-Z0-9]/";
        if (preg_match($regex_pattern, $natas6_password)) {
            $_SESSION['submit'] = true;
            header("Location: nataslevel7view.php");
        }
        echo "<script type='text/javascript'>alert('Unauthorized Attempt!')</script>";

    }
}
?>
