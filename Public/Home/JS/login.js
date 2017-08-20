/**
 * 验证登陆的JS文件
 */
$(function(){
	$("#btnLogin").click(function(){
		//获取账号和密码
		var uname=$("#txtName").val();
		var upwd=$("#txtPwd").val();
		var code=$("#txtCode").val();
		if (code=="")
		{
			alert("验证码不能为空");
		}
		$.ajax({
			url:"ProcessLogin.php",
			type:"post",
			dataType:"text",
			data:{
				"uname":uname,
				"upwd":upwd,
				"code":code
			},
			success:function(data){
				//alert(data);
				if(data=="1"){
					location.href="index.php";
				}
				else if (data=="2")
				{
					alert("验证码有误")
				}
				else if(data=="0"){
					alert("用户名或密码错误");
				}
			},
			error:function(){
				alert("Error");
			}
		});
	});
})
//换验证码
function imgTrans() {
    //加上?id="+(Math.random()*1000000)是为了欺骗浏览器，然他重新请求一次
    document.getElementById("imgCode").src="createCode.php?id="+(Math.random()*1000000);
}
//重置文本框内容
function cls() {
	document.loginForm.txtName.value="";
    document.loginForm.txtPwd.value="";
}
