  <?php require_once "./header.php";
    $key = $_GET['key'];
    require_once "./connectDB.php";
    $sql = "SELECT * FROM products WHERE name LIKE '%$key%'";
    $products = mysqli_query($connect, $sql);
    ?>
  <!--	List Product	-->
  <div class="products">
      <div id="search-result">Kết quả tìm kiếm với sản phẩm <span>
              <?php echo $key; ?>
          </span></div>
      <div class="product-list card-deck">
          <?php foreach ($products as $product) : ?>
              <div class="product-item">
                  <div class="product-item-inner card">
                      <a href="./product.php?id=<?php echo $product['id'] ?>"><img src="./admin/img/<?php echo $product['thumbnail'] ?>" /></a>
                      <h4><a href="./product.php?id=<?php echo $product['id'] ?>"><?php echo $product['name'] ?></a></h4>
                      <p>giá bán: <span><?php echo $product['price'] ?></span></p>
                  </div>
              </div>
          <?php endforeach; ?>
      </div>
  </div>
  <!--	End List Product	-->

  <?php require_once "./footer.php"; ?>