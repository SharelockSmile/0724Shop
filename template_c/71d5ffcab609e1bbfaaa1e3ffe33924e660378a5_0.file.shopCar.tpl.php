<?php
/* Smarty version 3.1.30, created on 2017-07-27 19:33:38
  from "D:\phpStudy\WWW\phpTest\0724Shop\templates\Home\shopCar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5979cf92b91302_57115422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71d5ffcab609e1bbfaaa1e3ffe33924e660378a5' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\0724Shop\\templates\\Home\\shopCar.tpl',
      1 => 1501155194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5979cf92b91302_57115422 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['isExist']->value == 1) {?>
    <form name="myform" >
        <table id="tab"><tbody>
            <tr><th colspan="7"><h2>购物车</h2></th></tr>
            <tr>
                <th><input type="checkbox" class="check1" onchange="change(this)" checked>全选</th>
                <th>商品名</th>
                <th>数量</th>
                <th>市场价格</th>
                <th>会员价格</th>
                <th>折扣率</th>
                <th>小计</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodsInfo']->value, 'everyGoods', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['everyGoods']->value) {
?>
                <tr>
                    <!--选择框-->
                    <td><input type="checkbox" class="check" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onchange="chang()" checked></td>
                    <!--商品名-->
                    <td>
                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['gid']->value[$_smarty_tpl->tpl_vars['k']->value];?>
" id="hidden<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="goods">
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['everyGoods']->value["name"];?>
"readonly style="border: none;width: 80px">
                    </td>
                    <!--数量-->
                    <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['nums']->value[$_smarty_tpl->tpl_vars['k']->value];?>
" style="height: 30px; width: 60px" class="count" id="count<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" onchange="changCount(<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
)"></td>
                    <!--市场价-->
                    <td><input type="text" readonly id="price<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="price" value="<?php echo $_smarty_tpl->tpl_vars['everyGoods']->value["m_price"];?>
" style="border: none;width: 30px"></td>
                    <!--会员价-->
                    <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['everyGoods']->value["v_price"];?>
" readonly style="border: none; width: 15px"></td>
                    <!--折扣率-->
                    <td><span><?php echo $_smarty_tpl->tpl_vars['everyGoods']->value["fold"];?>
</span></td>
                    <!--合计-->
                    <td><input id="cont<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="cont" style="border: none;width: 40px"></td>
                </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <tr>
                <td><input type="button" value="删除" onclick="deletegoods()"></td>
                <td colspan="5">
                    共<input type="text" readonly style="border: none;width: 20px" id="goodsCount">件商品，
                    合计：<input type="text" readonly style="border: none;" id="payCount">
                </td>
                <td><input type="button" value="结算" style="border: none; background-color: inherit"></td>
            </tr>
            </tbody></table>
    </form>
    <?php } else { ?>您还未添加任何商品，<a href="index.php">去逛逛吧</a>
<?php }?>
<style>
    table
    {
        margin: 30px;
        width: 800px;
        border-collapse: collapse;
        text-align: center;
    }
    table th
    {
        width: 110px;
        height: 50px;
        background-color: pink;
        border: 1px solid #b7b7a6;
    }
    table tr td
    {
        width: 110px;
        height: 30px;
        border: 1px solid #b7b7a6;
    }
</style><?php }
}
