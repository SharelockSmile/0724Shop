<html>
<head>
    <!--导入样式文件-->
    <link type="text/css" rel="stylesheet" href="{$smarty.const.HOME_CSS_URL}index.css"></link>
    <!--导入JQuery库文件-->
    <script type="text/javascript" src="{$smarty.const.HOME_JS_URL}jquery-3.1.0.js"></script>
    <!--导入login.tpl登录文件js文件-->
    <script type="text/javascript" src="{$smarty.const.HOME_JS_URL}login.js"></script>
    <script language="JavaScript" src="{$smarty.const.HOME_JS_URL}publics.js"></script>
    <script language="JavaScript" src="{$smarty.const.HOME_JS_URL}goods.js"></script>
    <script language="JavaScript" src="{$smarty.const.HOME_JS_URL}shopCar.js"></script>
    <script type="text/javascript">
        function changetime(){
            var ary=Array("Mon.","Tues.","Wed.","Thur.","Fri.","Sat.","Sun.");

            var timeHtml=document.getElementById("CurrentTime");
            var date=new Date();
            timeHtml.innerHTML=date.toLocaleString()+"   "+ary[date.getDay()];
        }
        window.onload=function()
        {
            changetime();
            setInterval(changetime,1000);}
    </script>
</head>
<body>
    <!--Top-->
    <div id="divHeader">
        <ul id="menu">
            <li><a href="index.php">首&nbsp;&nbsp;页</a></li>
            <li><a href="index.php?page=New">最新商品</a></li>
            <li><a href="index.php?page=Recommend">推荐商品</a></li>
            <li><a href="index.php?page=Hot">热门商品</a></li>
            <li><a href="#">订单查询</a></li>
            <li><a href="#" id="CurrentTime"></a></li>
        </ul>
    </div>
    <!--Middle-->
    <div id="divContainer">
        <div id="Container_left">
            <div id="Container_left_login">
                {include file="login.tpl"}
            </div>
            <div id="Container_left_publics">
                {include file="publics.tpl"}
            </div>
            <div id="Container_left_link">
                {include file="link.tpl"}
            </div>
        </div>
        <div id="Container_right">
            <div id="Container_right_top">
                <div id="divbanner"></div>
                <div id="search">
                    <form name="fmSearch">
                        <tr>
                            <td><input type="text" id="txtSearch" style="height:25px;"/></td>
                            <td>{*<a href="#" ><img src="{$smarty.const.HOME_IMAGE_URL}search.JPG" style="width: 68px;height: 24px"></a>*}
                                <input type="submit" id="btnSearch" value=""  style="width:68px;height:24px;background-image:url({$smarty.const.HOME_IMAGE_URL}search.JPG);" />
                            </td>
                        </tr>
                    </form>
                </div>
            </div>
            {include file="$pageUrl"}
        </div>
    </div>
    <!--Foot-->
    <div id="divBottom">

    </div>
</body>
</html>