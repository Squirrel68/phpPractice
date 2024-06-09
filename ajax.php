<?php
require_once "./connectDB.php";

$key = $_POST['keyword'];
if (empty($key)) {
    return;
}
$sql = "SELECT * FROM products WHERE name LIKE '%$key%'";
$products = mysqli_query($connect, $sql);

// <ul>
//                         <li class="search-item"><a href="#">Sản phẩm 1</a></li>
//                         <li class="search-item"><a href="#">Sản phẩm 2</a></li>
//                         <li class="search-item"><a href="#">Sản phẩm 3</a></li>
//                     </ul>
while ($product = mysqli_fetch_array($products)) {
    $id = $product['id'];
    echo "<div class='search-item'><a href='./product.php?id=$id'>" . $product['name'] . "</a></div>";
}
