$(function () {
    $("#jionCar").click(function () {
        var gid=$("#id").val();
        $.ajax(
            {
            url:"ProcessCar.php",
            type:"post",
            dataType:"text",
            data:{"gid":gid},
            success:function (data) {
            //alert(data);
                if (data=="0"){
                    alert("请先登录");
                    window.close();
                }
                else if (data=="1"){
                    alert("宝贝已在购物车等您");
                }
                else if (data=="2"){
                    alert("添加失败");
                }
            },
            error:function (data) {
                alert("出错啦");
            }
        });
    });
})