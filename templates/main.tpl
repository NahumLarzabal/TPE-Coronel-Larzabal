{include file='templates/html.tpl'}
<div>
<table>
    {foreach from=$item item=$items}
    <tr>
        <td>{$items->id}</td>
        <td>{$items->categoria}</td>
</tr>

    {/foreach}
    </table>
</div>
{include file='templates/footer.tpl'}