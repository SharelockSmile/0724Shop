<?php
/* Smarty version 3.1.30, created on 2017-07-24 23:19:31
  from "D:\phpStudy\WWW\phpTest\0724Shop\Home\creatCode.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59761003a293e0_28407507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b12be074b4cdc735a3f6f49bfa16d593129aebae' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\0724Shop\\Home\\creatCode.php',
      1 => 1500909341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59761003a293e0_28407507 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>//开启会话，使变量可以跨页面使用。开启随机因子
session_start();
//声明要画画
@header("content-type:image/png");
//创建画布
$img=imagecreate(100,50);
//设置画布颜色
$color=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
//绘制模糊作用的点
$red=imagecolorallocate($img,255,0,0);
for($i=0;$i<200;$i++)
{
    //模糊点颜色
    $pix=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
    //画模糊点
    imagesetpixel($img,mt_rand(1,99),mt_rand(1,49),$pix);
    //添加弧线
    //imagearc($img,rand()*90,rand()*40,20,20,75,170,$black);
    //添加线条
    //imageline($img,rand()*10,rand()*5,rand()*30,rand()*40,$red);
}
$codeLength=4;
//创建随机验证码
/*for($i=0;$i<$codeLength;$i++)
{
    $yzm.=chr(rand(97,122));
}
//设置字体样式
$fontStyle=dirname(__FILE__).'/font/Pacifico.ttf';*/
$allStr="";
for($j=0;$j<$codeLength;$j++)
{
    //字体颜色
    $font=imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
    //随机字母
    $str=chr(rand(97,122));
    //imagestring($img,4,5+$j*23,3+rand(0,3)*10,$str,$font);
    //自定义字体
    imagettftext($img,20,0,5+$j*23,rand(2,5)*9,$font,"Playball-Regular.ttf",$str);
    //将所有随机字母拼接
    $allStr.=$str;
}
//标记会话变量，
$_SESSION["code"]=$allStr;
//输出图片
imagepng($img);
//释放内存
imagedestroy($img);<?php }
}
