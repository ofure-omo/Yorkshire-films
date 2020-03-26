<?php
session_destroy();

if(isset($_POST['logout'])) {
    unset($_SESSION['user_ID']);
    session_destroy();
    header('location: home.php');
    exit;
}
