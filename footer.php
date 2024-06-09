<?php
$sql = "SELECT * FROM categories";
$categories = mysqli_query($connect, $sql);

?>
<!-- Footer Top  -->
<div id="footer-t">
    <div class="container">
        <div class="row">
            <div id="logo-f" class="col-lg-3 col-md-6 col-sm-12">
                <h2>
                    <a class="navbar-brand" href="./index.php"><span>True</span>Breakfast</a>
                </h2>
                <!-- Generate content for introduce a food store in Vietnamese  -->
                <p>
                    True Breakfast là cửa hàng thức ăn sáng hàng đầu tại Việt Nam. Chúng
                    tôi cung cấp các sản phẩm thức ăn sáng chất lượng cao, giá cả hợp lý
                    và phục vụ nhanh chóng.
                <p>
            </div>
            <div id="address" class="col-lg-3 col-md-6 col-sm-12">
                <h3>Địa chỉ</h3>
                <!-- embed google map  -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.2925132858995!2d105.78486297387471!3d20.980908489423037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135accdd8a1ad71%3A0xa2f9b16036648187!2zSOG7jWMgdmnhu4duIEPDtG5nIG5naOG7hyBCxrB1IGNow61uaCB2aeG7hW4gdGjDtG5n!5e0!3m2!1svi!2s!4v1716378811424!5m2!1svi!2s" width="100%" height="200px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div id="services" class="col-lg-3 col-md-6 col-sm-12">
                <h3>Menu</h3>
                <?php foreach ($categories as $category) : ?>
                    <p><a style="color:#fff" href="./category.php?id=<?php echo $category['id'] ?>"><?php echo $category['name'] ?></a></p>
                <?php endforeach ?>
            </div>
            <div id="hotline" class="col-lg-3 col-md-6 col-sm-12">
                <h3>Hotline</h3>
                <p>Phone Sale: (+84) 0966737526</p>
                <p>Email: truebreakfast.vn@gmail.com</p>
            </div>
        </div>
    </div>
</div>
<!-- End Footer Top  -->
</body>

</html>