<?php
session_start();
include "../System/DBHelper.php";
$db=new DBHelper("119.29.143.119", "root", "root", "db_database24");
$db->connet_DB();
//获取ajax提交过来的数据
$uname=$_POST["uname"];
$upwd=$_POST["upwd"];
$code=$_POST["code"];
$sql="select * from tb_user
where `name`='{$uname}' and `password`=md5('{$upwd}')";
//执行sql语句
$res= $db->ExecuteDQL($sql);
if($res){
    //登录成功
    //记录session
    if ($code==$_SESSION["code"])
    {
        $_SESSION["u"]=$res[0]["name"];
        $_SESSION["uid"]=$res[0]["id"];
        echo "1";
    }else {
        echo "2";
    }
}
else{
    //登录失败
    echo "0";
}