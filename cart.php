<?php
require_once "./header.php";
require_once "siteLoginCheckMiddleware.php";
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$cart = $_SESSION['cart'];
$sum = 0;

?>
<!--	Cart	-->
<h3>GIỎ HÀNG CỦA BẠN</h3>
<div id="my-cart">
    <div class="row">
        <div class="cart-nav-item col-lg-4 col-md-4 col-sm-12">Thông tin sản phẩm</div>
        <div class="cart-nav-item col-lg-4 col-md-4 col-sm-12">Số lượng</div>
        <div class="cart-nav-item col-lg-4 col-md-4 col-sm-12">Đơn giá</div>
    </div>
    <form method="post" action="/update-cart">
        <?php foreach ($cart as $id => $each) : ?>
            <div class="cart-item row">
                <div class="cart-thumb col-lg-4 col-md-4 col-sm-12">
                    <a href="./product.php?id=<?php echo $id ?>"><?php echo $each['name'] ?></a>
                </div>
                <div class="cart-quantity col-lg-4 col-md-4 col-sm-12">
                    <!-- <input name="products[<%=item.id%>][qty]" type="number" id="quantity" class="form-control form-blue quantity" value="" min="1"> -->
                    <p><?php echo $each['quantity'] ?></p>

                </div>
                <div class="cart-price col-lg-4 col-md-4 col-sm-12">
                    <b><?php echo $each['price'] ?></b>
                    <a href="./cartDeleteCtr.php?id=<?php echo $id ?>">Xóa</a>
                </div>
            </div>
            <?php $sum += $each['price'] * $each['quantity'] ?>
        <?php endforeach ?>

        <br>

        <div class="row">
            <div class="cart-total col-lg-2 col-md-2 col-sm-12"><b>Tổng cộng:</b></div>
            <div style="color: red;" class="cart-price col-lg-3 col-md-3 col-sm-12"><b>
                    <?php echo $sum ?> đồng
                </b></div>
        </div>
    </form>

</div>
<!--	End Cart	-->
<br>
<br>
<!--    	Customer Info  -->
<div id="customer">
    <form method="post" action="./orderInsertCtr.php">
        <h4>Địa chỉ nhận đơn</h4>
        <div class="row">
            <div id="fullname" class="col-lg-4 col-md-4 col-sm-12">
                <input placeholder="Họ và tên (bắt buộc)" type="text" name="fullname" class="form-control" required>
            </div>
            <div id="phone_number" class="col-lg-4 col-md-4 col-sm-12">
                <input placeholder="Số điện thoại (bắt buộc)" type="text" name="phone_number" class="form-control" required>
            </div>
            <div id="email" class="col-lg-4 col-md-4 col-sm-12">
                <input placeholder="Email (bắt buộc)" type="text" name="email" class="form-control" required>
            </div>
        </div>
        <br>

        <div class="row address">
            <div class="col-lg-4">
                <p>Phường/xã</p>
                <!-- Select box  -->
                <select name="address_ward" id="ward" class="form-control">
                    <option value="Thanh Liệt">Thanh Liệt</option>
                    <option value="Yên Sở">Yên Sở</option>
                    <option value="Vĩnh Quỳnh">Vĩnh Quỳnh</option>
                    <option value="Thị Trấn Trâu Quỳ">Thị Trấn Trâu Quỳ</option>
                    <option value="Tả Thanh Oai">Tả Thanh Oai</option>
                </select>
            </div>

            <div class="col-lg-4">
                <p>Quận/huyện</p>
                <!-- Select box  -->
                <select name="address_district" id="district" class="form-control">
                    <option value="Thanh Trì">Thanh Trì</option>
                    <option value="Hoàng Mai">Hoàng Mai</option>
                    <option value="Hà Đông">Hà Đông</option>
                    <option value="Đống Đa">Đống Đa</option>
                    <option value="Cầu Giấy">Cầu Giấy</option>
                </select>
            </div>

            <div class="col-lg-4">
                <p>Tỉnh/thành phố</p>
                <!-- Select box  -->
                <select name="address_city" id="city" class="form-control">
                    <option value="Hà Nội">Hà Nội</option>
                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                    <option value="Đà Nẵng">Đà Nẵng</option>
                    <option value="Hải Phòng">Hải Phòng</option>
                    <option value="Cần Thơ">Cần Thơ</option>
                </select>
            </div>
        </div>
        <br>

        <input name="address_street" class="form-control" placeholder=" Số nhà, tên đường" type="text">

        <div style="margin-top: 10px;" class="row">
            <div class="by-now col-lg-6 col-md-6 col-sm-12">
                <button type="submit" class="btn btn-danger">
                    <b>Mua ngay</b>
                </button>
            </div>
        </div>
    </form>
</div>
<!--    	End Customer Info    	-->

<?php require_once "./footer.php" ?>