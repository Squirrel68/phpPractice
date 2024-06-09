<?php
require_once "./header.php";
require_once "./connectDB.php";
$id = $_GET['id'];
$sql = "SELECT * FROM categories WHERE id = $id";
$category = mysqli_query($connect, $sql);
$category = mysqli_fetch_array($category);
$category = $category['name'];

$sql = "SELECT COUNT(*) as total FROM products WHERE category_id = $id";
$total = mysqli_query($connect, $sql);
$total = mysqli_fetch_array($total);
$total = $total['total'];

$sql = "SELECT * FROM products WHERE category_id = $id";
$products = mysqli_query($connect, $sql);
?>
<div class="products">
    <h3>
        <?php echo $category ?> (hiện có <?php echo $total ?> sản phẩm)
    </h3>
    <div class="product-list card-deck">
        <?php foreach ($products as $product) : ?>
            <div class="product-item card text-center">
                <div class="product-item-inner card">
                    <a href="./product.php?id=<?php echo $product['id'] ?>"><img src="./admin/img/<?php echo $product['thumbnail'] ?>" /></a>
                    <h4><a href="./product.php?id=<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a></h4>
                    <p>giá bán: <span><?php echo $product['price'] ?></span></p>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<!--	End List Product	-->

<?php require_once "./footer.php"; ?>