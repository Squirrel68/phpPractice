<?php require_once "./header.php"; ?>
<div class="row justify-content-end">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-lg-5">
                    <form role="form" action="/admin/products/store" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input required name="name" class="form-control" placeholder="">
                        </div>

                        <div class="form-group">
                            <label>Giá sản phẩm</label>
                            <input required name="price" type="number" min="0" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Bảo hành</label>
                            <input required name="warranty" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Phụ kiện</label>
                            <input required name="accessories" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Khuyến mãi</label>
                            <input required name="promotion" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tình trạng</label>
                            <input required name="status" type="text" class="form-control">
                        </div>

                </div>
                <div class="col-lg-5">
                    <div class="form-group">
                        <label>Ảnh sản phẩm</label>

                        <input onchange="uploadImages(this)" type="file" name="thumbnail" id="imageUpload" multiple>
                    </div>
                    <div id="imagePreview"></div>
                    <div class="form-group">
                        <label>Danh mục</label>
                        <select name="cat_id" class="form-control">
                            <%for(category of categories) { %>
                            <option value="<%=category._id%>">
                                <%=category.title%>
                            </option>
                            <%}%>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select name="is_stock" class="form-control">
                                            <option value=1 selected>Còn hàng</option>
                                            <option value=0>Hết hàng</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Sản phẩm nổi bật</label>
                                        <div class="checkbox">
                                            <label>
                                                <input name="featured" type="checkbox" value="yes">Nổi bật
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả sản phẩm</label>
                                        <textarea id="description" name="description" required class="form-control"
                                            rows="3"></textarea>
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