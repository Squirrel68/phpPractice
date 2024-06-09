<?php
require_once './header.php';
require_once '../connectDB.php';
$sql = "SELECT products.*, categories.name as cat_name 
FROM products 
JOIN categories ON products.category_id = categories.id 
ORDER BY products.id DESC";
$products = mysqli_query($connect, $sql);
mysqli_close($connect);
?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li><a href="index.php">Trang chủ</a></li>
        <li><a href="user.php">Quản lý thành viên</a></li>
        <li class="active"><a href="product.php">Quản lý sản phẩm</a></li>
        <li><a href="order.php">Quản lý đơn hàng</a></li>
    </ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách sản phẩm</h1>
        </div>
    </div><!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="./productAddFrm.php" class="btn btn-success">Thêm sản phẩm</a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" data-toggle="table" class="table-to-show">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="name" data-sortable="true">Tên sản phẩm</th>
                                <th data-field="price" data-sortable="true">Giá</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Trạng thái</th>
                                <th>Danh mục</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product) : ?>
                                <tr>
                                    <td style=""><?php echo $product['id'] ?></td>
                                    <td style=""><?php echo $product['name'] ?></td>
                                    <td style=""><?php echo $product['price'] ?></td>
                                    <td style="text-align: center"><img width="130" height="180" src="./img/<?php echo $product['thumbnail'] ?>" /></td>
                                    <td><span class="label label-success">Còn hàng</span></td>
                                    <td><?php echo $product['cat_name'] ?></td>
                                    <td class="form-group">
                                        <a href="./productUpdateFrm.php?id=<?php echo $product['id'] ?>" class="btn btn-primary">Sửa</a>
                                        <a href="./productDeleteCtr.php?id=<?php echo $product['id'] ?>" class="btn btn-danger">Xóa</a>
                                    </td>
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