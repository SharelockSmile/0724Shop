<?php
include_once '../System/smartyConf.php';
$smarty->template_dir="../templates/Admin";
$smarty->compile_dir="../template_c";

define("Admin_CSS_URL","../Public/Admin/CSS/");
define("Admin_IMAGE_URL","../Public/Images/");
define("Admin_JS_URL","../Public/Admin/JS/");

$smarty->display("login.tpl");
/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/28
 * Time: 9:13
 */