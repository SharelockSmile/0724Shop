<?php
/* Smarty version 3.1.30, created on 2017-07-27 09:39:33
  from "D:\phpStudy\WWW\phpTest\0724Shop\templates\Home\goods.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59794455b766f5_64816020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dc093705c094dfa0647f002fcf39abefe50bc17' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\0724Shop\\templates\\Home\\goods.tpl',
      1 => 1501119559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59794455b766f5_64816020 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title>商品详细信息</title>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('HOME_JS_URL');?>
jquery-3.1.0.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('HOME_JS_URL');?>
joinShopCar.js"><?php echo '</script'; ?>
>
    <style type="text/css">
        table
        {
            width:500px;
            height: 300px;
            border-collapse: collapse;
            text-align: center;
        }
        table tr th
        {
            background-color: peachpuff;
            border: 1px solid black;
        }
        table tr td
        {
            background-color: papayawhip;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form><table>
            <tr><th colspan="5">商品详情</th></tr>
            <tr>
                <td rowspan="4"><img src="<?php echo @constant('HOME_IMAGE_URL');
echo $_smarty_tpl->tpl_vars['goodsRes']->value[0]["pics"];?>
" width="100px" height="100px"></td>
                <td>商品名：</td>
                <td><?php echo $_smarty_tpl->tpl_vars['goodsRes']->value[0]["gName"];?>
</td>
                <td>所属品类：</td>
                <td><?php echo $_smarty_tpl->tpl_vars['goodsRes']->value[0]["cName"];?>
</td>
            </tr>
            <tr>
                <td>品牌：</td>
                <td><?php echo $_smarty_tpl->tpl_vars['goodsRes']->value[0]["brand"];?>
</td>
                <td>型号：</td>
                <td><?php echo $_smarty_tpl->tpl_vars['goodsRes']->value[0]["model"];?>
</td>
            </tr>
            <tr>
                <td>产地：</td>
                <td><?php echo $_smarty_tpl->tpl_vars['goodsRes']->value[0]["area"];?>
</td>
                <td>折扣：</td>
                <td><?php echo $_smarty_tpl->tpl_vars['goodsRes']->value[0]["fold"];?>
</td>
            </tr>
            <tr>
                <td>市场价：</td>
                <td><?php echo $_smarty_tpl->tpl_vars['goodsRes']->value[0]["m_price"];?>
</td>
                <td>会员价：</td>
                <td><?php echo $_smarty_tpl->tpl_vars['goodsRes']->value[0]["v_price"];?>
</td>
            </tr>
            <tr>
                <td>商品介绍：</td>
                <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['goodsRes']->value[0]["info"];?>
<input type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['goodsRes']->value[0]["gid"];?>
"></td>
                <td><input type="button" value="加入购物车" id="jionCar" </td>
            </tr>
        </table></form>
</body>
</html><?php }
}
