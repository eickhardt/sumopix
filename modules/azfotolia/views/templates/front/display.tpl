<div id="azfotolia">
    <h1>Fotolia</h1>

    <form>
        Search images:<br>
        <input type="text" name="fs">
        <input type="submit" name="fotolia_seach" placeholder="Search Fotolia images">
    </form>

    <ul>
    {foreach from=$results key=k item=result}
        {if is_numeric($k)}
            <li>Matching media: <img src="{$result['thumbnail_url']}" alt="{$result['title']}" title="{$result['title']}"> {*$result['id']*}</li>
        {/if}
    {/foreach}
    </ul>
</div>
