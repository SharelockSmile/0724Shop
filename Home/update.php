<?php
session_start();
$gid=$_POST["gid"];
include "../System/DBHelper.php";
$db=new DBHelper("localhost","root","root","db_database24");
$db->connet_DB();

$uid=$_SESSION["uid"];
//查询该用户的购物车语句
$sqlShop="SELECT shopping FROM tb_user WHERE id=$uid";
$resGoods=$db->ExecuteDQL($sqlShop);
$strShopping=$resGoods[0]["shopping"];

if($strShopping) {
    $gNum = "";//存放商品数量
    $arrshop = explode('@', $strShopping);
    //定义一个空数组，临时记录某些商品数量改变之后的那个数组
    $arr1 = array();
    if (isset($_POST["count"])) {
        //更改购买数量的
        $count = $_POST["count"];
        foreach ($arrshop as $gidAndNum) {
            $arr = explode(',', $gidAndNum);
            if ($arr[0] == $gid)
            {
                $arr[1] = $count;
            }
            $str = implode(',', $arr);
            array_push($arr1, $str);
        }
        $allShopping = implode("@", $arr1);
    }
    else if (!isset($_POST["count"]))
    {
        //删除商品
        foreach ($arrshop as $shop)
        {
            $arr=explode(",", $shop);
            $arrAll[]=$arr;
        }
        $num="";
        for($i=0;$i<count($arrAll);$i++)
        {
            if($arrAll[$i][0]==$gid)
            {
                $num=$i;
                break;
            }
        }
        unset($arrAll[$num]);
        $arrAll=array_merge($arrAll);
        //print_r($arrAll);
        //字符串重新拼接
        for($i=0;$i<count($arrAll);$i++)
        {
            $shopping=implode(",", $arrAll[$i]);
            $all[]=$shopping;
        }
        $allShopping=implode("@", $all);
        //var_dump($allShopping);
    }
}
//更新的SQL语句
$updatesql="update tb_user set shopping='{$allShopping}' where id=$uid";

$resUpdate=$db->ExecuteDML($updatesql);
if($resUpdate)
{
    //更新成功
    $res=1;
} else
    {
        //更新失败
        $res=0;
    }
echo $res;
/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/27
 * Time: 18:05
 */