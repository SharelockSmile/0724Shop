<?php
session_start();
$_SESSION['u']=null;
unset($_SESSION['u']);
session_destroy();
header("location:index.php");
/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/24
 * Time: 21:15
 */