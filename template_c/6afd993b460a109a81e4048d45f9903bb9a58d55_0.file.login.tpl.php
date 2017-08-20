<?php
/* Smarty version 3.1.30, created on 2017-07-27 12:09:49
  from "D:\phpStudy\WWW\phpTest\0724Shop\templates\Home\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5979678dc82915_56072147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6afd993b460a109a81e4048d45f9903bb9a58d55' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\phpTest\\0724Shop\\templates\\Home\\login.tpl',
      1 => 1501128570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5979678dc82915_56072147 (Smarty_Internal_Template $_smarty_tpl) {
?>
<br><br><br>
<?php if (isset($_SESSION['u']) == 0) {?>
    <form name="loginForm" style="margin: 0 15px">
        <table >
            <tr>
                <td>帐号：</td>
                <td><input type="text" id="txtName" name="txtName"></td>
            <tr>
                <td>密码：</td>
                <td><input type="password" id="txtPwd" name="txtPwd"></td>
            </tr>
            <tr>
                <td>验证码：</td>
                <td><input type="text" name="txtCode" id="txtCode" ></td>
            </tr>
            <tr>
                <td>
                    <img src="createCode.php" id="imgCode">
                </td>
                <td><a href="#" onclick="imgTrans()">看不清，换一张</a></td>
            </tr>
            <tr>
                <td><input type="reset" value="重置" id="btnReset" name="btnReset" onclick="cls()"></td>
                <td><input type="button" value="登录" id="btnLogin" name="btnLogin"></td>
            </tr>
        </table>
    </form>
    <?php } else { ?>
    <div style="margin: 30px 50px;width: 200px;height: 240px">
        欢迎【<?php echo $_SESSION['u'];?>
】！<br><br>
        <a href="#" style="text-decoration: none;color: #2D5082">个人中心</a><br><br>
        <a href="index.php?page=shopCar" style="text-decoration: none;color: #3f3f3f">查看购物车</a><br><br>
        <a href="proLoginOut.php" style="text-decoration: none;color: #cb0f26">注&nbsp;&nbsp;销</a>
    </div>

<?php }
}
}
