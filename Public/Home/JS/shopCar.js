$(function () {
    var price=$(".price");
    var count=$(".count");
    var cont=$(".cont");
    var goods=$(".goods");
    var arrPrice=new Array();
    var arrCount=new Array();
    var arrCont=new Array();
    var gCount=0;
    var pCount=0;
    for (i=0;i<cont.length;i++)
    {
        arrPrice[i]=price[i].value;
        arrCount[i]=count[i].value;
        arrCont[i]=arrCount[i]*arrPrice[i];
         gCount=parseInt(gCount)+parseFloat(arrCount[i]);
         pCount+=parseFloat(arrCont[i]);
        $("#cont"+i).attr("value",arrCont[i]);
    }
    $("#goodsCount").attr("value",parseInt(gCount));
    $("#payCount").attr("value",'$'+parseInt(pCount));
    var i=document.getElementsByClassName("check");
})
//文本框值改变后
function changCount(num) {
    var cc=document.getElementsByClassName("count").item(num).value;
    var gid=document.getElementsByClassName("goods").item(num).value;
    $.ajax({
        url:"update.php",
        type:"post",
        dataType:"text",
        data:{"gid":gid,
                "count":cc
                },
        success:function (data) {
            //alert(data);
            if (data=="0"){
                alert("修改数量失败");
            }
            else if (data=="1"){
                alert("数量修改成功");
            }
        },
        error:function (data) {
            alert("出错啦");
        }
    });
    window.location.reload();
}

//删除
function deletegoods() {
    var i=document.getElementsByClassName("check");
    //必须加上tbody  且必须紧跟<table/>不能有空格
    var tbody=document.getElementById("tab").childNodes.item(0);
    for(j=0;j<i.length;j++)
    {
        if(i.item(j).checked==true)
        {
            //获取选中行
            var p=i.item(j).parentNode.parentNode;
            var nn=i.item(j).name;
            var goodid=document.getElementById("hidden"+nn).value;
            //alert(goodid);

            $.ajax({
                url:"update.php",
                type:"post",
                dataType:"text",
                data:{"gid":goodid},
                success:function (data) {
                    //alert(data);
                    if (data=="0"){
                        alert("删除失败");
                    }
                    else if (data=="1"){
                        alert("删除成功");
                    }
                },
                error:function (data) {
                    alert("出错啦");
                }
            });
            tbody.removeChild(p);
            deletegoods();
        }
    }
    window.location.reload();
}

//全选
function change(obj)
{
    if(obj.checked==true)
    {
        for(i=0;i<document.getElementsByClassName("check").length;i++)
        {
            document.getElementsByClassName("check").item(i).checked=true;
            for (j=0;j<document.getElementsByClassName("").length;j++)
            {

            }
        }
        document.getElementsByClassName("check1").item(0).checked=true;
    }
    else
    {
        for(i=0;i<document.getElementsByClassName("check").length;i++)
        {
            document.getElementsByClassName("check").item(i).checked=false;
        }
        document.getElementsByClassName("check1").item(0).checked=false;

    }
}
function chang() {
    for(i=0;i<document.getElementsByClassName("check").length;i++)
    {
        if (document.getElementsByClassName("check").item(i).checked==false)
        {
            document.getElementsByClassName("check1").item(0).checked=false;
            break;
        }
        else {
            document.getElementsByClassName("check1").item(0).checked=true;

        }
    }
}
