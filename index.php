<?php
require_once "./header.php";
require_once "./connectDB.php";
$sql = "SELECT * FROM products
ORDER BY id DESC";
$products = mysqli_query($connect, $sql);
?>
<div class="row">
  <div id="main" class="col-lg-12 col-md-12 col-sm-12">
    <!-- Latest Product  -->
    <div class="products">
      <h3>Menu mới</h3>
      <div class="product-list row row-cols-lg-3 row-cols-md-3 row-cols-sm-1">
        <?php foreach ($products as $product) : ?>
          <div class="product-item">
            <div class="product-item-inner card">
              <a href="./product.php?id=<?php echo $product['id'] ?>"><img src="./admin/img/<?php echo $product['thumbnail'] ?>" /></a>
              <h4><a href="./product.php?id=<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a></h4>
              <p>giá bán: <span><?php echo $product['price'] ?></span></p>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
    <!-- End Latest Product  -->
  </div>
</div>
</div>
</div>
<!-- End Body  -->

<?php
require_once "./footer.php";
?>