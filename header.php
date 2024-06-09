<?php
require_once "./connectDB.php";
$sql = "SELECT * FROM categories";
$categories = mysqli_query($connect, $sql);
// Count cart in session 
session_start();
$cartCount = 0;
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $product) {
        $cartCount += $product['quantity'];
    }
}
$isLogin = false;
// Check xem da co session id chua
if (isset($_SESSION['id'])) {
    $isLogin = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>True Breakfast</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <script src="./js/jquery-3.6.4.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script type="">
        $(document).ready(function() {
            // key-up event: xay ra khi bo phim duoc nha ra
            $(".searchProduct").keyup(function() {
                var keyword = $(this).val();
                $.post('ajax.php', {
                    keyword: keyword
                }, function(data) {
                    $(".danhsach").html(data);
                });
            });
        });
    </script>
</head>

<body>
    <!-- Header  -->
    <div id="header">
        <div class="container">
            <div class="row">
                <div id="logo" class="col-lg-3 col-md-3 col-sm-12">
                    <h1>
                        <a class="navbar-brand" href="./index.php"><span>True</span>Breakfast</a>
                    </h1>
                    <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div id="search" class="col-lg-7 col-md-7 col-sm-12">
                    <form class="form-inline" action="./search.php">
                        <input name="key" class="searchProduct form-control" type="search" placeholder="Tìm kiếm" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">
                            Tìm kiếm
                        </button>
                    </form>
                </div>
                <!-- search dropdown ul li a -->
                <div id="search-dropdown" class="danhsach col-lg-7 col-md-7 col-sm-12">

                </div>
                <!-- end search dropdown ul li a -->
                <div id="cart" class="col-lg-2 col-md-2 col-sm-12">
                    <a href="./cart.php">giỏ hàng</a>
                    <span><?php echo $cartCount ?></span>
                    <?php if ($isLogin) : ?>
                        <a href="./siteLogoutCtr.php">Đăng xuất</a>
                    <?php else : ?>
                        <a href="./siteLogin.php">Đăng nhập</a>
                    <?php endif ?>
                </div>

            </div>
        </div>
    </div>
    <!-- End header  -->

    <!-- Body  -->
    <div id="body">
        <div class="container">
            <div class="row">
                <div id="menu" class="collapse col-lg-12 col-md-12 col-sm-12">
                    <ul>
                        <!-- <li class="menu-item"><a href="#">Trang chủ</a></li> -->
                        <?php foreach ($categories as $category) : ?>
                            <li class="menu-item"><a href="./category.php?id=<?php echo $category['id'] ?>"><?php echo $category['name'] ?></a></li>
                        <?php endforeach ?>
                        <li class="menu-item"><a href="./orderSuccess.php">Theo dõi đơn hàng</a></li>
                    </ul>
                </div>
            </div>