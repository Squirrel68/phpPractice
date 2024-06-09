<?php
require_once './header.php';
require_once '../connectDB.php';

$sql = "SELECT * FROM orders
ORDER BY id DESC";
$orders = mysqli_query($connect, $sql);
mysqli_close($connect);
?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="user.php">Quản lý thành viên</a></li>
        <li><a href="product.php">Quản lý sản phẩm</a></li>
        <li class="active"><a href="order.php">Quản lý đơn hàng</a></li>
    </ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách đơn hàng</h1>
        </div>
    </div><!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="../index.php" class="btn btn-success">Thêm đơn hàng</a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" data-toggle="table" class="table-to-show">
                        <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Tổng tiền</th>
                                <th>Ngày đặt hàng</th>
                                <th>Trạng thái đơn hàng</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $order) : ?>
                                <tr>
                                    <form action="./orderUpdateCtr.php" method="post">
                                        <input name="id" type="hidden" value="<?php echo $order['id'] ?>">
                                        <td><?php echo $order['id'] ?></td>
                                        <td><?php echo $order['total_money'] ?></td>
                                        <td><?php echo $order['order_date'] ?></td>
                                        <td>
                                            <select name="status">
                                                <option value="pending" <?php if ($order['status'] == "pending") echo "selected" ?>>Đang chờ duyệt</option>
                                                <option value="processing" <?php if ($order['status'] == "processing") echo "selected" ?>>Đang xử lý</option>
                                                <option value="shipped" <?php if ($order['status'] == "shipped") echo "selected" ?>>Đã giao hàng</option>
                                                <option value="delivered" <?php if ($order['status'] == "delivered") echo "selected" ?>>Đã nhận hàng</option>
                                                <option value="cancelled" <?php if ($order['status'] == "cancelled") echo "selected" ?>>Đã hủy</option>
                                            </select>
                                        </td>
                                        <td style="padding-bottom: 10px" class="form-group">
                                            <button type="submit" class="btn">Sửa</button>
                                        </td>
                                    </form>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div> <!--/.main-->
</body>

</html>