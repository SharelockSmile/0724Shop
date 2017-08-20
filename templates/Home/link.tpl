<br><br><br><br>
{foreach from=$linkRes item=row}
    <li style="height: 25px;padding: 6px 15px;list-style: none">
        <a href="{$row["url"]}" target="_blank" style="text-decoration: none;color: #2D5082">{$row["name"]}</a>
    </li>
    {foreachelse}
    <li style="padding-top: 5px"><h3>暂无链接</h3></li>
{/foreach}