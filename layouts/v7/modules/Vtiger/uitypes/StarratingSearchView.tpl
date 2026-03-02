{*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************}

{strip}
    {assign var="FIELD_INFO" value=$ZEND_JSON::encode($FIELD_MODEL->getFieldInfo())}
    <div class="row-fluid">
        <select class="select2 listSearchContributor" name="{$FIELD_MODEL->get('name')}"
            data-fieldinfo='{$FIELD_INFO|escape}'>
            <option value="">{vtranslate('LBL_SELECT_OPTION','Vtiger')}</option>
            {for $i=1 to 5}
                <option value="{$i}">{$i} {vtranslate('Stars','Vtiger')}</option>
            {/for}
        </select>
    </div>
{/strip}