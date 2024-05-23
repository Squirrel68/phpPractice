<?php
require_once './header.php';

?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li class="active"><a href="index.php">Dashboard</a></li>
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
                        <div class="large">120</div>
                        <div class="text-muted">Sản Phẩm</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="panel panel-orange panel-widget">
                <div class="row no-padding">

                    <div class="col-sm-12 col-lg-12 widget-right">
                        <div class="large">52</div>
                        <div class="text-muted">Đơn hàng</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="panel panel-teal panel-widget">
                <div class="row no-padding">
                    <div class="col-sm-12 col-lg-12 widget-right">
                        <div class="large">24</div>
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