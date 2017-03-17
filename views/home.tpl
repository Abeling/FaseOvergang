<!DOCTYPE html>
            <table>
            {foreach from=$result item=oneItem}
                <tr>
                    <th>{$oneItem.id}</th>
                    <th><img class="organisationlogo" src="content/partylogo/{$oneItem.partyName}.png">
                    {$oneItem.partyName}</th>
                    <th>{$oneItem.yearName}</th>
                    <th>{$oneItem.djName}</th>
                    <th><img class="organisationlogo" src="content/organisationlogo/{$oneItem.organisationName}.png">
                    {$oneItem.organisationName}</th>
                    <th>{$oneItem.genreName}</th>
                </tr>
            {/foreach}
            </table>
            <div id="pagination">
                <ul>
                    <li id="toFirst"><a href="?page=djs&pagenr=1">←</a></li>
                    {for $i=1 to $nr_pages}
                        <li><a href="?page=djs&pagenr={$i}">{$i}</a></li>
                    {/for}
                    <li id="toLast"><a href="?page=djs&pagenr={$nr_pages}">→</a></li>
                </ul>
            </div>
        </div>
