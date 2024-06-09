<?php
require_once "./header.php";
require_once "../connectDB.php";

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$users = mysqli_query($connect, $sql);
$user = mysqli_fetch_array($users);

mysqli_close($connect);
?>
<div class="row justify-content-end">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-lg-5">
                    <form role="form" action="./userUpdateCtr.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <div class="form-group">
                            <label>Tên người dùng</label>
                            <input required name="fullname" class="form-control" value="<?php echo $user['fullname'] ?>">
                        </div>

                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input required name="phone_number" class="form-control" value="<?php echo $user['phone_number'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="text" name="password" class="form-control" value="<?php echo $user['password'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="">Nhập lại mật khẩu</label>
                            <input type="text" name="repassword" class="form-control" value="<?php echo $user['password'] ?>">
                        </div>


                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input required name="address" class="form-control" value="<?php echo $user['address'] ?>">
                        </div>
                </div>
                <div class="col-lg-5">
                    <div class="form-group">
                        <label>Vai trò</label>
                        <select name="role" class="form-control">
                            <option value="admin" <?php if ($user['role'] == "admin") echo "selected" ?>>Admin</option>
                            <option value="user" <?php if ($user['role'] == "user") echo "selected" ?>>User</option>
                            <option value="shipper" <?php if ($user['role'] == "shipper") echo "selected" ?>>Shipper</option>
                        </select>
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