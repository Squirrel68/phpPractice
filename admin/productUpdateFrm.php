<?php
require_once "./header.php";
require_once "../connectDB.php";

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
$products = mysqli_query($connect, $sql);
$product = mysqli_fetch_array($products);

$sql = "SELECT * FROM categories";
$categories = mysqli_query($connect, $sql);

mysqli_close($connect);
?>
<div class="row justify-content-end">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-lg-5">
                    <form role="form" action="./productUpdateCtr.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input value="<?php echo $product['name'] ?>" required name="name" class="form-control" placeholder="">
                        </div>

                        <div class="form-group">
                            <label>Giá sản phẩm</label>
                            <input value="<?php echo $product['price'] ?>" required name="price" type="number" min="0" class="form-control">
                        </div>
                </div>
                <div class="col-lg-5">
                    <div class="form-group">
                        <label>Đổi ảnh mới</label>
                        <input type="file" name="thumbnail_new">
                    </div>
                    <div class="form-group">
                        <label>Ảnh cũ</label>
                        <img src="./img/<?php echo $product['thumbnail'] ?>" width="100px" alt="">
                        <input value="<?php echo $product['thumbnail'] ?>" type="hidden" name="thumbnail">
                        <br>
                    </div>
                    <div class="form-group">
                        <label>Danh mục</label>
                        <select name="cat_id" class="form-control">
                            <?php foreach ($categories as $category) : ?>
                                <option value="<?php echo $category['id'] ?>" <?php if ($product['category_id'] == $category['id']) echo "selected" ?>>
                                    <?php echo $category['name'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Mô tả sản phẩm</label>
                        <textarea id="description" name="description" required class="form-control" rows="3"><?php echo $product['description'] ?></textarea>

                    </div>
                    <button name="sbm" type="submit" class="btn btn-success">Cập nhập</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div><!-- /.row -->
</div>
</div>
</div>
</div>