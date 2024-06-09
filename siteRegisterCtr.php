<?php

$fullname = addslashes($_POST['fullname']);
$phone_number = addslashes($_POST['phone_number']);
$address = addslashes($_POST['address']);
$password = addslashes($_POST['password']);

require_once "./connectDB.php";
$sql = "INSERT INTO users (fullname, phone_number, address, password)
VALUES ('$fullname', '$phone_number', '$address', '$password')";
mysqli_query($connect, $sql);

header('location: ./siteLogin.php');
