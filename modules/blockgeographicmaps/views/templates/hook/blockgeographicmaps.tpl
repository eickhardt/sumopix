<!-- Block mymodule -->
<div id="blockgeographicmaps_block_home" class="block">
    <h4>Welcome!</h4>
    <div class="block_content">
        <p>Hello,
            {if isset($my_module_name) && $my_module_name}
                {$my_module_name}
            {else}
                {l s='World' mod='blockgeographicmaps'}
            {/if}
            !
       </p>
       <ul>
            <li>
                <a href="{$my_module_link}" title="Click this link">Click me!</a>
            </li>
        </ul>
    </div>
</div>
<!-- /Block mymodule -->