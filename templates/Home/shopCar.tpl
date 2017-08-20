{if $isExist==1}
    <form name="myform" >
        <table id="tab"><tbody>
            <tr><th colspan="7"><h2>购物车</h2></th></tr>
            <tr>
                <th><input type="checkbox" class="check1" onchange="change(this)" checked>全选</th>
                <th>商品名</th>
                <th>数量</th>
                <th>市场价格</th>
                <th>会员价格</th>
                <th>折扣率</th>
                <th>小计</th>
            </tr>
            {foreach from=$goodsInfo item=everyGoods key="k"}
                <tr>
                    <!--选择框-->
                    <td><input type="checkbox" class="check" name="{$k}" onchange="chang()" checked></td>
                    <!--商品名-->
                    <td>
                        <input type="hidden" value="{$gid[$k]}" id="hidden{$k}" class="goods">
                        <input type="text" value="{$everyGoods["name"]}"readonly style="border: none;width: 80px">
                    </td>
                    <!--数量-->
                    <td><input type="text" value="{$nums[$k]}" style="height: 30px; width: 60px" class="count" id="count{$k}" onchange="changCount({$k})"></td>
                    <!--市场价-->
                    <td><input type="text" readonly id="price{$k}" class="price" value="{$everyGoods["m_price"]}" style="border: none;width: 30px"></td>
                    <!--会员价-->
                    <td><input type="text" value="{$everyGoods["v_price"]}" readonly style="border: none; width: 15px"></td>
                    <!--折扣率-->
                    <td><span>{$everyGoods["fold"]}</span></td>
                    <!--合计-->
                    <td><input id="cont{$k}" class="cont" style="border: none;width: 40px"></td>
                </tr>
            {/foreach}
            <tr>
                <td><input type="button" value="删除" onclick="deletegoods()"></td>
                <td colspan="5">
                    共<input type="text" readonly style="border: none;width: 20px" id="goodsCount">件商品，
                    合计：<input type="text" readonly style="border: none;" id="payCount">
                </td>
                <td><input type="button" value="结算" style="border: none; background-color: inherit"></td>
            </tr>
            </tbody></table>
    </form>
    {else}您还未添加任何商品，<a href="index.php">去逛逛吧</a>
{/if}
<style>
    table
    {
        margin: 30px;
        width: 800px;
        border-collapse: collapse;
        text-align: center;
    }
    table th
    {
        width: 110px;
        height: 50px;
        background-color: pink;
        border: 1px solid #b7b7a6;
    }
    table tr td
    {
        width: 110px;
        height: 30px;
        border: 1px solid #b7b7a6;
    }
</style>