/*********************************************************************************
 * The content of this file is subject to the ITS4YouKanbanView license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ********************************************************************************/

/** @var ITS4YouKanbanView_List_Js */
Vtiger_List_Js('ITS4YouKanbanView_List_Js', {}, {
    registerEvents: function () {
        this._super();
    },
    loadFilter: function (filterId, data) {
        const url = jQuery('.filterName[data-filter-id="' + filterId + '"]').attr('href');

        if (url) {
            window.location.href = url;
        }
    },
});
