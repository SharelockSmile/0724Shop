<?php
include_once '../System/smartyConf.php';
$smarty->template_dir="../templates/Home";
$smarty->compile_dir="../template_c";
define("HOME_IMAGE_URL","../Public/Images/");
define("HOME_JS_URL","../Public/Home/JS/");

include "../System/DBHelper.php";
$db=new DBHelper("localhost","root","root","db_database24");
if (isset($_GET["gid"]))
{
    $gid=$_GET["gid"];
}
$db->connet_DB();

$sql="SELECT tb_commo.name as gName,tb_commo.id as gid,pics,info,area,model,fold,brand,m_price,v_price,tb_class.name as cName 
FROM tb_commo,tb_class
WHERE tb_commo.id=$gid AND tb_class.id=tb_commo.class ;";
$res=$db->ExecuteDQL($sql);
/*var_dump($res);
echo "<h3>".$res[0]['name']."</h3>";
echo "<img src='0724Shop/Public/Images/'+{$res[0]["pics"]} alt=''><br>";
echo $res[0]["info"]."<br>".$res[0]["area"]."<br>".$res[0]["model"]."<br>".$res[0]["brand"];*/
$smarty->assign("goodsRes",$res);
$smarty->display("goods.tpl");