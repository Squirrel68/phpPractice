<?php
$connect = mysqli_connect('localhost', 'root', '', 'qldh');
mysqli_set_charset($connect, "utf8");
if (!$connect) {
    die("Kết nối không thành công");
}
