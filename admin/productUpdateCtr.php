<?php

$id = $_POST['id'];
$name = addslashes($_POST['name']); //addslashes: chống sql injection (chèn dấu / vào trc ky tu đặc biệt)
$price = addslashes($_POST['price']);
$cat_id = addslashes($_POST['cat_id']);
$description = addslashes($_POST['description']);

$thumbnail_new = $_FILES['thumbnail_new'];
if ($thumbnail_new['size'] > 0) {
    $folderUpload = "img/";
    $file_extension = explode('.', $thumbnail_new['name'])[1];
    $file_name = time() . '.' . $file_extension;
    $path = $folderUpload . $file_name;
    // die($path);
    move_uploaded_file($thumbnail_new['tmp_name'], $path);
} else {
    $file_name = $_POST['thumbnail'];
}


require_once "../connectDB.php";
$sql = "UPDATE products 
SET name = '$name', price = '$price', thumbnail = '$file_name', category_id = '$cat_id', description = '$description' WHERE id = $id";
mysqli_query($connect, $sql);
mysqli_close($connect);

header('location: ./product.php');
