<?php
//购物车
//获取登陆人的购物车信息

$sqlUser="SELECT shopping FROM tb_user WHERE id={$_SESSION["uid"]}";
$shopping=$db->ExecuteDQL($sqlUser);
$shopStr=$shopping[0]["shopping"];
//标记购物车是否为空
$isExist="";
//存放所有商品的编号形成的字符串格式
$gids="";
//存放所有商品的数量
$numArr=array();
if ($shopStr)
{
    $isExist=1;
    $info=explode("@",$shopStr);
    foreach ($info as $arr)
    {
        $goods=explode(",",$arr);
        //$shopInfo[]=$goods;
        $gids.=$goods[0].",";//组装所有商品的编号
        $numGid[]=$goods[0];
        $numArr[]=$goods[1];//组装所有商品的数量
    }
    $gids=substr($gids, 0,strlen($gids)-1);
    $sqlGoods="select name,v_price,m_price,fold from tb_commo where id in({$gids})";
    $goodsInfo=$db->ExecuteDQL($sqlGoods);
    $smarty->assign("gid",$numGid);
    $smarty->assign("goodsInfo",$goodsInfo);
    $smarty->assign("nums",$numArr);
}else{
    $isExist=0;
}

$smarty->assign("isExist",$isExist);
/**
 * Created by PhpStorm.
 * User: MM
 * Date: 2017/7/26
 * Time: 22:23
 */