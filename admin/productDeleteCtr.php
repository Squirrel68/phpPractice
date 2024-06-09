<?php
require_once '../connectDB.php';
$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id = $id";
mysqli_query($connect, $sql);
mysqli_close($connect);

header('location: ./product.php');
