{*+**********************************************************************************
 * The content of this file is subject to the ITS4YouKanbanView license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
*************************************************************************************}
{strip}
    <div class="row form-group">
        <div class="col-lg-3 col-md-3 col-sm-3 control-label fieldLabel">
            <label class="fieldLabel"><strong>{vtranslate('LBL_SELECT_CUSTOM_VIEW_IN',$QUALIFIED_MODULE)}&nbsp;{vtranslate($SELECTED_MODULE_NAME,$QUALIFIED_MODULE)}</strong></label>
        </div>
        <div class="col-sm-3 col-xs-3 fieldValue">
            <select class="select2 inputElement" id="moduleCustomView" name="moduleCustomView">
                <option value="">{vtranslate('LBL_DEFAULT_VIEW',$QUALIFIED_MODULE)}</option>
                {foreach item=CUSTOM_VIEW from=$CUSTOM_VIEWS}
                    <option value="{$CUSTOM_VIEW->getId()}">{vtranslate($CUSTOM_VIEW->get('viewname'),$SELECTED_MODULE_NAME)}</option>
                {/foreach}
            </select>
        </div>
    </div>
{/strip}
