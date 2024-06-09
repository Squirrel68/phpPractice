<?php
require_once "./header.php";
require_once "./siteLoginCheckMiddleware.php";
$sql = "SELECT * FROM orders WHERE user_id = " . $_SESSION['id'] . " ORDER BY id DESC LIMIT 1";
$result = mysqli_query($connect, $sql);
// neu ko co don hang nao thi in ra "Không có đơn hàng nào" va thoat khoi vong lap
if (mysqli_num_rows($result) == 0) {
    echo "<h3>Không có đơn hàng nào</h3>";
    require_once "./footer.php";
    exit;
}
$order = mysqli_fetch_array($result);
$order_id = $order['id'];
$status = $order['status'];
?>
<!--	Order Success	-->
<div id="order-success">
    <div class="row">
        <h3>Bạn đã đặt hàng thành công !</h3>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h4>Thông tin đơn hàng</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM order_details WHERE order_id = $order_id";
                $result = mysqli_query($connect, $sql);
                if (!$result) {
                    $result = [];
                }
                $stt = 1;
                $total = 0;
                while ($order_detail = mysqli_fetch_array($result)) {
                    $product_id = $order_detail['product_id'];
                    $sql = "SELECT * FROM products WHERE id = $product_id";
                    $product = mysqli_fetch_array(mysqli_query($connect, $sql));
                    $price = $product['price'];
                    $quantity = $order_detail['quantity'];
                    $total += $price * $quantity;
                ?>
                    <tr>
                        <td><?php echo $stt++ ?></td>
                        <td><?php echo $product['name'] ?></td>
                        <td><?php echo number_format($price) ?> VNĐ</td>
                        <td><?php echo $quantity ?></td>
                        <td><?php echo number_format($price * $quantity) ?> VNĐ</td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="4">Tổng tiền</td>
                    <td><?php echo number_format($total) ?> VNĐ</td>
                </tr>
            </tbody>
        </table>

        <h4>Trạng thái đơn hàng: <span style="color: #30a5ff">
                <!-- pending, processing, shipped, delivered, cancelled -->
                <?php if ($status == 'pending') echo "Đang chờ duyệt" ?>
                <?php if ($status == 'processing') echo "Đang xử lý" ?>
                <?php if ($status == 'shipped') echo "Đã giao hàng" ?>
                <?php if ($status == 'delivered') echo "Đã nhận hàng" ?>
                <?php if ($status == 'cancelled') echo "Đã hủy" ?>
            </span></h4>

    </div>
</div>
<!--	End Order Success	-->
<?php require_once "./footer.php" ?>