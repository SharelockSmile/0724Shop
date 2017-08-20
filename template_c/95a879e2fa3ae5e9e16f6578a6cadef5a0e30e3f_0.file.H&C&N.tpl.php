<?php
/* Smarty version 3.1.30, created on 2017-07-27 10:42:50
  from "D:\phpStudy\WWW\phpTest\0724Shop\templates\Home\H&C&N.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5979532a282c58_59339957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95a879e2fa3ae5e9e16f6578a6cadef5a0e30e3f' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\0724Shop\\templates\\Home\\H&C&N.tpl',
      1 => 1501123364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5979532a282c58_59339957 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="Container_right_bottom">
    <div id="HotAndCom">
        <div id="divCom">
            <div id="comTitle"></div>
            <div id="comContent">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comRes']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <div style="width: 224px;height: 185px;float: left;text-align: center">
                        <img src="<?php echo @constant('HOME_IMAGE_URL');
echo $_smarty_tpl->tpl_vars['row']->value["pics"];?>
" width="110px" height="110px" onclick="goodsDetail(<?php echo $_smarty_tpl->tpl_vars['row']->value["id"];?>
)"><br>
                        <span>商品名：<a href="#" onclick="goodsDetail(<?php echo $_smarty_tpl->tpl_vars['row']->value["id"];?>
)"><?php echo $_smarty_tpl->tpl_vars['row']->value["name"];?>
</a></span><br>
                        <span>价格：$<?php echo $_smarty_tpl->tpl_vars['row']->value["m_price"];?>
</span><br>
                        <span>会员价：<?php echo $_smarty_tpl->tpl_vars['row']->value["v_price"];?>
</span>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
        <div id="divHot">
            <div id="hotTitle"></div>
            <div id="hotContent">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hotRes']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                    <div style="width: 224px;height: 185px;float: left;text-align: center">
                        <a href="#"><img src="<?php echo @constant('HOME_IMAGE_URL');
echo $_smarty_tpl->tpl_vars['row']->value["pics"];?>
" width="110px" height="110px" onclick="goodsDetail(<?php echo $_smarty_tpl->tpl_vars['row']->value["id"];?>
)"></a><br>
                        <span>商品名：<a href="#" onclick="goodsDetail(<?php echo $_smarty_tpl->tpl_vars['row']->value["id"];?>
)"><?php echo $_smarty_tpl->tpl_vars['row']->value["name"];?>
</a></span><br>
                        <span>价格：$<?php echo $_smarty_tpl->tpl_vars['row']->value["m_price"];?>
</span><br>
                        <span>会员价：<?php echo $_smarty_tpl->tpl_vars['row']->value["v_price"];?>
</span>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
    </div>
    <div id="divNew">
        <div id="newTitle"></div>
        <div id="newContent">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newRes']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                <div style="width: 224px;height: 160px;float: left;text-align: center;border-left: 1px solid grey">
                    <a href="#"><img src="<?php echo @constant('HOME_IMAGE_URL');
echo $_smarty_tpl->tpl_vars['row']->value["pics"];?>
" width="100px" height="100px"></a><br>
                    <span>商品名：<a href="#" onclick="goodsDetail(<?php echo $_smarty_tpl->tpl_vars['row']->value["id"];?>
)"><?php echo $_smarty_tpl->tpl_vars['row']->value["name"];?>
</a></span><br>
                    <span>价格：<?php echo $_smarty_tpl->tpl_vars['row']->value["m_price"];?>
</span><br>
                    <span>会员价：<?php echo $_smarty_tpl->tpl_vars['row']->value["v_price"];?>
</span>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
</div><?php }
}
