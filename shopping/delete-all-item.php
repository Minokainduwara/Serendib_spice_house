<?php
require "../config/config.php";
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $delete = $conn->prepare("DELETE FROM cart WHERE user_id = :user_id");
    $delete->execute([':user_id' => $_SESSION['user_id']]);
}

header("Location: cart.php");
exit;
