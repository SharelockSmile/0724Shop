<br><br><br><br>
<ul style="list-style-type: none">
    {foreach from=$publicsRes item=row}
        <li style="height: 20px;padding: 6px 15px;list-style: none">
            <a href="#" onclick="pubDetail({$row["id"]})" style="text-decoration: none;color: #2D5082">{$row["title"]}
            </a>
        </li>
        {foreachelse}
        <li style="height: 30px;padding: 6px 15px;list-style: none"><h3>暂无公告</h3></li>
    {/foreach}
</ul>