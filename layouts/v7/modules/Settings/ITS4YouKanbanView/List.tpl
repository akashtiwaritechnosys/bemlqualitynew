{*********************************************************************************
* The content of this file is subject to the ITS4YouKanbanView license.
* ("License"); You may not use this file except in compliance with the License
* The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
* Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
* All Rights Reserved.
********************************************************************************}

{strip}
    <div class="col-sm-12 col-xs-12 ">
        <div id="listview-actions" class="listview-actions-container">
            <div class="list-content row">
                <div class="col-sm-12 col-xs-12 ">
                    <h3>{vtranslate($MODULE, $QUALIFIED_MODULE)}</h3>
                    <hr>
                    <div class="marginBottom10px">
                        <button type="button" class="btn btn-default addKanbanSettings addButton btn-default module-buttons" data-url="{$CREATE_SETTINGS_URL}" data-type="0">
                            <i class="fa fa-plus"></i>&nbsp;&nbsp;{vtranslate('LBL_ADD_NEW_KANBAN_SETTINGS', $QUALIFIED_MODULE)}
                        </button>
                    </div>
                    <div id="table-content" class="table-container" style="padding-top:0px !important;">
                        <table id="listview-table" class="table listview-table">
                            <thead>
                            <tr class="listViewContentHeader">
                                <th style="width:25%">
                                    {vtranslate('LBL_ACTIONS', $QUALIFIED_MODULE)}
                                </th>
                                <th>
                                    {vtranslate('LBL_SOURCE_MODULE', $QUALIFIED_MODULE)}
                                </th>
                                <th>
                                    {vtranslate('LBL_SOURCE_FIELD', $QUALIFIED_MODULE)}
                                </th>
                            </tr>
                            </thead>
                            <tbody class="overflow-y">
                            {if $COUNT_OF_TABLE_ELEMENTS gt 0}
                                {foreach item=PICKLIST_MODULE_MODEL from=$PICKLIST_MODULES}
                                    {assign var=MODULE_ID value=getTabId($PICKLIST_MODULE_MODEL->getName())}
                                    {if array_key_exists($MODULE_ID, $SAVED_SETTINGS)}
                                        {assign var=FIELD_MODEL value=$SAVED_SETTINGS[getTabId($PICKLIST_MODULE_MODEL->getName())]}
                                        <tr class="listViewEntries" data-tabid="{$MODULE_ID}" data-fieldid="{$FIELD_MODEL->get('id')}" data-editurl="index.php?module=ITS4YouKanbanView&parent=Settings&view=Edit&sourceModule={$PICKLIST_MODULE_MODEL->getName()}">
                                            <td>
                                                <div class="table-actions" style="width:60px">
                                                    <a class="deleteKanbanViewSettings">
                                                        <i class="fa fa-trash"
                                                           title="{vtranslate('LBL_DELETE', $QUALIFIED_MODULE)}"></i>
                                                    </a>&nbsp;&nbsp;
                                                    <a class="editKanbanViewSettings">
                                                        <i class="fa fa-pencil" title="{vtranslate('LBL_EDIT', $QUALIFIED_MODULE)}"></i>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                {vtranslate($PICKLIST_MODULE_MODEL->getName(), $PICKLIST_MODULE_MODEL->getName())}
                                            </td>
                                            <td>
                                                {vtranslate($FIELD_MODEL->get('label'), $PICKLIST_MODULE_MODEL->getName())}
                                            </td>
                                        </tr>
                                    {/if}
                                {/foreach}
                            {else}
                                <tr class="emptyRecordsDiv">
                                    <td colspan="3">
                                        <div class="text-center">
                                            <span class="">{vtranslate('LBL_NO_SETTINGS', $QUALIFIED_MODULE)}</span>
                                        </div>
                                    </td>
                                </tr>
                            {/if}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
{/strip}