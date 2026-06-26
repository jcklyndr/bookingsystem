(function ($) {
  "use strict";

  // =========================================================================
  // 1. CORE LAYOUT HEIGHT RESPONSIVENESS
  // =========================================================================
  var fullHeight = function () {
    $(".js-fullheight").css("height", $(window).height());
    $(window).resize(function () {
      $(".js-fullheight").css("height", $(window).height());
    });
  };
  fullHeight();

  // =========================================================================
  // 2. SYSTEM SCREEN LOADER WRAPPER
  // =========================================================================
  var loader = function () {
    setTimeout(function () {
      if ($("#ftco-loader").length > 0) {
        $("#ftco-loader").removeClass("show");
      }
    }, 1);
  };
  loader();

  // =========================================================================
  // 3. DROPDOWN HOVER & FOCUS ATTRIBUTE TOGGLERS
  // =========================================================================
  $("nav .dropdown").hover(
    function () {
      var $this = $(this);
      $this.addClass("show");
      $this.find("> a").attr("aria-expanded", true);
      $this.find(".dropdown-menu").addClass("show");
    },
    function () {
      var $this = $(this);
      $this.removeClass("show");
      $this.find("> a").attr("aria-expanded", false);
      $this.find(".dropdown-menu").removeClass("show");
    },
  );

  // =========================================================================
  // 4. CALENDAR DATE & TIME PICKER UTILITIES
  // =========================================================================
  if ($.fn.datepicker) {
    $(".appointment_date-check-in").datepicker({
      format: "m/d/yyyy",
      autoclose: true,
    });
    $(".appointment_date-check-out").datepicker({
      format: "m/d/yyyy",
      autoclose: true,
    });
  }

  if ($.fn.timepicker) {
    $(".appointment_time").timepicker();
  }

  // =========================================================================
  // 5. ASYNC AJAX PAGINATION CONTROL HANDLER
  // =========================================================================
  $("#spa-cards-container").on("click", ".ajax-pagination a", function (e) {
    e.preventDefault(); // Pipigilan ang buong native frame window page reload

    var url = $(this).attr("href");

    $.ajax({
      url: url,
      headers: {
        "X-Requested-With": "XMLHttpRequest",
      },
      success: function (data) {
        $("#spa-cards-container").html(data);

        var $section = $("#spa-services-section");
        if ($section.length) {
          $("html, body").animate(
            {
              scrollTop: $section.offset().top,
            },
            500,
          ); // Smooth vertical scroll transition window anchor adjustment
        }
      },
      error: function (xhr, status, error) {
        console.error("Error fetching pagination data:", error);
      },
    });
  });

  // =========================================================================
  // 6. CENTRALIZED SECURE PASSWORD VIEW TOGGLER (Dynamic Delegation Engine)
  // Covers: Customer Login, Register, Create Admin, & Update Admin Viewports
  // =========================================================================
  $(document).on(
    "click",
    "[id^='togglePassword'], .toggle-password-btn",
    function () {
      // Hinahanap ang katabing text field box sa parehong Bootstrap input-group parent container card block
      var $passwordInput = $(this).closest(".input-group").find("input");
      var $eyeIcon = $(this).find("i");

      if ($passwordInput.length && $eyeIcon.length) {
        if ($passwordInput.attr("type") === "password") {
          $passwordInput.attr("type", "text");
          $eyeIcon.removeClass("fa-eye").addClass("fa-eye-slash");
        } else {
          $passwordInput.attr("type", "password");
          $eyeIcon.removeClass("fa-eye-slash").addClass("fa-eye");
        }
      }
    },
  );
})(jQuery);
