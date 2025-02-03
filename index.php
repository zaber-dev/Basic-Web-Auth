<?php
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}
include 'template/home.php';
?>

