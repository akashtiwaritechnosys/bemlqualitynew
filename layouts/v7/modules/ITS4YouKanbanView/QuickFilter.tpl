{*+**********************************************************************************
 * The content of this file is subject to the ITS4YouKanbanView license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
************************************************************************************}
{strip}
    <div class="quickFilter">
        <span>{vtranslate('LBL_QUICK_FILTERS', $MODULE)}:</span>
        <select name="assignedUserFilter" multiple class="select2" id="assignedUserFilter" style="width: 70%; max-width: 600px; min-width: 300px">
            <optgroup label="{vtranslate('LBL_USERS')}">
                {foreach item=VALUE from=$SOURCE_ASSIGNED_USERS['users']}
                    <option value="{$VALUE}">{$VALUE}</option>
                {/foreach}
            </optgroup>
            <optgroup label="{vtranslate('LBL_GROUPS')}">
                {foreach item=VALUE from=$SOURCE_ASSIGNED_USERS['groups']}
                    <option value="{$VALUE}">{$VALUE}</option>
                {/foreach}
            </optgroup>
        </select>
    </div>
{/strip}