<?php
include_once '../System/smartyConf.php';
include "../System/DBHelper.php";
$db=new DBHelper("localhost","root","root","db_database24");
if (isset($_GET["pid"]))
{
    $id=$_GET["pid"];
}
$db->connet_DB();
$smarty->template_dir="../templates/Home";
$smarty->compile_dir="../template_c";

$sql="SELECT title, content FROM tb_public WHERE id=$id";
$res=$db->ExecuteDQL($sql);
$smarty->assign("publicRes",$res);
$smarty->display("publicDetail.tpl");

/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/25
 * Time: 14:50
 */