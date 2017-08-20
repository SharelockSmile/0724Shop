<?php
/* Smarty version 3.1.30, created on 2017-07-25 15:03:36
  from "D:\phpStudy\WWW\phpTest\0724Shop\templates\Home\link.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5976ed48be0968_97986077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4e17c652861314c6f15f60416b1d3b3220e3cac' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\0724Shop\\templates\\Home\\link.tpl',
      1 => 1500966211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5976ed48be0968_97986077 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br><br><br><br>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkRes']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
    <li style="height: 25px;padding: 6px 15px;list-style: none">
        <a href="<?php echo $_smarty_tpl->tpl_vars['row']->value["url"];?>
" target="_blank" style="text-decoration: none;color: #2D5082"><?php echo $_smarty_tpl->tpl_vars['row']->value["name"];?>
</a>
    </li>
    <?php
}
} else {
?>

    <li style="padding-top: 5px"><h3>暂无链接</h3></li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
}
}
