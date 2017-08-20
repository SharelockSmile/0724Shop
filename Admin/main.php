<?php
//echo "mainmianmianmainmainmainmai";
session_start();
//数据库的链接
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "db_database24");
$db->connet_DB();

include_once '../System/smartyConf.php';
$smarty->template_dir="../templates/Admin";
$smarty->compile_dir="../template_c";

define("Admin_CSS_URL","../Public/Admin/CSS/");
define("Admin_IMAGE_URL","../Public/Images/");
define("Admin_JS_URL","../Public/Admin/JS/");

//查询菜单
$firstSQL="SELECT * FROM tb_menu WHERE parentId=0";
$firstMenu=$db->ExecuteDQL($firstSQL);
//var_dump($firstMenu);
$smarty->assign("firstMenu",$firstMenu);
$secondSQL="SELECT * FROM tb_menu WHERE parentId<>0";
$secongMeun=$db->ExecuteDQL($secondSQL);
$smarty->assign("secondMenu",$secongMeun);

$smarty->display("main.tpl");
/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/28
 * Time: 10:59
 */