<?php
/* Smarty version 3.1.30, created on 2017-07-26 10:22:08
  from "D:\phpStudy\WWW\phpTest\0724Shop\templates\Home\publics.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5977fcd06bc5d5_84672292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6229a86b3e7a66f56ba3ec046d3bc1b05958772' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\0724Shop\\templates\\Home\\publics.tpl',
      1 => 1501035721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5977fcd06bc5d5_84672292 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br><br><br><br>
<ul style="list-style-type: none">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['publicsRes']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
        <li style="height: 20px;padding: 6px 15px;list-style: none">
            <a href="#" onclick="pubDetail(<?php echo $_smarty_tpl->tpl_vars['row']->value["id"];?>
)" style="text-decoration: none;color: #2D5082"><?php echo $_smarty_tpl->tpl_vars['row']->value["title"];?>

            </a>
        </li>
        <?php
}
} else {
?>

        <li style="height: 30px;padding: 6px 15px;list-style: none"><h3>暂无公告</h3></li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul><?php }
}
