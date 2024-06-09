<?php
require_once '../connectDB.php';
$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id = $id";
mysqli_query($connect, $sql);
mysqli_close($connect);
header('location: ./user.php');
