{*********************************************************************************
* The content of this file is subject to the ITS4YouKanbanView license.
* ("License"); You may not use this file except in compliance with the License
* The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
* Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
* All Rights Reserved.
********************************************************************************}

{strip}
    <div class="listViewPageDiv detailViewContainer kanbanEditContainer" id="listViewContent">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-horizontal">
            <h3>{vtranslate($MODULE,$QUALIFIED_MODULE)}</h3>
            <hr>
            <br>
            <div class="detailViewInfo">
                <div class="row form-group">
                    <div class="col-lg-3 col-md-3 col-sm-3 control-label fieldLabel">
                        <label class="fieldLabel "><strong>{vtranslate('LBL_SELECT_MODULE',$QUALIFIED_MODULE)}</strong> </label>
                    </div>
                    <div class="fieldValue col-sm-3 col-xs-3">
                        <select class="select2 inputElement" id="pickListModules" name="pickListModules">
                            <option value="">{vtranslate('LBL_SELECT_OPTION',$QUALIFIED_MODULE)}</option>
                            {foreach item=PICKLIST_MODULE from=$PICKLIST_MODULES}
                                <option {if $SELECTED_MODULE_NAME eq $PICKLIST_MODULE->get('name')} selected="" {/if} value="{$PICKLIST_MODULE->get('name')}">{vtranslate($PICKLIST_MODULE->get('name'),$PICKLIST_MODULE->get('name'))}</option>
                            {/foreach}
                        </select>
                    </div>
                </div>
            </div>
            <div id="modulePickListContainer"></div>
            <div id="moduleCustomViewContainer"></div>
            <div id="modulePickListValuesContainer"></div>
        </div>
    </div>
{/strip}