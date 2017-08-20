<?php
session_start();
$gid=$_POST["gid"];
include "../System/DBHelper.php";
$db=new DBHelper("localhost","root","root","db_database24");
$db->connet_DB();
/*$res="";//存储不同情况返回的结果
$updatesql="";//记录更新购物车的sql语句*/

if (isset($_SESSION["uid"]))
{
    //已登录
    $uid=$_SESSION["uid"];
    //查询该用户的购物车语句
    $sqlShop="SELECT shopping FROM tb_user WHERE id=$uid";
    $resGoods=$db->ExecuteDQL($sqlShop);
    $strShopping=$resGoods[0]["shopping"];
    $isExist=false;
    if($strShopping){
        $gNum="";//存放商品数量
        $arrShopping=explode('@', $strShopping);
        $arr1=array();//定义一个空数组，
        //临时记录某些商品数量改变之后的那个数组
        foreach ($arrShopping as $gidAndNum){
            $arr=explode(',', $gidAndNum);
            if($arr[0]==$gid){
                $isExist=true;//说明当前商品在购物车中存在
                $arr[1]=$arr[1]+1;
            }
            $str=implode(',', $arr);
            array_push($arr1, $str);
        }
        $allShopping=implode("@", $arr1);
        if($isExist){
            //说明存在
            $updatesql="update tb_user set shopping='{$allShopping}' where id=$uid";
        }
        else{
            //说明不存在
            $updatesql="update tb_user set shopping='".$strShopping."@{$gid},1' where id=$uid";
        }
    }
    else{
        //说明购物车为空
        $updatesql="update tb_user set shopping='{$gid},1' where id=$uid";
    }
    $resUpdate=$db->ExecuteDML($updatesql);
    if($resUpdate){
        $res=1;//更新成功
    }
    else{
        $res=2;//更新失败
    }
    /*$arrshop=explode("@",$res[0]["shopping"] );
    foreach ($arrshop as $shop)
    {
        $arr=explode(",", $shop);
        $arrAll[]=$arr;
    }
    $length=count($arrAll);
    //用来记录匹配的物品在数组中的索引
    $num="";

    for($i=0;$i<$length;$i++)
    {
        if($arrAll[$i][0]==$gid)
        {
            //表示所选的商品曾加入过购物车
            $num=$i;
            break;
        }else
            {
                //表示未曾加入过该商品
                $sh=$res[0]["shopping"]."@".$gid.",1";
                $update0="UPDATE tb_user SET shopping ='$sh' WHERE id=1";
            }
    }
    //将所选物品的数量加一
    $arrAll[$num][1]=$arrAll[$num][1]+1;
//字符串重新拼接
    $shop1=implode(",", $arrAll[$i]);
    array_push($all, $shop1);
    $shopping=implode("@", $all);
    $update1="UPDATE tb_user SET shopping =\"$shopping\" WHERE id=1";*/
}else
    {
        //未登录
        $res=0;
    }
echo $res;
/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/26
 * Time: 16:24
 */