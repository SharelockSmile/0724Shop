<html>
<head>
    <title>后台管理系统</title>
    <!--导入样式文件-->
    <link type="text/css" rel="stylesheet" href="{$smarty.const.Admin_CSS_URL}main.css"></link>
    <!--导入JQuery库文件-->
    <script type="text/javascript" src="{$smarty.const.Admin_JS_URL}jquery-3.1.0.js"></script>
    <!--导入login.tpl登录文件js文件-->
    <script type="text/javascript" src="{$smarty.const.Admin_JS_URL}menu.js"></script>
{*    <script language="JavaScript" src="{$smarty.const.Admin_JS_URL}publics.js"></script>
    <script language="JavaScript" src="{$smarty.const.Admin_JS_URL}goods.js"></script>
    <script language="JavaScript" src="{$smarty.const.Admin_JS_URL}shopCar.js"></script>*}

</head>
<body>
    <!--Top-->
    <div id="divHeader">

    </div>
    <!--Middle-->
    <div id="divContainer">
        <div id="Container_left">
            {include file="leftMenu.tpl"}
        </div>
        <div id="Container_right"></div>
    </div>
    <!--Foot-->
    <div id="divBottom">

    </div>
</body>
</html>