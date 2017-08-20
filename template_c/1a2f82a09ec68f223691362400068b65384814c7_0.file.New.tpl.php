<?php
/* Smarty version 3.1.30, created on 2017-07-27 10:37:46
  from "D:\phpStudy\WWW\phpTest\0724Shop\templates\Home\New.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597951fa450960_59845202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a2f82a09ec68f223691362400068b65384814c7' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\0724Shop\\templates\\Home\\New.tpl',
      1 => 1501123003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597951fa450960_59845202 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div style="width: 900px;height: 600px">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newRes1']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
        <div style="width: 900px;height: 280px;float: left;text-align: center">
            <div style="width: 200px;height: 220px;float: left;"><a href="#"><img src="<?php echo @constant('HOME_IMAGE_URL');
echo $_smarty_tpl->tpl_vars['row']->value["pics"];?>
" width="220px" height="220px"></a></div>
            <div style="width: 150px;height: 180px;float: left;margin: 20px">
                <span>商品名：<?php echo $_smarty_tpl->tpl_vars['row']->value["name"];?>
</span><br><br>
                <span>时间：<?php echo $_smarty_tpl->tpl_vars['row']->value["addtime"];?>
</span><br><br>
                <span>产地：<?php echo $_smarty_tpl->tpl_vars['row']->value["area"];?>
</span>
            </div>
            <div style="width: 150px;height: 160px;float: left;margin: 30px">
                <span>商品名：<?php echo $_smarty_tpl->tpl_vars['row']->value["model"];?>
</span><br><br>
                <span>品牌：<?php echo $_smarty_tpl->tpl_vars['row']->value["brand"];?>
</span>
            </div>
            <div style="width: 150px;height: 160px;float: left;margin: 30px">
                <span>价格：<?php echo $_smarty_tpl->tpl_vars['row']->value["m_price"];?>
</span><br><br>
                <span>会员价：<?php echo $_smarty_tpl->tpl_vars['row']->value["v_price"];?>
</span><br><br>
                <span>折扣率：<?php echo $_smarty_tpl->tpl_vars['row']->value["fold"];?>
</span>
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <div id="divPage">
        <a href="index.php?pag=1&page=New">首页</a>
        <a href="index.php?pag=<?php echo $_smarty_tpl->tpl_vars['before']->value;?>
&page=New">上一页 </a>第【<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
】页，共【<?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
】页<a href="index.php?pag=<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
&page=New">下一页</a>
        <a href="index.php?pag=<?php echo $_smarty_tpl->tpl_vars['totalPage']->value;?>
&page=New">尾页</a>
    </div>
</div>
<style type="text/css">
    #divPage
    {
        width: 400px;
        height: 40px;
        margin: 5px auto;
        text-align: center;
        line-height: 50px;
    }
</style><?php }
}
