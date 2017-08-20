<?php
session_start();
//数据库的链接
include '../System/DBHelper.php';
$db=new DBHelper("localhost", "root", "root", "db_database24");
$db->connet_DB();

include_once '../System/smartyConf.php';
$smarty->template_dir="../templates/Home";
$smarty->compile_dir="../template_c";

define("HOME_CSS_URL","../Public/Home/CSS/");
define("HOME_IMAGE_URL","../Public/Images/");
define("HOME_JS_URL","../Public/Home/JS/");
//查询公告信息
$sqlPublics="select id,title from tb_public order by addtime desc LIMIT 0,5";
$PublicsRes=$db->ExecuteDQL($sqlPublics);
$smarty->assign("publicsRes",$PublicsRes);
//查询友情链接
$sqlLink="SELECT `name`,url FROM tb_links";
$linkRes=$db->ExecuteDQL($sqlLink);
$smarty->assign("linkRes",$linkRes);

$pageUrl="";
if (isset($_GET["page"]))
{
     $pageUrl=$_GET["page"].".tpl";
}
else{
    $pageUrl="H&C&N.tpl";
}
$smarty->assign("pageUrl",$pageUrl);

//查询推荐商品信息
$sqlCom="SELECT * FROM tb_commo WHERE isnom=1 LIMIT 0,4";
$comRes=$db->ExecuteDQL($sqlCom);
$smarty->assign("comRes",$comRes);

$totalRow="";    //总条数
$totalPage="";    //总页数
$currentPage=1;    //起始页
$starIndex=0;    //每一页起始索引
$pageRow=2;    //每一页显示条数
//求总条数
$comNum="SELECT COUNT(id)AS nums FROM tb_commo WHERE isnom=1";
$res=$db->ExecuteDQL($comNum);
$totalRow=$res[0]["nums"];
    //根据行数求页数
$totalPage = ceil($totalRow / $pageRow);
//求当前页
if(isset($_GET['pag']))
{
    $currentPage=$_GET['pag'];
    if($_GET['pag']<1)
    {
        header("Location:index.php?pag=1&page=New");
    }
    elseif ($_GET['pag']>$totalPage)
    {
        header("Location:index.php?pag={$totalPage}&page=New");
    }
}
//求当前页索引
$starIndex=($currentPage-1)*$pageRow;
$before=$currentPage-1;
$next=$currentPage+1;
$sqlCom1="SELECT `name`,pics,addtime,fold,area,model,brand,m_price,v_price  FROM tb_commo WHERE isnom=1 LIMIT {$starIndex},{$pageRow}";
$comRes1=$db->ExecuteDQL($sqlCom1);
$smarty->assign("comRes1",$comRes1);

//查询最新商品信息
$sqlNew="SELECT * FROM tb_commo WHERE isnew=1 LIMIT 0,4";
$newRes=$db->ExecuteDQL($sqlNew);
$smarty->assign("newRes",$newRes);

$sqlNew1="SELECT * FROM tb_commo WHERE isnew=1 LIMIT {$starIndex},{$pageRow}";
$newRes1=$db->ExecuteDQL($sqlNew1);
$smarty->assign("newRes1",$newRes1);

//查询热门商品信息
$sqlHot="SELECT * FROM tb_commo ORDER BY sell DESC LIMIT 0,4";
$hotRes=$db->ExecuteDQL($sqlHot);
$smarty->assign("hotRes",$hotRes);

$sqlHot1="SELECT * FROM tb_commo ORDER BY sell DESC LIMIT {$starIndex},{$pageRow}";
$hotRes1=$db->ExecuteDQL($sqlHot1);
$smarty->assign("hotRes1",$hotRes1);

if (isset($_SESSION["uid"]))
{
    include "shopCar.php";
}

$smarty->assign("before",$before);
$smarty->assign("next",$next);
$smarty->assign("curPage",$currentPage);
$smarty->assign("totalPage",$totalPage);
$smarty->display("index.tpl");
/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/24
 * Time: 10:54
 */