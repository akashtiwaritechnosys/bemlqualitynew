{*+**********************************************************************************
* The content of this file is subject to the ITS4YouKanbanView license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
*************************************************************************************}

{strip}
    <div class="main-container main-container-{$SOURCE_MODULE_NAME}">
        <div class="listViewPageDiv content-area kanban-view" id="kanbanListViewContent">
            <div class="main-container detailViewContainer clearfix" id="taskManagementContainer" style="min-height: 768px">
                <input type="hidden" name="source_module_name" id="source_module_name" value="{$SOURCE_MODULE_NAME}">
                <input type="hidden" name="source_field_name" id="source_field_name" value="{$SOURCE_MODULE_NAME}">
                <input type="hidden" name="custom_view_id" id="custom_view_id" value="{$DEFAULT_CUSTOM_VIEW_ID}">
                <div class="container-fluid dashboard kanban-wrapper" style="width:100%;">
                    <br>
                    {include file="QuickFilter.tpl"|vtemplate_path:$MODULE}
                    <br>
                    <input type="hidden" name="colors" value='{json_encode($COLORS)}'>
                    <input type="hidden" id="readonly" name="readonly" value="{$IS_READONLY}">
                    <div class='kanban-inner datacontent readonly_{$IS_READONLY}'>
                        <div class="data-body contentsBlockContainer">
                            {foreach item=PICKLIST_VALUE_NAME key=PICKLIST_VALUE_KEY from=$PICKLIST_VALUES}
                                <div class="contentsBlock {strtolower($PRIORITY)} ui-droppable" title="{$PICKLIST_VALUE_NAME}"
                                    style="border-bottom: 2px solid {$COLORS[$PICKLIST_VALUE_NAME]};">
                                    <div class="header">
                                        <div class="title">
                                        <span class="{$PICKLIST_VALUE_NAME}-count-of-items"
                                                data-coi="{$SORTED_ENTRIES_COUNT[$PICKLIST_VALUE_NAME]}">{$SORTED_ENTRIES_COUNT[$PICKLIST_VALUE_NAME]}</span>

                                            <p>{vtranslate($PICKLIST_VALUE_NAME, $SOURCE_MODULE_NAME)}</p>
                                        </div>
                                    </div>
                                    <div class="content" data-picklist_value_name="{$PICKLIST_VALUE_NAME}"
                                        style="padding-bottom: 10px">
                                        <div
                                            class='{strtolower($PICKLIST_VALUE_NAME|regex_replace:"/[ .]/":"-")}-entries container-fluid scrollable dataEntries'>
                                            {foreach key=RECORDID item=RECORD_MODEL from=$SORTED_ENTRIES[$PICKLIST_VALUE_NAME]}
                                                <div class="entries ui-draggable ui-draggable-handle">
                                                    {assign var=RECORD_BASIC_INFO value=$RECORD_MODEL->getData()}
                                                    <div class="task clearfix" data-recordid="{$RECORD_MODEL->get('id')}"
                                                        data-picklist_value_name="{$RECORD_MODEL->get($SELECTED_FIELD_NAME)}"
                                                        data-count_of_items="{$SORTED_ENTRIES_COUNT[$PICKLIST_VALUE_NAME]}"
                                                        style="border-left:4px solid {$COLORS[$PICKLIST_VALUE_NAME]}">
                                                        {assign var=STATUS value=$RECORD_MODEL->get('status')}
                                                        <div id="kanbanRecordContent_{$RECORD_MODEL->get('id')}">
                                                            {include file="KanbanRecord.tpl"|vtemplate_path:"ITS4YouKanbanView"}
                                                        </div>
                                                        <div class='other-details clearfix'>
                                                            <div class="pull-left">
                                                                <img class="assignedUserImage"
                                                                    src="{$MODULE_MODEL->getAssignedImage($RECORD_MODEL->get('assigned_user_id'))}"
                                                                    width="24" height="24">
                                                            </div>
                                                            <div class="more pull-right cursorPointer task-actions">
                                                                <span class="{*quickPreview*}quickView fa fa-eye icon action"
                                                                    id="quickPreview" title="{vtranslate('LBL_QUICK_VIEW')}"
                                                                    data-id="{$RECORD_MODEL->get('id')}"></span>&nbsp;&nbsp;
                                                                <a href="{$RECORD_MODEL->getEditViewUrl()}&returnmodule=ITS4YouKanbanView&returnview=List&returnrelatedModuleName={$SOURCE_MODULE_NAME}"
                                                                    class="quickTask" id="taskPopover"
                                                                    title="{vtranslate('LBL_EDIT')}">
                                                                    <i class="fa fa-pencil-square-o icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            {/foreach}
                                        </div>
                                    </div>
                                </div>
                            {/foreach}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/strip}