<?php
require_once './header.php';
require_once '../connectDB.php';
// count users
$sql = "SELECT COUNT(*) as total FROM users";
$total_users = mysqli_query($connect, $sql);
$total_users = mysqli_fetch_assoc($total_users);
$total_users = $total_users['total'];

// count products
$sql = "SELECT COUNT(*) as total FROM products";
$total_products = mysqli_query($connect, $sql);
$total_products = mysqli_fetch_assoc($total_products);
$total_products = $total_products['total'];

// count orders
$sql = "SELECT COUNT(*) as total FROM orders";
$total_orders = mysqli_query($connect, $sql);
$total_orders = mysqli_fetch_assoc($total_orders);
$total_orders = $total_orders['total'];


?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li class="active"><a href="index.php">Trang chủ</a></li>
        <li><a href="user.php">Quản lý thành viên</a></li>
        <li><a href="product.php">Quản lý sản phẩm</a></li>
        <li><a href="order.php">Quản lý đơn hàng</a></li>
    </ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Trang chủ quản trị</h1>
        </div>
    </div><!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="panel panel-blue panel-widget ">
                <div class="row no-padding">
                    <div class="col-sm-12 col-lg-12 widget-right">
                        <div class="large"><?php echo $total_products ?></div>
                        <div class="text-muted">Sản Phẩm</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="panel panel-orange panel-widget">
                <div class="row no-padding">

                    <div class="col-sm-12 col-lg-12 widget-right">
                        <div class="large"><?php echo $total_orders ?></div>
                        <div class="text-muted">Đơn hàng</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-12 col-lg-12 widget-right">
                        <div class="large"><?php echo $total_users ?></div>
                        <div class="text-muted">Thành Viên</div>
                    </div>
                </div>
            </div>
        </div>

    </div><!--/.row-->
</div> <!--/.main-->

<script src="js/bootstrap.js"></script>
<script src="js/jquery-3.6.4.js"></script>
</body>

</html>