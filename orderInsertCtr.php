<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$address_ward = $_POST['address_ward'];
$address_district = $_POST['address_district'];
$address_city = $_POST['address_city'];
$address_street = $_POST['address_street'];

require_once "./connectDB.php";
session_start();

$cart = $_SESSION['cart'];
$total = 0;
foreach ($cart as $product) {
    $total += $product['price'] * $product['quantity'];
}

$userId = $_SESSION['id'];
$status = "pending";

$sql = "INSERT INTO 
orders (user_id, total_money, status, fullname, email, phone_number, address_ward, address_district, address_city, address_street)
VALUES ($userId, $total, '$status', '$fullname', '$email', '$phone_number', '$address_ward', '$address_district', '$address_city', '$address_street')";
mysqli_query($connect, $sql);

// Insert order_details 
$sql = "SELECT MAX(id) from orders WHERE user_id='$userId'";
$result = mysqli_query($connect, $sql);
$order_id = mysqli_fetch_array($result)['MAX(id)'];

foreach ($cart as $productId => $product) {
    $quantity = $product['quantity'];
    $sql = "INSERT INTO order_details (order_id, product_id, quantity) 
    VALUES ($order_id, $productId, $quantity)";
    mysqli_query($connect, $sql);
}

unset($_SESSION['cart']);
header("Location: ./orderSuccess.php");
