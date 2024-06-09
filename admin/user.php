<?php
require_once './header.php';
require_once '../connectDB.php';

$sql = "SELECT * FROM users
ORDER BY id DESC";
$users = mysqli_query($connect, $sql);
mysqli_close($connect);
?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li><a href="index.php">Trang chủ</a></li>
        <li class="active"><a href="user.php">Quản lý thành viên</a></li>
        <li><a href="product.php">Quản lý sản phẩm</a></li>
        <li><a href="order.php">Quản lý đơn hàng</a></li>
    </ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách người dùng</h1>
        </div>
    </div><!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="./userAddFrm.php" class="btn btn-success">Thêm người dùng</a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" data-toggle="table" class="table-to-show">
                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">Mã người dùng</th>
                                <th data-field="name" data-sortable="true">Tên người dùng</th>
                                <th>SĐT</th>
                                <th>Địa chỉ</th>
                                <th>Vai trò</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <td style=""><?php echo $user['id'] ?></td>
                                    <td style=""><?php echo $user['fullname'] ?></td>
                                    <td style=""><?php echo $user['phone_number'] ?></td>
                                    <td style=""><?php echo $user['address'] ?></td>
                                    <td style=""><?php echo $user['role'] ?></td>
                                    <td class="form-group">
                                        <a href="./userUpdateFrm.php?id=<?php echo $user['id'] ?>" class="btn btn-primary">Sửa</a>
                                        <a href="./userDeleteCtr.php?id=<?php echo $user['id'] ?>" class="btn btn-danger">Xóa</a>
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