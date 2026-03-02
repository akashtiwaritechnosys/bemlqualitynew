{*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************}

{strip}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <div class="row-fluid">
        <div class="span12">
            {* Ensure RECORD is available before accessing it *}
            {if $RECORD}
                <div id="geolocation-map" style="height: 400px; width: 100%; margin-bottom: 20px; border: 1px solid #ccc;"
                    data-checkin-lat="{$RECORD->get('gl_latin')}"
                    data-checkin-lng="{$RECORD->get('gl_longin')}"
                    data-checkout-lat="{$RECORD->get('gl_latout')}"
                    data-checkout-lng="{$RECORD->get('gl_longout')}">
                </div>
            {else}
                <div class="alert alert-warning">
                    Geolocation Map could not be loaded (Record data unavailable).
                </div>
            {/if}
        </div>
    </div>

    <form id="detailView" method="POST">
        {include file='DetailViewBlockView.tpl'|@vtemplate_path:$MODULE_NAME RECORD_STRUCTURE=$RECORD_STRUCTURE MODULE_NAME=$MODULE_NAME}
    </form>
{/strip}
