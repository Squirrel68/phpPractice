<?php
require_once './header.php';
?>
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li><a href="index.php">Dashboard</a></li>
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
        <a href="product-add.html" class="btn btn-success">Thêm sản phẩm</a>
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
                            <tr>
                                <td style="">1</td>
                                <td style="">Sản phẩm số 1</td>
                                <td style="">18.500.000 vnd</td>
                                <td style="text-align: center"><img width="130" height="180" src="img/download.jpeg" /></td>
                                <td><span class="label label-success">Còn hàng</span></td>
                                <td>Danh mục số 1</td>
                                <td class="form-group">
                                    <a href="product-edit.html" class="btn btn-primary">Sửa</a>
                                    <a href="product-edit.html" class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="">1</td>
                                <td style="">Sản phẩm số 1</td>
                                <td style="">18.500.000 vnd</td>
                                <td style="text-align: center"><img width="130" height="180" src="img/download.jpeg" /></td>
                                <td><span class="label label-success">Còn hàng</span></td>
                                <td>Danh mục số 1</td>
                                <td class="form-group">
                                    <a href="product-edit.html" class="btn btn-primary">Sửa</a>
                                    <a href="product-edit.html" class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div> <!--/.main-->
</body>

</html>