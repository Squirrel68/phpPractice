<?php require_once "./header.php" ?>
<!--	Cart	-->
<h3>GIỎ HÀNG CỦA BẠN</h3>
<div id="my-cart">
    <div class="row">
        <div class="cart-nav-item col-lg-4 col-md-4 col-sm-12">Thông tin sản phẩm</div>
        <div class="cart-nav-item col-lg-4 col-md-4 col-sm-12">Số lượng</div>
        <div class="cart-nav-item col-lg-4 col-md-4 col-sm-12">Đơn giá</div>
    </div>
    <form method="post" action="/update-cart">
        <!-- <%for(item of cart) {%> -->
        <div class="cart-item row">
            <div class="cart-thumb col-lg-4 col-md-4 col-sm-12">
                <p>Sản phẩm 1</p>
            </div>
            <div class="cart-quantity col-lg-4 col-md-4 col-sm-12">
                <input name="products[<%=item.id%>][qty]" type="number" id="quantity" class="form-control form-blue quantity" value="<%=item.qty%>" min="1">
            </div>
            <div class="cart-price col-lg-4 col-md-4 col-sm-12">
                <b>100.000đ</b>
                <a href="/del-cart-<%=item.id%>">Xóa</a>
            </div>
        </div>
        <div class="cart-item row">
            <div class="cart-thumb col-lg-4 col-md-4 col-sm-12">
                <p>Sản phẩm 1</p>
            </div>
            <div class="cart-quantity col-lg-4 col-md-4 col-sm-12">
                <input name="products[<%=item.id%>][qty]" type="number" id="quantity" class="form-control form-blue quantity" value="<%=item.qty%>" min="1">
            </div>
            <div class="cart-price col-lg-4 col-md-4 col-sm-12"><b>100.000đ
                    <!-- <%=new Intl.NumberFormat("vi-VN", { style: "currency" , currency: "VND" ,
                                        minimumFractionDigits: 0, }).format(item.price*item.qty) %> -->
                </b><a href="/del-cart-<%=item.id%>">Xóa</a>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="cart-total col-lg-2 col-md-2 col-sm-12"><b>Tổng cộng:</b></div>
            <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>
                    100.000đ
                </b></div>
        </div>
    </form>

</div>
<!--	End Cart	-->

<!--    	Customer Info  -->
<div id="customer">
    <form method="post" action="/order">
        <div class="row">

            <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                <input placeholder="Họ và tên (bắt buộc)" type="text" name="name" class="form-control" required>
            </div>
            <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                <input placeholder="Số điện thoại (bắt buộc)" type="text" name="phone" class="form-control" required>
            </div>
            <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                <input placeholder="Email (bắt buộc)" type="text" name="mail" class="form-control" required>
            </div>
        </div>

        <br>
        <h3>Địa chỉ nhận đơn</h3>

        <div class="row address">

            <div class="col-lg-4">
                <p>Phường/xã</p>
                <!-- Select box  -->
                <select name="ward" id="ward" class="form-control">
                    <option value="1">Phường 1</option>
                    <option value="2">Phường 2</option>
                    <option value="3">Phường 3</option>
                    <option value="4">Phường 4</option>
                    <option value="5">Phường 5</option>
                </select>
            </div>

            <div class="col-lg-4">
                <p>Quận/huyện</p>
                <!-- Select box  -->
                <select name="district" id="district" class="form-control">
                    <option value="1">Quận 1</option>
                    <option value="2">Quận 2</option>
                    <option value="3">Quận 3</option>
                    <option value="4">Quận 4</option>
                    <option value="5">Quận 5</option>
                </select>
            </div>

            <div class="col-lg-4">
                <p>Tỉnh/thành phố</p>
                <!-- Select box  -->
                <select name="city" id="city" class="form-control">
                    <option value="1">Hồ Chí Minh</option>
                    <option value="2">Hà Nội</option>
                    <option value="3">Đà Nẵng</option>
                    <option value="4">Hải Phòng</option>
                    <option value="5">Cần Thơ</option>
                </select>
            </div>
        </div>
        <br>

        <input placeholder="Số nhà, tên đường" type="text">

        <br>
        <div class="row">
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