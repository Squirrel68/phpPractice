<?php
require_once '../connectDB.php';

$id = $_POST['id'];
$status = $_POST['status'];

$sql = "UPDATE orders SET status = '$status' WHERE id = $id";
mysqli_query($connect, $sql);
mysqli_close($connect);

header('location: ./order.php');
