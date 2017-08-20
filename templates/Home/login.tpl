<br><br><br>
{if isset($smarty.session.u)==0}
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
    {else isset($smarty.session.u)==1}
    <div style="margin: 30px 50px;width: 200px;height: 240px">
        欢迎【{$smarty.session.u}】！<br><br>
        <a href="#" style="text-decoration: none;color: #2D5082">个人中心</a><br><br>
        <a href="index.php?page=shopCar" style="text-decoration: none;color: #3f3f3f">查看购物车</a><br><br>
        <a href="proLoginOut.php" style="text-decoration: none;color: #cb0f26">注&nbsp;&nbsp;销</a>
    </div>

{/if}
