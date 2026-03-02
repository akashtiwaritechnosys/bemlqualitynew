{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}

<style>
/* ===== Noticeable & Matching Row Action Colors ===== */

/* Comment Icon – Elegant Purple */
.table-actions .fa-comments,
.table-actions .fa-comments-o {
    color: #673AB7;   /* Deep purple */
}

/* Quick View (Eye) – Blue-Indigo */
.table-actions .fa-eye {
    color: #3F51B5;   /* Indigo */
}

/* Star Inactive – Soft Gray */
.table-actions .fa-star-o {
    color: #9E9E9E;
}

/* Star Active – Rich Amber */
.table-actions .fa-star.active {
    color: #FF9800;   /* Noticeable amber */
}

/* Ellipsis (More) – Dark Neutral */
.table-actions .fa-ellipsis-v {
    color: #616161;
}
</style>



{strip}
<!--LIST VIEW RECORD ACTIONS-->

<div class="table-actions">
    {if !$SEARCH_MODE_RESULTS}
    <span class="input" >
        <input type="checkbox" value="{$LISTVIEW_ENTRY->getId()}" class="listViewEntriesCheckBox"/>
    </span>
    {/if}
    {if $LISTVIEW_ENTRY->get('starred') eq vtranslate('LBL_YES', $MODULE)}
        {assign var=STARRED value=true}
    {else}
        {assign var=STARRED value=false}
    {/if}
    <span>
        <a href="javascript:void(0);" onclick="Vtiger_List_Js.triggerShowNotes('{$LISTVIEW_ENTRY->getId()}');" class="fa fa-comments{if $LISTVIEW_ENTRY->get('notesCount') eq 0}-o{/if} icon action" title="{vtranslate('LBL_NOTES', $MODULE)}">
            {if $LISTVIEW_ENTRY->get('notesCount') gt 0}
                <span class="badge badge-info" style="font-size: 9px; position: relative; top: -8px; right: 5px; padding: 2px 4px;">{$LISTVIEW_ENTRY->get('notesCount')}</span>
            {/if}
        </a>
    </span>

    {if isset($QUICK_PREVIEW_ENABLED) && $QUICK_PREVIEW_ENABLED eq 'true'}
		<span>
			<a class="quickView fa fa-eye icon action" data-app="{$SELECTED_MENU_CATEGORY}" title="{vtranslate('LBL_QUICK_VIEW', $MODULE)}"></a>
		</span>
    {/if}
	{if $MODULE_MODEL->isStarredEnabled()}
		<span>
			<a class="markStar fa icon action {if $STARRED} fa-star active {else} fa-star-o{/if}" title="{if $STARRED} {vtranslate('LBL_STARRED', $MODULE)} {else} {vtranslate('LBL_NOT_STARRED', $MODULE)}{/if}"></a>
		</span>
	{/if}
    <span class="more dropdown action">
        <span href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-ellipsis-v icon"></i></span>
        <ul class="dropdown-menu">
            <li><a data-id="{$LISTVIEW_ENTRY->getId()}" href="{$LISTVIEW_ENTRY->getFullDetailViewUrl()}&app={$SELECTED_MENU_CATEGORY}">{vtranslate('LBL_DETAILS', $MODULE)}</a></li>
			{if isset($RECORD_ACTIONS) && $RECORD_ACTIONS}
				{if $RECORD_ACTIONS['edit']}
					<li><a data-id="{$LISTVIEW_ENTRY->getId()}" href="javascript:void(0);" data-url="{$LISTVIEW_ENTRY->getEditViewUrl()}&app={$SELECTED_MENU_CATEGORY}" name="editlink">{vtranslate('LBL_EDIT', $MODULE)}</a></li>
				{/if}
				{if $RECORD_ACTIONS['delete']}
					<li><a data-id="{$LISTVIEW_ENTRY->getId()}" href="javascript:void(0);" class="deleteRecordButton">{vtranslate('LBL_DELETE', $MODULE)}</a></li>
				{/if}
			{/if}
        </ul>
    </span>

    <div class="btn-group inline-save hide">
        <button class="button btn-submit btn-small save" type="button" name="save"><i class="fa fa-check"></i></button>
        <button class="button btn-danger btn-small cancel" type="button" name="Cancel"><i class="fa fa-close"></i></button>
    </div>
</div>
{/strip}
