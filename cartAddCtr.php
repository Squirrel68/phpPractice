<?php
session_start();
$id = $_POST['id'];
$qty = $_POST['qty'];

if (empty($_SESSION['cart'][$id])) {
    require_once "./connectDB.php";
    $sql = "SELECT * FROM products WHERE id = $id";
    $product = mysqli_query($connect, $sql);
    $product = mysqli_fetch_array($product);
    $_SESSION['cart'][$id]['name'] = $product['name'];
    $_SESSION['cart'][$id]['photo'] = $product['thumbnail'];
    $_SESSION['cart'][$id]['price'] = $product['price'];
    $_SESSION['cart'][$id]['quantity'] = $qty;
} else {
    $_SESSION['cart'][$id]['quantity'] += $qty;
}

echo json_encode($_SESSION['cart']);
header("Location: ./cart.php");
