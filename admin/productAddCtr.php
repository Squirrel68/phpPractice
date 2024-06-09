<?php

$name = addslashes($_POST['name']); //addslashes: chống sql injection (chèn dấu / vào trc ky tu đặc biệt)
$price = addslashes($_POST['price']);
$thumbnail = $_FILES['thumbnail'];
$cat_id = addslashes($_POST['cat_id']);
$description = addslashes($_POST['description']);

$folderUpload = "./img/";
$file_extension = explode('/', $thumbnail['type'])[1];
$file_name = time() . '.' . $file_extension;
$path = $folderUpload . $file_name;

move_uploaded_file($thumbnail['tmp_name'], $path);

require_once "../connectDB.php";
$sql = "INSERT INTO products (name, price, thumbnail, category_id, description) 
VALUES ('$name', '$price', '$file_name', '$cat_id', '$description')";
mysqli_query($connect, $sql);
mysqli_close($connect);

header('location: ./product.php');
