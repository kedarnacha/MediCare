<?php
session_start();

function logout() {
    session_unset();
    session_destroy();
    
    header("Location: login.php");
    exit;
}

if (isset($_POST['logout'])) {
    logout();
}
?>
