{*+**********************************************************************************
 * The content of this file is subject to the ITS4YouKanbanView license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
************************************************************************************}

{strip}
    <div class="listview-header-block">
        <div class="listview-header">
            <div class="row">
                <div class="col-sm-12">
                    <div class="clearfix record-header">
                        <div class="recordBasicInfo" style="padding-left: 0px;">
                            <div class="info-row">
                                <h4>
                                    <span class="recordLabel pushDown" title="{$RECORD_MODEL->getName()}">
                                        {foreach item=NAME_FIELD from=$SOURCE_MODULE_MODEL->getNameFields()}
                                            {assign var=FIELD_MODEL value=$SOURCE_MODULE_MODEL->getField($NAME_FIELD)}
                                            {if $FIELD_MODEL->getPermissions()}
                                                <span class="{$NAME_FIELD}">{$RECORD_MODEL->get($NAME_FIELD)}</span>
                                                &nbsp;
                                            {/if}
                                        {/foreach}
                                    </span>
                                </h4>
                            </div>
                            {assign var=FIELDS_MODELS_LIST value=$SOURCE_MODULE_MODEL->getFields()}
                            {foreach item=FIELD_MODEL from=$FIELDS_MODELS_LIST}
                                {assign var=FIELD_DATA_TYPE value=$FIELD_MODEL->getFieldDataType()}
                                {assign var=FIELD_NAME value={$FIELD_MODEL->getName()}}
                                {if $FIELD_MODEL->isHeaderField() && $FIELD_MODEL->isActiveField() && $RECORD_MODEL->get($FIELD_NAME) && $FIELD_MODEL->isViewable()}
                                    {assign var=FIELD_MODEL value=$FIELD_MODEL->set('fieldvalue', $RECORD_MODEL->get({$FIELD_NAME}))}
                                    <div class="info-row row headerAjaxEdit td">
                                        <div class="col-lg-7 fieldLabel">
                                            {assign var=DISPLAY_VALUE value="{$FIELD_MODEL->getDisplayValue($RECORD_MODEL->get($FIELD_NAME))}"}
                                            <span class="{$FIELD_NAME} value" title="{vtranslate($FIELD_MODEL->get('label'),$SOURCE_MODULE_NAME)} : {strip_tags($DISPLAY_VALUE)}">
                                                {include file=$FIELD_MODEL->getUITypeModel()->getDetailViewTemplateName()|@vtemplate_path:$SOURCE_MODULE_NAME FIELD_MODEL=$FIELD_MODEL MODULE=$SOURCE_MODULE_NAME RECORD=$RECORD_MODEL}
                                            </span>
                                        </div>
                                    </div>
                                {/if}
                            {/foreach}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/strip}