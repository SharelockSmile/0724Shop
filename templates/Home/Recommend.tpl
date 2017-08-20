<div style="width: 900px;height: 600px;">
    {foreach from=$comRes1 item=row}
        <div style="width: 900px;height: 280px;float: left;text-align: center">
            <div style="width: 200px;height: 220px;float: left;"><a href="#"><img src="{$smarty.const.HOME_IMAGE_URL}{$row["pics"]}" width="220px" height="220px"></a></div>
            <div style="width: 150px;height: 180px;float: left;margin: 20px">
                <span>商品名：{$row["name"]}</span><br><br>
                <span>时间：{$row["addtime"]}</span><br><br>
                <span>产地：{$row["area"]}</span>
            </div>
            <div style="width: 150px;height: 160px;float: left;margin: 30px">
                <span>商品名：{$row["model"]}</span><br><br>
                <span>品牌：{$row["brand"]}</span>
            </div>
            <div style="width: 150px;height: 160px;float: left;margin: 30px">
                <span>价格：{$row["m_price"]}</span><br><br>
                <span>会员价：{$row["v_price"]}</span><br><br>
                <span>折扣率：{$row["fold"]}</span>
            </div>
        </div>
    {/foreach}
    <div id="divPage">
        <a href="index.php?pag=1&page=Recommend">首页</a>
        <a href="index.php?pag={$before}&page=Recommend">上一页 </a>第【{$curPage}】页，共【{$totalPage}】页<a href="index.php?pag={$next}&page=Recommend">下一页</a>
        <a href="index.php?pag={$totalPage}&page=New">尾页</a>
    </div>
</div>
<style type="text/css">
    #divPage
    {
        width: 400px;
        height: 40px;
        margin: 5px auto;
        text-align: center;
        line-height: 50px;
    }
</style>