jQuery(document).ready(function () {

  jQuery("#myModal88").modal("show");
  
  jQuery("#horizontalTab").easyResponsiveTabs({
    type: "default", //Types: default, vertical, accordion
    width: "auto", //auto or any width like 600px
    fit: true, // 100% fit in a container
  });
  /* ---- Countdown timer ---- */

  $("#counter").countdown({
    timestamp: new Date().getTime() + 11 * 24 * 60 * 60 * 1000,
  });

  /* ---- Animations ---- */

  $("#links a").hover(
    function () {
      $(this).animate({ left: 3 }, "fast");
    },
    function () {
      $(this).animate({ left: 0 }, "fast");
    }
  );

  $("footer a").hover(
    function () {
      $(this).animate({ top: 3 }, "fast");
    },
    function () {
      $(this).animate({ top: 0 }, "fast");
    }
  );
});
