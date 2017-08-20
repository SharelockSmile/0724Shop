<ul id="firstU">
    {section loop=$firstMenu name=k}
        <li class="firstli">
            <span>{$firstMenu[k]["menuName"]}</span>
            <ul id="secondU">
                {section loop=$secondMenu name=kk}
                    {if $secondMenu[kk]["parentId"]==$firstMenu[k]["menuId"]}
                        <li class="secondli"><a href="{$secondMenu[kk]["link"]}">{$secondMenu[kk]["menuName"]}</a></li>
                    {/if}
                {/section}
            </ul>
        </li>
    {/section}
</ul>
