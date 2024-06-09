<?php
$err = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['phone']) || empty($_POST['password'])) {
        $err = 'Tài khoản và mật khẩu không được để trống';
    } else {
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        require_once '../connectDB.php';

        $sql = "SELECT * FROM users WHERE phone_number = '$phone' AND password = '$password' AND role = 'admin'";
        $result = mysqli_query($connect, $sql);
        if (mysqli_num_rows($result) == 1) {
            $each = mysqli_fetch_array($result);
            session_start();

            $_SESSION['id'] = $each['id'];
            $_SESSION['name'] = $each['fullname'];
            $_SESSION['role'] = $each['role'];
            // die($_SESSION['role']);
            header('location:index.php');
            exit;
        }

        $err = 'Tài khoản hoặc mật khẩu không đúng';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>True Breakfast Admin</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">True Breakfast Admin</div>
                <div class="panel-body">
                    <?php if ($err) { ?>
                        <div class="alert alert-danger">
                            <?php echo $err; ?>
                        </div>
                    <?php } ?>
                    <form role="form" method="post" action="">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Số điện thoại" name="phone" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Mật khẩu" name="password" type="password" value="">
                            </div>
                            <button type="submit" class="btn btn-primary">Đăng nhập</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
</body>

</html>