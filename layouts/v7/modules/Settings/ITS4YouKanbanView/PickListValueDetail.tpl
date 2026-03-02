{*+**********************************************************************************
 * The content of this file is subject to the ITS4YouKanbanView license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
*************************************************************************************}

{* START YOUR IMPLEMENTATION FROM BELOW. Use {debug} for information *}
{strip}
    {assign var=NON_DELETABLE_VALUES value=$SELECTED_PICKLIST_FIELDMODEL->getNonEditablePicklistValues($SELECTED_PICKLIST_FIELDMODEL->getName())}
    <div class="row form-group">
        <div class="col-lg-3 col-md-3 col-sm-3 control-label fieldLabel">
            <label class="fieldLabel"><strong>{vtranslate('LBL_VALUES_ASSIGNED_TO_PICKLIST',$QUALIFIED_MODULE)}</strong></label>
        </div>
        <div class="col-sm-6 col-xs-6 fieldValue">
            <select class="select2 form-control" id="role2picklist" multiple name="role2picklist[]"
                {if empty($ALL_PICKLIST_VALUES)} placeholder="{vtranslate("LS_NONE_PICKLIST_VALUES",$QUALIFIED_MODULE)}"{/if}>
                {foreach key=PICKLIST_KEY item=PICKLIST_VALUE from=$ALL_PICKLIST_VALUES}
                    <option value="{$PICKLIST_VALUE}" data-id="{$PICKLIST_KEY}" {if in_array($PICKLIST_KEY,$SAVED_PICKLIST_VALUES)} selected {/if}>
                        {vtranslate($PICKLIST_VALUE,$SELECTED_MODULE_NAME)}
                    </option>
                {/foreach}
            </select>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-lg-3 col-md-3 col-sm-3 control-label fieldLabel"></div>
        <div class="col-sm-3 col-xs-3 fieldValue">
            <button id="backLink" class="btn btn-default" data-backurl="index.php?module=ITS4YouKanbanView&parent=Settings&view=List">
                {vtranslate('LBL_BACK',$QUALIFIED_MODULE)}
            </button>&nbsp;&nbsp;
            <button id="saveOrder" class="btn btn-success">
                {vtranslate('LBL_SAVE',$QUALIFIED_MODULE)}
            </button>
        </div>
    </div>
{/strip}