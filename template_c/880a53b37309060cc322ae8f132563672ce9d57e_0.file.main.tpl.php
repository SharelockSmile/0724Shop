<?php
/* Smarty version 3.1.30, created on 2017-07-28 15:18:17
  from "D:\phpStudy\WWW\phpTest\0724Shop\templates\Admin\main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597ae539797a89_28049210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '880a53b37309060cc322ae8f132563672ce9d57e' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\0724Shop\\templates\\Admin\\main.tpl',
      1 => 1501226291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftMenu.tpl' => 1,
  ),
),false)) {
function content_597ae539797a89_28049210 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title>后台管理系统</title>
    <!--导入样式文件-->
    <link type="text/css" rel="stylesheet" href="<?php echo @constant('Admin_CSS_URL');?>
main.css"></link>
    <!--导入JQuery库文件-->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('Admin_JS_URL');?>
jquery-3.1.0.js"><?php echo '</script'; ?>
>
    <!--导入login.tpl登录文件js文件-->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('Admin_JS_URL');?>
menu.js"><?php echo '</script'; ?>
>


</head>
<body>
    <!--Top-->
    <div id="divHeader">

    </div>
    <!--Middle-->
    <div id="divContainer">
        <div id="Container_left">
            <?php $_smarty_tpl->_subTemplateRender("file:leftMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <div id="Container_right"></div>
    </div>
    <!--Foot-->
    <div id="divBottom">

    </div>
</body>
</html><?php }
}
