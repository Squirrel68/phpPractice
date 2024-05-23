<?php
require_once "./header.php" ?>
<div id="product">
    <div id="product-head" class="row">
        <div id="product-img" class="col-lg-6 col-md-6 col-sm-12">
            <img src="images/product-1.png">
        </div>
        <div id="product-details" class="col-lg-6 col-md-6 col-sm-12">
            <h1>iPhone X - 64GB Silver</h1>
            <ul>
                <li><span>Bảo hành:</span> 12 Tháng</li>
                <li><span>Đi kèm:</span> Hộp, sách, sạc, cáp, tai nghe</li>
                <li><span>Tình trạng:</span> Máy Mới 100%</li>
                <li><span>Khuyến Mại:</span> Dán Màn Hình 3 lớp</li>
                <li id="price">Giá Bán (chưa bao gồm VAT)</li>
                <li id="price-number">22.990.000đ</li>
                <li id="status">Còn hàng</li>
            </ul>
            <form method="post" action="/add-to-cart">
                <input type="hidden" name="id" value="">
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
    <div id="product-body" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3>Đánh giá về iPhone X 64GB</h3>
            <p>
                Màn hình OLED có hỗ trợ HDR là một sự nâng cấp mới của Apple thay vì màn hình LCD với IPS được tìm thấy trên iPhone 8 và iPhone 8 Plus đem đến tỉ lệ tương phản cao hơn đáng kể là 1.000.000: 1, so với 1.300: 1 ( iPhone 8 Plus ) và 1.400: 1 ( iPhone 8 ).
            </p>
        </div>
    </div>
</div>

<?php require_once "./footer.php" ?>