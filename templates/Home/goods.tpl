<html>
<head>
    <title>商品详细信息</title>
    <script type="text/javascript" src="{$smarty.const.HOME_JS_URL}jquery-3.1.0.js"></script>
    <script type="text/javascript" src="{$smarty.const.HOME_JS_URL}joinShopCar.js"></script>
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
                <td rowspan="4"><img src="{$smarty.const.HOME_IMAGE_URL}{$goodsRes[0]["pics"]}" width="100px" height="100px"></td>
                <td>商品名：</td>
                <td>{$goodsRes[0]["gName"]}</td>
                <td>所属品类：</td>
                <td>{$goodsRes[0]["cName"]}</td>
            </tr>
            <tr>
                <td>品牌：</td>
                <td>{$goodsRes[0]["brand"]}</td>
                <td>型号：</td>
                <td>{$goodsRes[0]["model"]}</td>
            </tr>
            <tr>
                <td>产地：</td>
                <td>{$goodsRes[0]["area"]}</td>
                <td>折扣：</td>
                <td>{$goodsRes[0]["fold"]}</td>
            </tr>
            <tr>
                <td>市场价：</td>
                <td>{$goodsRes[0]["m_price"]}</td>
                <td>会员价：</td>
                <td>{$goodsRes[0]["v_price"]}</td>
            </tr>
            <tr>
                <td>商品介绍：</td>
                <td colspan="3">{$goodsRes[0]["info"]}<input type="hidden" id="id" value="{$goodsRes[0]["gid"]}"></td>
                <td><input type="button" value="加入购物车" id="jionCar" </td>
            </tr>
        </table></form>
</body>
</html>