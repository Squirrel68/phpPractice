<?php
$id = $_POST['id'];
$fullname = addslashes($_POST['fullname']);
$phone_number = addslashes($_POST['phone_number']);
$address = addslashes($_POST['address']);
$password = addslashes($_POST['password']);
$role = addslashes($_POST['role']);

require_once "../connectDB.php";
$sql = "UPDATE users
SET fullname = '$fullname', phone_number = '$phone_number', address = '$address', password = '$password', role = '$role' WHERE id = $id";
mysqli_query($connect, $sql);
mysqli_close($connect);

header('location: ./user.php');
