<div id="Container_right_bottom">
    <div id="HotAndCom">
        <div id="divCom">
            <div id="comTitle"></div>
            <div id="comContent">
                {foreach from=$comRes item=row}
                    <div style="width: 224px;height: 185px;float: left;text-align: center">
                        <img src="{$smarty.const.HOME_IMAGE_URL}{$row["pics"]}" width="110px" height="110px" onclick="goodsDetail({$row["id"]})"><br>
                        <span>商品名：<a href="#" onclick="goodsDetail({$row["id"]})">{$row["name"]}</a></span><br>
                        <span>价格：${$row["m_price"]}</span><br>
                        <span>会员价：{$row["v_price"]}</span>
                    </div>
                {/foreach}
            </div>
        </div>
        <div id="divHot">
            <div id="hotTitle"></div>
            <div id="hotContent">
                {foreach from=$hotRes item=row}
                    <div style="width: 224px;height: 185px;float: left;text-align: center">
                        <a href="#"><img src="{$smarty.const.HOME_IMAGE_URL}{$row["pics"]}" width="110px" height="110px" onclick="goodsDetail({$row["id"]})"></a><br>
                        <span>商品名：<a href="#" onclick="goodsDetail({$row["id"]})">{$row["name"]}</a></span><br>
                        <span>价格：${$row["m_price"]}</span><br>
                        <span>会员价：{$row["v_price"]}</span>
                    </div>
                {/foreach}
            </div>
        </div>
    </div>
    <div id="divNew">
        <div id="newTitle"></div>
        <div id="newContent">
            {foreach from=$newRes item=row}
                <div style="width: 224px;height: 160px;float: left;text-align: center;border-left: 1px solid grey">
                    <a href="#"><img src="{$smarty.const.HOME_IMAGE_URL}{$row["pics"]}" width="100px" height="100px"></a><br>
                    <span>商品名：<a href="#" onclick="goodsDetail({$row["id"]})">{$row["name"]}</a></span><br>
                    <span>价格：{$row["m_price"]}</span><br>
                    <span>会员价：{$row["v_price"]}</span>
                </div>
            {/foreach}
        </div>
    </div>
</div>