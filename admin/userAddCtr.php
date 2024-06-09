<?php

$fullname = addslashes($_POST['fullname']);
$phone_number = addslashes($_POST['phone_number']);
$address = addslashes($_POST['address']);
$password = addslashes($_POST['password']);
$role = addslashes($_POST['role']);

require_once "../connectDB.php";
$sql = "INSERT INTO users (fullname, phone_number, address, password, role)
VALUES ('$fullname', '$phone_number', '$address', '$password', '$role')";
mysqli_query($connect, $sql);
mysqli_close($connect);

header('location: ./user.php');
