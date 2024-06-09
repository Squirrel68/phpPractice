<?php
if (!isset($_SESSION['id'])) {
    header('location:siteLogin.php');
    exit;
}
