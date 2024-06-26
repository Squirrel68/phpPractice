<?php
require_once "./header.php";
?>
<div class="row justify-content-end">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-lg-5">
                    <form role="form" action="./userAddCtr.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên người dùng</label>
                            <input required name="fullname" class="form-control" placeholder="">
                        </div>

                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input required name="phone_number" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Nhập lại mật khẩu</label>
                            <input type="password" name="repassword" class="form-control">
                        </div>


                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input required name="address" class="form-control">
                        </div>
                </div>
                <div class="col-lg-5">
                    <div class="form-group">
                        <label>Vai trò</label>
                        <select name="role" class="form-control">
                            <option value="admin">Admin</option>
                            <option value="user" selected>User</option>
                            <option value="shipper">Shipper</option>
                        </select>
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