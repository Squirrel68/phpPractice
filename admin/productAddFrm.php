<?php
require_once "./header.php";
require_once "../connectDB.php";
$sql = "SELECT * FROM categories";
$categories = mysqli_query($connect, $sql);
mysqli_close($connect);

?>
<div class="row justify-content-end">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-lg-5">
                    <form role="form" action="./productAddCtr.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input required name="name" class="form-control" placeholder="">
                        </div>

                        <div class="form-group">
                            <label>Giá sản phẩm</label>
                            <input required name="price" type="number" min="0" class="form-control">
                        </div>
                </div>
                <div class="col-lg-5">
                    <div class="form-group">
                        <label>Ảnh sản phẩm</label>
                        <input type="file" name="thumbnail">
                    </div>
                    <div class="form-group">
                        <label>Danh mục</label>
                        <select name="cat_id" class="form-control">
                            <?php foreach ($categories as $category) : ?>
                                <option value="<?php echo $category['id'] ?>">
                                    <?php echo $category['name'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Mô tả sản phẩm</label>
                        <textarea id="description" name="description" required class="form-control" rows="3"></textarea>
                        <script>
                            CKEDITOR.replace("description");
                        </script>
                    </div>
                    <button name="sbm" type="submit" class="btn btn-success">Thêm mới</button>
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