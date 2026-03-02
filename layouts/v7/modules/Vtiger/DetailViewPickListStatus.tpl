
<div class="row" style="margin-top:60px;">
    {if $PICKLIST_STATUS['status'] eq 1 }
        <div class="col-12 pull-left" style="width:100%">
            <div class="arrow-steps">
                <div class="step "> <span>{$PICKLIST_STATUS['field_info']['label']}</span> </div>
                {foreach name=foo item=PICKLIST_VALUE key=PICKLIST_NAME from=$PICKLIST_STATUS['field_info']['picklistvalues']}
                    <div data-stage="{$PICKLIST_VALUE}" class="stage-item {if $smarty.foreach.foo.last}lasty{else}step{/if} {if $PICKLIST_STATUS['value'] eq $PICKLIST_VALUE } current {/if}">
                        <span><nobr>{$PICKLIST_VALUE}</nobr></span>
                    </div>
                {/foreach}
            </div>
        </div>
    {/if}
</div>