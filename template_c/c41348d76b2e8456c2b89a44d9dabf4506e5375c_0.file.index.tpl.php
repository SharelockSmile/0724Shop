<?php
/* Smarty version 3.1.30, created on 2017-08-06 13:54:45
  from "D:\phpStudy\WWW\phpTest\0724Shop\templates\Home\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5986af2570f218_50404671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c41348d76b2e8456c2b89a44d9dabf4506e5375c' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\0724Shop\\templates\\Home\\index.tpl',
      1 => 1501245355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login.tpl' => 1,
    'file:publics.tpl' => 1,
    'file:link.tpl' => 1,
  ),
),false)) {
function content_5986af2570f218_50404671 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <!--导入样式文件-->
    <link type="text/css" rel="stylesheet" href="<?php echo @constant('HOME_CSS_URL');?>
index.css"></link>
    <!--导入JQuery库文件-->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('HOME_JS_URL');?>
jquery-3.1.0.js"><?php echo '</script'; ?>
>
    <!--导入login.tpl登录文件js文件-->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('HOME_JS_URL');?>
login.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="JavaScript" src="<?php echo @constant('HOME_JS_URL');?>
publics.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="JavaScript" src="<?php echo @constant('HOME_JS_URL');?>
goods.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 language="JavaScript" src="<?php echo @constant('HOME_JS_URL');?>
shopCar.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        function changetime(){
            var ary=Array("Mon.","Tues.","Wed.","Thur.","Fri.","Sat.","Sun.");

            var timeHtml=document.getElementById("CurrentTime");
            var date=new Date();
            timeHtml.innerHTML=date.toLocaleString()+"   "+ary[date.getDay()];
        }
        window.onload=function()
        {
            changetime();
            setInterval(changetime,1000);}
    <?php echo '</script'; ?>
>
</head>
<body>
    <!--Top-->
    <div id="divHeader">
        <ul id="menu">
            <li><a href="index.php">首&nbsp;&nbsp;页</a></li>
            <li><a href="index.php?page=New">最新商品</a></li>
            <li><a href="index.php?page=Recommend">推荐商品</a></li>
            <li><a href="index.php?page=Hot">热门商品</a></li>
            <li><a href="#">订单查询</a></li>
            <li><a href="#" id="CurrentTime"></a></li>
        </ul>
    </div>
    <!--Middle-->
    <div id="divContainer">
        <div id="Container_left">
            <div id="Container_left_login">
                <?php $_smarty_tpl->_subTemplateRender("file:login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <div id="Container_left_publics">
                <?php $_smarty_tpl->_subTemplateRender("file:publics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <div id="Container_left_link">
                <?php $_smarty_tpl->_subTemplateRender("file:link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </div>
        <div id="Container_right">
            <div id="Container_right_top">
                <div id="divbanner"></div>
                <div id="search">
                    <form name="fmSearch">
                        <tr>
                            <td><input type="text" id="txtSearch" style="height:25px;"/></td>
                            <td>
                                <input type="submit" id="btnSearch" value=""  style="width:68px;height:24px;background-image:url(<?php echo @constant('HOME_IMAGE_URL');?>
search.JPG);" />
                            </td>
                        </tr>
                    </form>
                </div>
            </div>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['pageUrl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        </div>
    </div>
    <!--Foot-->
    <div id="divBottom">

    </div>
</body>
</html><?php }
}
