//Scroll Animations
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      // console.log(entry);
      if (entry.isIntersecting) {
        entry.target.classList.add('animations-show-item');
        observer.unobserve(entry.target);
      } else {
        entry.target.classList.remove('animations-show-item');
      }
    });
  });

  const hiddenElements = document.querySelectorAll('.animations-hidden-item');
  hiddenElements.forEach((el) => observer.observe(el));

/*===============================================
Banner Section js
=============================================== */

jQuery('document').ready(function(){
  var owl = jQuery('.banner-mian-group .owl-carousel');
    owl.owlCarousel({
    margin:0,
    nav: false,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots:true,
    navText : ['<span class="dashicons dashicons-arrow-left-alt"></span>','<span class="dashicons dashicons-arrow-right-alt"></span> '],
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      600: {
        items: 1,
        nav: false,
      },
      781: {
        items: 1,
        nav: false,
      },
      1000: {
        items: 1
      },
      1200: {
        items: 1
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});


/*===============================================
2 Section js
=============================================== */

jQuery('document').ready(function(){
    var owl = jQuery('.category-main .owl-carousel');
    owl.owlCarousel({
    margin:20,
    nav: true,
    stagePadding:120,
    center:true,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots:true,
    navText : ['<span class="dashicons dashicons-arrow-left-alt"></span>','<span class="dashicons dashicons-arrow-right-alt"></span> '],
    responsive: {
      0: {
        items: 1,
        stagePadding:0,
        nav: false,
      },
      600: {
        items: 3,
        stagePadding:40,
        nav: false,
      },
      781: {
        items: 3,
        nav: false,
        stagePadding:80,
      },
      1000: {
        items: 3,
        stagePadding:60,
      },
      1200: {
        items: 3
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});

/*===============================================
Color change js
=============================================== */

jQuery(document).ready(function() {
  jQuery(".slider h2").each(function() {
    var text = jQuery(this).text().trim();

    var words = text.split(" ").filter(Boolean); // remove empty spaces
    var len = words.length;

    if (len >= 2) {
      // Wrap ONLY second word
      var secondWord = "<span class='color-word'>" + words[1] + "</span>";

      // Build new sentence
      words[1] = secondWord;
      var newText = words.join(" ");

    } else if (len == 1) {
      // Only one word → wrap it
      var newText = "<span class='color-word'>" + words[0] + "</span>";
    }

    jQuery(this).html(newText);
  });
});
/*===============================================
Toggle Bar js
=============================================== */

jQuery(document).ready(function($) {

  var $sidebar = $(".sidebar");
  var $toggleBtn = $(".toggle-btn-main");
  var $crossBtn = $(".cross-btn-main");

  // All focusable elements inside sidebar
  var focusableSelectors =
    'a, button, input, textarea, select, [tabindex]:not([tabindex="-1"])';

  // ========== FOCUS DISABLE WHEN SIDEBAR CLOSED ==========
  function disableSidebarFocus() {
    $sidebar.find(focusableSelectors).each(function () {
      var $el = $(this);
      $el.attr("data-old-tabindex", $el.attr("tabindex") || "");
      $el.attr("tabindex", "-1");
    });
  }

  // ========== RESTORE FOCUS WHEN SIDEBAR OPEN ==========
  function enableSidebarFocus() {
    $sidebar.find(focusableSelectors).each(function () {
      var $el = $(this);
      var old = $el.attr("data-old-tabindex");

      if (old === "") {
        $el.removeAttr("tabindex");
      } else {
        $el.attr("tabindex", old);
      }
    });
  }

  // Disable focus on page load (sidebar closed initially)
  disableSidebarFocus();


  // ========== FOCUS TRAP INSIDE SIDEBAR ==========
  function trapFocus($container) {
    var $focusable = $container.find(focusableSelectors).filter(":visible");
    var first = $focusable.first();
    var last = $focusable.last();

    $container.on("keydown.focusTrap", function(e) {
      if (e.key === "Tab") {
        if (e.shiftKey) {
          if (document.activeElement === first[0]) {
            e.preventDefault();
            last.focus();
          }
        } else {
          if (document.activeElement === last[0]) {
            e.preventDefault();
            first.focus();
          }
        }
      }
    });
  }

  function releaseFocus() {
    $sidebar.off("keydown.focusTrap");
  }


  // ========== TOGGLE BUTTON CLICK ==========
  $toggleBtn.on("click", function() {
    if ($sidebar.hasClass("is-hidden")) {

      // OPEN SIDEBAR
      $sidebar
        .removeClass("is-hidden")
        .attr({
          "aria-hidden": "false",
          "tabindex": "-1"
        })
        .focus();

      $toggleBtn
        .removeClass("dashiconss-menu")
        .addClass("dashiconss-no-alt")
        .attr("aria-expanded", "true");

      enableSidebarFocus();   // allow tabbing
      trapFocus($sidebar);    // trap focus

    } else {

      // CLOSE SIDEBAR
      $sidebar
        .addClass("is-hidden")
        .attr("aria-hidden", "true");

      $toggleBtn
        .removeClass("dashiconss-no-alt")
        .addClass("dashiconss-menu")
        .attr("aria-expanded", "false")
        .trigger("focus");

      disableSidebarFocus();  // block tabbing
      releaseFocus();         // remove trap
    }
  });


  // ========== CROSS BUTTON CLICK ==========
  $crossBtn.on("click", function(e) {
    e.preventDefault();
    e.stopPropagation();

    $sidebar
      .addClass("is-hidden")
      .attr("aria-hidden", "true");

    disableSidebarFocus();
    releaseFocus();

    setTimeout(function() {
      $toggleBtn
        .removeClass("dashiconss-no-alt")
        .addClass("dashiconss-menu")
        .attr("aria-expanded", "false")
        .trigger("focus");
    }, 50);
  });

});
