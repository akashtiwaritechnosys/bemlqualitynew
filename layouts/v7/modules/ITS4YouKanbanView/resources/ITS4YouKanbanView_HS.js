/*********************************************************************************
 * The content of this file is subject to the ITS4YouKanbanView license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ********************************************************************************/

/** @var ITS4YouKanbanView_HS_Js */
jQuery.Class('ITS4YouKanbanView_HS_Js', {
    instance: false,
    getInstance: function () {
        if (!this.instance) {
            this.instance = new ITS4YouKanbanView_HS_Js();
        }

        return this.instance
    }
}, {
    registerBasicLink: function () {
        const link = jQuery('.listViewMassActions').find('a[href*="ITS4YouKanbanView"]');

        if(link.length) {
            const label = link.text().trim(),
                newLink = jQuery('<li><button type="button" class="btn kanbanViewButton btn-default module-buttons"><div class="fa fa-th-large" aria-hidden="true"></div>&nbsp;&nbsp;' + label + '</button></li>');

            newLink.on('click', function() {
                window.location.href = link.attr('href');
            });
            jQuery('.module-action-content .nav.navbar-nav').prepend(newLink);
        }
    },
    registerEvents: function () {
        this.registerBasicLink()
    }
});

jQuery(document).ready(function () {
    ITS4YouKanbanView_HS_Js.getInstance().registerEvents();
});
