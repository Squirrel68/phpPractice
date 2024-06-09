<?php
// log out admin
session_start();
session_destroy();
header('location:siteLogin.php');
