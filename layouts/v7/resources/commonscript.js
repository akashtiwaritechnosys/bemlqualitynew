// ************** Document Ready Starts Here **************
$(document).ready(function () {
  // ************** Navbar Scroll Effect Starts Here **************
  $(window).on("scroll", function () {
    const $searchCont = $("body");
    if ($(this).scrollTop() > 10) {
      $searchCont.addClass("scrolled");
    } else {
      $searchCont.removeClass("scrolled");
    }
  });

  // if ($(".notification-link").length) {
  //   $(".app-menu").css("top", "54px");
  // }

  // ************** Navbar Scroll Effect Ends Here **************

  // ************** FloatThead Scroll Fix on Dropdown Starts Here **************
  // $(".more.dropdown").on("shown.bs.dropdown", function () {
  //   $(".floatThead-wrapper .ps-container").addClass("ps-visible");
  // });

  // $(".more.dropdown").on("hidden.bs.dropdown", function () {
  //   $(".floatThead-wrapper .ps-container").removeClass("ps-visible");
  // });
  // ************** FloatThead Scroll Fix Ends Here **************

  // ************** MutationObserver for .ready .test Element Starts Here **************
  setTimeout(() => {
    const target = document.querySelector(".ready .test");
    if (target) {
      const observer = new MutationObserver(() => {
        target.removeAttribute("style");
      });
      observer.observe(target, {
        attributes: true,
        attributeFilter: ["style"],
      });
      console.log("MutationObserver attached after delay.");
    } else {
      console.log("Element not found after delay.");
    }
  }, 1000);
  // ************** MutationObserver Ends Here **************

  // ************** Dark/Light Mode Toggle Starts Here **************
  // if (localStorage.getItem("theme") === "dark") {
  //   $("html").addClass("dark-mode");
  // }

  // $("#theme-toggle").on("click", function () {
  //   $("html").toggleClass("dark-mode");
  //   const newTheme = $("html").hasClass("dark-mode") ? "dark" : "light";
  //   localStorage.setItem("theme", newTheme);
  // });
  // ************** Dark/Light Mode Toggle Ends Here **************

  // ************** Disable Body Scroll on Modal Open Starts Here **************
  // $(document).on("shown.bs.modal", function () {
  //   $("body").css("overflow", "hidden");
  // });

  // $(document).on("hidden.bs.modal", function () {
  //   $("body").css("overflow", "");
  // });
  // ************** Disable Body Scroll on Modal Open Ends Here **************

  // ****************** to increase the width of the "Assign To" search bar start here ***********
  jQuery(document).ready(function () {
    jQuery('select[name="assigned_user_id"]').select2({
      width: "190px",
    });
  });
  // ****************** to increase the width of the "Assign To" search bar ends here ***********

  // =============== for input datepicker dropdown alignment start here  ==============
  setInterval(function () {
    const wrapper = $(".date-picker-wrapper");

    // If body has modal-open, remove both classes
    if ($("body").hasClass("modal-open")) {
      $("body").removeClass("remove-space");
      return; // stop further processing
    }

    if (wrapper.length) {
      if (wrapper.is(":visible")) {
        $("body").addClass("remove-space");
      } else {
        $("body").removeClass("remove-space");
      }
    }
  }, 100);

  // click/focus on input
  $(document).on("click focus", ".dateField", function () {
    const wrapper = $(".date-picker-wrapper");

    if ($("body").hasClass("modal-open")) {
      $("body").removeClass("remove-space");
      return;
    }

    if (wrapper.length && wrapper.is(":visible")) {
      $("body").addClass("remove-space");
    } else {
      $("body").removeClass("remove-space");
    }
  });
  // =============== for input datepicker dropdown alignment end here  ==============



});



// ************** Document Ready Ends Here **************


// window.addEventListener('load', () => {
//   setTimeout(() => {
//     const notification = document.querySelector('.notification-link');
//     const appMenu = document.querySelector('.app-menu');

//     notification.classList.add('show'); // slide down
//     appMenu.style.top = '54px'; // move menu down
//   }, 1000); // appear after 2 seconds
// });


window.addEventListener('load', () => {
  const notification = document.querySelector('.trial-status');
  const appMenu = document.querySelector('.app-menu:not(.scrolled)');
  const appMenuscrolled = document.querySelector('.app-menu.scrolled');
  const appList = document.querySelector('.app-menu .app-list');
  const updater = document.getElementById('applicationUpdater');
  const closeBtn = document.querySelector('.close-notific');

  // --- Helper functions for cookies ---
  function setCookie(name, value, hours) {
    const d = new Date();
    d.setTime(d.getTime() + hours * 60 * 60 * 1000);
    document.cookie = `${name}=${value};expires=${d.toUTCString()};path=/`;
  }

  function getCookie(name) {
    const match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
    return match ? match[2] : null;
  }

  // Only run notification-related logic if element exists
  if (notification) {
    const isClosed = getCookie('trialClosed');
    const progressFill = notification.querySelector('.trial-progress-fill');

    // Store target width from inline style
    let targetWidth = null;
    if (progressFill) {
      targetWidth = progressFill.style.width; // e.g., "50%"
      progressFill.style.width = '0'; // start at 0 for animation
      progressFill.style.transition = 'width 1s ease-in-out';
      progressFill.offsetWidth; // force reflow
    }

    if (!isClosed) {
      setTimeout(() => {
        notification.classList.add('show');
        if (appMenu) appMenu.classList.add('shifted');
        if (appList) appList.classList.add('reduced');
        if (updater) updater.classList.add('shifted');

        // Animate progress bar after showing notification
        if (progressFill && targetWidth) {
          setTimeout(() => {
            progressFill.style.width = targetWidth;
          }, 50);
        }
      }, 2000);
    } else {
      notification.classList.remove('show');
    }

    // Close notification on click
    if (closeBtn) {
      closeBtn.addEventListener('click', (e) => {
        e.preventDefault();
        notification.classList.remove('show');
        if (appMenu) appMenu.classList.remove('shifted');
        if (appList) appList.classList.remove('reduced');
        if (updater) updater.classList.remove('shifted');
        setCookie('trialClosed', 'true', 24);
      });
    }

    // Handle scroll only if notification exists
    window.addEventListener('scroll', () => {
      const scrollY = window.scrollY || window.pageYOffset;

      if (scrollY > 10) {
        if (appMenu) appMenu.classList.remove('shifted');
        if (appList) appList.classList.remove('reduced');
        if (updater) updater.classList.remove('shifted');
      } else if (notification.classList.contains('show')) {
        if (appMenu) appMenu.classList.add('shifted');
        if (appList) appList.classList.add('reduced');
        if (updater) updater.classList.add('shifted');
      }
    });
  }
});









// ----------- for datepicker start here -------------
(function ($) {
  // === SCROLL LOCK HANDLING ===
  function lockScroll() {
    document.documentElement.classList.add("modal-open");
    document.body.classList.add("modal-open");
  }

  function unlockScroll() {
    document.documentElement.classList.remove("modal-open");
    document.body.classList.remove("modal-open");
  }

  // Lock/unlock scroll when modal opens/closes
  $(document).on("shown.bs.modal", ".myModal", function () {
    lockScroll();
  });

  $(document).on("hidden.bs.modal", ".myModal", function () {
    // Only unlock if no other modal is open
    if ($(".myModal.show").length === 0) {
      unlockScroll();
    }
  });

  // === DATEPICKER HANDLING ===
  $(document).on("focus", ".datepicker", function () {
    // Initialize datepicker only once
    if (!$(this).data("datepicker")) {
      $(this)
        .datepicker({
          format: "dd-mm-yyyy",
          autoclose: true,
        })
        .on("show", function () {
          let modal = $(this).closest(".myModal");
          if (modal.length) {
            // Move popup into modal
            $(".datepicker-dropdown").appendTo(modal);
          }
        });
      $(this).datepicker("show"); // open immediately if needed
    }
  });
})(jQuery);




// ----------- for datepicker end here -------------

//  ------------- minilist modal of home page button start here -----------------
jQuery(document).ready(function ($) {
  var wizardContainer = $("#minilistWizardContainer");
  var footer = $("#miniListFooter");

  // Initially hide all except first step
  $("#miniListFilterRow, #miniListFieldsRow").hide();
  footer.hide();

  // Step 1 → When module selected → show Filter row
  $("#miniListModule").on("change", function () {
    if ($(this).val()) {
      $("#miniListFilterRow").show();
    } else {
      $("#miniListFilterRow, #miniListFieldsRow").hide();
      footer.hide();
    }
  });

  // Step 2 → When filter selected → show Fields row
  $("#miniListFilter").on("change", function () {
    if ($(this).val()) {
      $("#miniListFieldsRow").show();
    } else {
      $("#miniListFieldsRow").hide();
      footer.hide();
    }
  });

  // Step 3 → When field(s) selected → show Footer
  $("#miniListFields").on("change", function () {
    var selected = $(this).val();
    if (selected && selected.length > 0) {
      footer.show();
    } else {
      footer.hide();
    }
  });

  // ======================  mini List start here   ==============
  var wizardContainer = $("#minilistWizardContainer");

  // Handle Next button
  wizardContainer.on("click", ".nextStep", function () {
    var currentRow = $(this).closest("tr");
    var nextRow = currentRow.nextAll("tr").first();

    if (nextRow.length) {
      currentRow.hide(); // hide current step
      nextRow.show(); // show next step
    }
  });

  // Handle Back button
  wizardContainer.on("click", ".prevStep", function () {
    var currentRow = $(this).closest("tr");
    var prevRow = currentRow.prevAll("tr").first();

    if (prevRow.length) {
      currentRow.hide(); // hide current step
      prevRow.show(); // show previous step
    }
  });
  // ======================  mini List end here   ==============

  // Prevent dropdown from closing when clicking inside (but not on links)
  $(document).on("click", ".topbar-right .open .dropdown-menu", function (e) {
    // If the clicked element is NOT a link
    if (!$(e.target).is("a, a *")) {
      e.stopPropagation();
    }
  });

  // Close dropdown when clicking a link
  $(document).on("click", ".topbar-right .open .dropdown-menu a", function () {
    $(".topbar-right .open").removeClass("open");
  });

  // Optional: close dropdown when clicking outside
  $(document).on("click", function (e) {
    if (!$(e.target).closest(".topbar-right .dropdown").length) {
      $(".topbar-right .open").removeClass("open");
    }
  });

});
//  ------------- minilist modal of home page button end here -----------------

// ===============  for datepicker alignment start =============
jQuery(function ($) {
  // Only run on specific views
  var viewName = app.getViewName();
  if (["Edit", "QuickCreate", "Popup"].indexOf(viewName) === -1) {
    return; // do nothing on other pages
  }

  function initSmartDatePicker(context) {
    context.find(".dateField").each(function () {
      var $input = $(this);

      // Destroy any existing instance first
      $input.datepicker("destroy");

      // Initialize fresh Bootstrap Datepicker
      $input.datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true,
        container: "body",
        orientation: "bottom",
      });

      // ✅ Ensure datepicker hides after selecting a date
      $input.on("changeDate", function () {
        $(this).datepicker("hide");
      });

      // ✅ Handle custom positioning logic
      $input.on("show", function () {
        setTimeout(function () {
          var $picker = $(".datepicker-dropdown");
          if (!$picker.length) return;

          var offset = $input.offset();
          var inputHeight = $input.outerHeight();
          var pickerHeight = $picker.outerHeight();
          var scrollTop = $(window).scrollTop();
          var windowHeight = $(window).height();

          var spaceBelow = windowHeight - (offset.top - scrollTop + inputHeight);
          var spaceAbove = offset.top - scrollTop;

          // 📏 If small screen or limited space, adjust smarter
          if (windowHeight <= 680) {
            if (spaceBelow < pickerHeight && spaceAbove > spaceBelow) {
              // Open above if more space on top
              $picker
                .css({
                  top: offset.top - pickerHeight - 8,
                  left: offset.left,
                })
                .addClass("top")
                .removeClass("bottom");
            } else {
              // Default below
              $picker
                .css({
                  top: offset.top + inputHeight + 8,
                  left: offset.left,
                })
                .addClass("bottom")
                .removeClass("top");
            }
          } else {
            // Normal logic for larger screens
            if (spaceBelow < pickerHeight && spaceAbove > pickerHeight / 2) {
              $picker
                .css({
                  top: offset.top - pickerHeight - 8,
                  left: offset.left,
                })
                .addClass("top")
                .removeClass("bottom");
            } else {
              $picker
                .css({
                  top: offset.top + inputHeight + 8,
                  left: offset.left,
                })
                .addClass("bottom")
                .removeClass("top");
            }
          }

          // 🧩 Prevent cutoff on very small screens
          var pickerTop = parseInt($picker.css("top"), 10);
          var pickerBottom = pickerTop + pickerHeight;
          if (pickerTop < scrollTop) {
            $picker.css("top", scrollTop + 8); // push down into view
          } else if (pickerBottom > scrollTop + windowHeight) {
            $picker.css("top", scrollTop + windowHeight - pickerHeight - 8); // pull up into view
          }
        }, 10);
      });

    });
  }

  // Initialize on page load
  initSmartDatePicker($(document));

  // Reinitialize on dynamic loads
  app.event.on(
    "post.listViewLoad post.editViewLoad post.quickCreateSave post.PopupViewLoad",
    function () {
      initSmartDatePicker($(document));
    }
  );
});


jQuery(function ($) {
  // Disable autofill globally
  $('form, input, select, textarea').attr('autocomplete', 'off');

  // Optional: trap fake autofill
  $('form').prepend('<input type="text" style="display:none"><input type="password" style="display:none">');


});

jQuery(document).on('shown.bs.modal', function () {
  jQuery('html').addClass('modal-open');
});

jQuery(document).on('hidden.bs.modal', function () {
  jQuery('html').removeClass('modal-open');
});

// document.addEventListener('DOMContentLoaded', () => {
//     const btn = document.querySelector('[data-theme-toggle]');
//     const root = document.documentElement;
//     const savedTheme = localStorage.getItem('theme') || 'light';

//     // Apply saved theme
//     root.setAttribute('data-theme', savedTheme);

//     // Toggle theme on click
//     btn.addEventListener('click', () => {
//       const currentTheme = root.getAttribute('data-theme');
//       const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
//       root.setAttribute('data-theme', newTheme);
//       localStorage.setItem('theme', newTheme);
//     });
//   });


// ===============  for datepicker alignment end =============
