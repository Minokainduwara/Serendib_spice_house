<?php
require "../config/config.php";
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cart_id = (int)$_POST['cart_id'];
    $pro_amount = max(1, (int)$_POST['pro_amount']); // minimum 1

    // Update quantity only if this item belongs to logged in user
    $update = $conn->prepare("UPDATE cart SET pro_amount = :pro_amount WHERE id = :cart_id AND user_id = :user_id");
    $update->execute([
        ':pro_amount' => $pro_amount,
        ':cart_id' => $cart_id,
        ':user_id' => $_SESSION['user_id']
    ]);
}

header("Location: cart.php");
exit;
