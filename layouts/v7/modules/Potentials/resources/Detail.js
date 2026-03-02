/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

Vtiger_Detail_Js(
  "Potentials_Detail_Js",
  {
    //cache will store the convert Potential data(Model)
    cache: {},

    //Holds detail view instance
    detailCurrentInstance: false,

    /*
     * function to trigger Convert Potential action
     * @param: Convert Potential url, currentElement.
     */
    convertPotential: function (convertPotentialUrl, buttonElement) {
      var instance = Potentials_Detail_Js.detailCurrentInstance;
      //Initially clear the elements to overwtite earliear cache
      instance.convertPotentialContainer = false;
      instance.convertPotentialForm = false;
      instance.convertPotentialModules = false;
      if (jQuery.isEmptyObject(Potentials_Detail_Js.cache)) {
        app.request.get({ url: convertPotentialUrl }).then(
          function (err, data) {
            if (data) {
              Potentials_Detail_Js.cache = data;
              instance.displayConvertPotentialModel(data, buttonElement);
            }
          },
          function (error, err) { }
        );
      } else {
        instance.displayConvertPotentialModel(
          Potentials_Detail_Js.cache,
          buttonElement
        );
      }
    },
  },
  {
    //Contains the convert Potential form
    convertPotentialForm: false,

    //contains the convert Potential container
    convertPotentialContainer: false,

    //contains all the checkbox elements of modules
    convertPotentialModules: false,

    detailViewRecentContactsLabel: "Contacts",
    detailViewRecentProductsTabLabel: "Products",

    //constructor
    init: function () {
      this._super();
      Potentials_Detail_Js.detailCurrentInstance = this;
    },

    /*
     * function to get Convert Potential Form
     */
    getConvertPotentialForm: function () {
      if (this.convertPotentialForm == false) {
        this.convertPotentialForm = jQuery("#convertPotentialForm");
      }
      return this.convertPotentialForm;
    },

    /*
     * function to get Convert Potential Container
     */
    getConvertPotentialContainer: function () {
      if (this.convertPotentialContainer == false) {
        this.convertPotentialContainer = jQuery("#potentialAccordion");
      }
      return this.convertPotentialContainer;
    },

    /*
     * function to get all the checkboxes which are representing the modules selection
     */
    getConvertPotentialModules: function () {
      var container = this.getConvertPotentialContainer();
      if (this.convertPotentialModules == false) {
        this.convertPotentialModules = jQuery(
          ".convertPotentialModuleSelection",
          container
        );
      }
      return this.convertPotentialModules;
    },

    /*
     * function to disable the Convert Potential button
     */
    disableConvertPotentialButton: function (button) {
      jQuery(button).attr("disabled", "disabled");
    },

    /*
     * function to enable the Convert Potential button
     */
    enableConvertPotentialButton: function (button) {
      jQuery(button).removeAttr("disabled");
    },

    /*
     * function to enable all the input and textarea elements
     */
    removeDisableAttr: function (moduleBlock) {
      moduleBlock.find("input,textarea,select").removeAttr("disabled");
    },

    /*
     * function to disable all the input and textarea elements
     */
    addDisableAttr: function (moduleBlock) {
      moduleBlock.find("input,textarea,select").attr("disabled", "disabled");
    },

    /*
     * function to display the convert Potential model
     * @param: data used to show the model, currentElement.
     */
    displayConvertPotentialModel: function (data, buttonElement) {
      var instance = this;
      var errorElement = jQuery(data).find("#convertPotentialError");
      if (errorElement.length != "0") {
      } else {
        var callBackFunction = function (data) {
          var editViewObj = Vtiger_Edit_Js.getInstance();
          jQuery(data).find(".fieldInfo").collapse({
            parent: "#potentialAccordion",
            toggle: false,
          });
          app.helper.showVerticalScroll(
            jQuery(data).find("#potentialAccordion"),
            { setHeight: "350px" }
          );
          editViewObj.registerBasicEvents(data);
          var checkBoxElements = instance.getConvertPotentialModules();
          jQuery.each(checkBoxElements, function (index, element) {
            instance.checkingModuleSelection(element);
          });
          instance.registerForReferenceField();
          instance.registerConvertPotentialEvents();
          instance.registerConvertPotentialSubmit();
          instance.extendTrial();
        };
        app.helper.showModal(data, { cb: callBackFunction });
      }
    },

    /*
     * function to check which module is selected
     * to disable or enable all the elements with in the block
     */
    checkingModuleSelection: function (element) {
      var instance = this;
      var module = jQuery(element).val();
      var moduleBlock = jQuery(element)
        .closest(".accordion-group")
        .find("#" + module + "_FieldInfo");
      if (jQuery(element).is(":checked")) {
        instance.removeDisableAttr(moduleBlock);
      } else {
        instance.addDisableAttr(moduleBlock);
      }
    },

    registerForReferenceField: function () {
      var container = this.getConvertPotentialContainer();
      var referenceField = jQuery(".reference", container);
      if (referenceField.length > 0) {
        jQuery("#ProjectModule").attr("readonly", "readonly");
      }
    },

    /*
     * function to register Convert Potential Events
     */
    registerConvertPotentialEvents: function () {
      var container = this.getConvertPotentialContainer();
      var instance = this;

      //Trigger Event to change the icon while shown and hidden the accordion body
      container.on("click", ".accordion-group", function (e) {
        var currentElement = jQuery(e.currentTarget).find(".Project_faAngle");
        if (jQuery(".Project_FieldInfo").hasClass("in")) {
          currentElement.removeClass("fa-angle-up");
          currentElement.addClass("fa-angle-down");
        } else {
          currentElement.removeClass("fa-angle-down");
          currentElement.addClass("fa-angle-up");
        }
      });

      //Trigger Event on click of the Modules selection to convert the lead
      container.on("click", ".convertPotentialModuleSelection", function (e) {
        var currentTarget = jQuery(e.currentTarget);
        var currentModuleName = currentTarget.val();
        var moduleBlock = currentTarget
          .closest(".accordion-group")
          .find("#" + currentModuleName + "_FieldInfo");

        if (currentTarget.is(":checked")) {
          moduleBlock.collapse("show");
          instance.removeDisableAttr(moduleBlock);
        } else {
          moduleBlock.collapse("hide");
          instance.addDisableAttr(moduleBlock);
        }
        e.stopImmediatePropagation();
      });
    },

    /*
     * function to register Convert Potential Submit Event
     */
    registerConvertPotentialSubmit: function () {
      var thisInstance = this;
      var formElement = this.getConvertPotentialForm();
      var params = {
        ignore: "disabled",
        submitHandler: function (form) {
          var convertPotentialModuleElements =
            thisInstance.getConvertPotentialModules();
          var moduleArray = [];
          var projectModel = formElement.find("#ProjectModule");

          jQuery.each(
            convertPotentialModuleElements,
            function (index, element) {
              if (jQuery(element).is(":checked")) {
                moduleArray.push(jQuery(element).val());
              }
            }
          );
          formElement
            .find('input[name="modules"]')
            .val(JSON.stringify(moduleArray));

          var projectElement = projectModel.length;

          if (projectElement != "0") {
            if (jQuery.inArray("Project", moduleArray) == -1) {
              app.helper.showErrorNotification({
                message: app.vtranslate("JS_SELECT_PROJECT_TO_CONVERT_LEAD"),
              });
              return false;
            }
          }
          return true;
        },
      };
      formElement.vtValidate(params);
    },

    extendTrial: function () {
      var recordId = app.getRecordId();
      var moduleName = "Potentials";
      app.helper.showProgress();
      app.request.post({
        data: {
          module: 'Potentials',
          action: 'GetTrialInfo',
          record: recordId
        }
      }).then(function (err, data) {
        app.helper.hideProgress();


        var currentDateStr = data.cf_879;
        var currenttrialstate = data.cf_881;

        if (!currentDateStr) {
          app.helper.showErrorNotification({ message: "Trial expiry date is empty" });
          return;
        }

        if (currenttrialstate == 'Third Trial Period') {
          app.helper.showErrorNotification({
            message: "All trial periods have been exhausted",
          });
          return;
        }


        var newtrialstate = "";
        if (currenttrialstate == "First Trial Period") newtrialstate = "Second Trial Period";
        if (currenttrialstate == "Second Trial Period") newtrialstate = "Third Trial Period";
        if (currenttrialstate == 'Third Trial Period') {
          newtrialstate = "Third Trial Period";
        }

        var dateParts = currentDateStr.split("-");
        var dateObj = new Date(dateParts[0], dateParts[1] - 1, dateParts[2]);
        dateObj.setDate(dateObj.getDate() + 7);
        var newDate = dateObj.toISOString().slice(0, 10);

        var params = {
          module: moduleName,
          action: "SaveAjax",
          record: recordId,
          cf_879: newDate,
          cf_881: newtrialstate,
        };
        app.helper.showConfirmationBox({
          message: "Are you sure you want to extend the trial?"
        }).then(function () {
          app.request.post({ data: params }).then(function (err, response) {
            if (err === null) {
              app.helper.showSuccessNotification({
                message: "Trial Extended to " + newDate,
              });
              location.reload();
            } else {
              app.helper.showErrorNotification({
                message: "Failed to Extend Trial",
              });
            }
          });
        });

      });
    },

    /**
     * Function which will register all the events
     */
    registerEvents: function () {
      this._super();
      var detailContentsHolder = this.getContentHolder();
      var thisInstance = this;

      detailContentsHolder.on("click", ".moreRecentContacts", function () {
        var recentContactsTab = thisInstance.getTabByLabel(
          thisInstance.detailViewRecentContactsLabel
        );
        recentContactsTab.trigger("click");
      });

      detailContentsHolder.on("click", ".moreRecentProducts", function () {
        var recentProductsTab = thisInstance.getTabByLabel(
          thisInstance.detailViewRecentProductsTabLabel
        );
        recentProductsTab.trigger("click");
      });
    },
  }
);

// jQuery(document).ready(function () {
//   var salesStage = jQuery("#Potentials_detailView_fieldValue_sales_stage").text().trim();
//   if (salesStage === "Closed Won" || salesStage === "Won") {
//     showCongratsPopup();
//   }
// });

function showCongratsPopup() {
  var popupHTML = `
        <div id="dealCongratsPopup" style="position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);z-index:9999;display:flex;justify-content:center;align-items:center;">
            <div style="background:#fff;padding:30px;border-radius:20px;text-align:center;max-width:400px;position:relative;">
                <h2>🎉 Congrats! 🎉</h2>
                <p>You closed your deal successfully!</p>
                <button onclick="closeCongratsPopup()" style="background:#28a745;color:#fff;padding:10px 20px;border:none;border-radius:10px;cursor:pointer;">Close</button>
            </div>
        </div>
    `;
  jQuery('body').append(popupHTML);
}

function closeCongratsPopup() {
  jQuery('#dealCongratsPopup').remove();
  location.reload();
}

jQuery(document).ready(function() {
    jQuery('.stage-item').on('click', function() {
        var stage = jQuery(this).data('stage');
        var recordId = app.getRecordId();

        app.helper.showProgress();

        app.request.post({
            data: {
                module: 'Potentials',
                action: 'SaveAjax',
                record: recordId,
                field: 'sales_stage',
                value: stage
            }
        }).then(function(response) {
            app.helper.hideProgress();
            app.helper.showSuccessNotification({message: 'Stage updated to ' + stage});
            if (stage === "Closed Won") {
              showCongratsPopup();
               console.log("Start waiting...");
              setTimeout(() => {
                  console.log("30 seconds have passed!");
              }, 60000); // 
              location.reload(); // or update bar dynamically
            } else {
              location.reload();
            }
        }, function(error) {
            app.helper.hideProgress();
            app.helper.showErrorNotification({message: 'Failed to update stage'});
        });
    });
});
