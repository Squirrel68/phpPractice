<?php
require_once "./header.php";
require_once "./connectDB.php";

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
$product = mysqli_query($connect, $sql);
$product = mysqli_fetch_array($product);

?>
<div id="product">
    <div id="product-head" class="row">
        <div id="product-img" class="col-lg-6 col-md-6 col-sm-12">
            <img class="img-fluid" src="./admin/img/<?php echo $product['thumbnail'] ?>">
        </div>
        <div id="product-details" class="col-lg-6 col-md-6 col-sm-12">
            <h1><?php echo $product['name'] ?></h1>
            <p>Mô tả: <span><?php echo $product['description'] ?></span></p>
            <p>Giá bán: <span><?php echo $product['price'] ?></span></p>
            <!-- Form add to cart  -->
            <form method="post" action="./cartAddCtr.php">
                <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                <div class="form-row align-items-center">
                    <div class="col-sm-3 my-1">
                        <div class="input-group">
                            <input type="number" class="form-control" min="1" value="1" name="qty" id="quantity" placeholder="Số lượng">
                        </div>
                    </div>
                    <div class="col-auto my-1">
                        <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once "./footer.php" ?>