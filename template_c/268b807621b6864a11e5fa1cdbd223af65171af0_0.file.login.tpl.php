<?php
/* Smarty version 3.1.30, created on 2017-07-28 14:16:24
  from "D:\phpStudy\WWW\phpTest\0724Shop\templates\Admin\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597ad6b8320284_02116931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '268b807621b6864a11e5fa1cdbd223af65171af0' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\0724Shop\\templates\\Admin\\login.tpl',
      1 => 1501220917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597ad6b8320284_02116931 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <link rel="stylesheet" href="<?php echo @constant('Admin_CSS_URL');?>
login.css">
</head>
<body>
    <div id="header"></div>
    <div id="back">
        <div id="login">
            <form id="myForm" action="ProcessLogin.php" method="post">
                <table id="tab">
                    <tr><td><h2>管理登陆</h2></td></tr>
                    <tr><td>
                            用户名：<input type="text" name="uname" id="uname">
                        </td></tr>
                    <tr><td>
                            密码：<input type="password" name="upwd" id="upwd">
                        </td></tr>
                    <tr><td>
                            <input type="submit" value="登录" style="width: 60px;height: 30px;font-size: 18px;">
                        </td></tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html><?php }
}
