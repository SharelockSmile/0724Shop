<?php
/* Smarty version 3.1.30, created on 2017-07-26 10:27:13
  from "D:\phpStudy\WWW\phpTest\0724Shop\templates\Home\publicDetail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5977fe012b2865_15549328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca97e85eba8c8c39110489bb06283c72a8963418' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\0724Shop\\templates\\Home\\publicDetail.tpl',
      1 => 1501035689,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5977fe012b2865_15549328 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title>商品详细信息</title>
    <style type="text/css"></style>
</head>
<body>
    <h2><?php echo $_smarty_tpl->tpl_vars['publicRes']->value[0]["title"];?>
</h2>
    <p><?php echo $_smarty_tpl->tpl_vars['publicRes']->value[0]["content"];?>
</p>
</body>
</html><?php }
}
