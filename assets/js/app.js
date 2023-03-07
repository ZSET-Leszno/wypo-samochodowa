/*
 global $, jQuery, Swiper, ProgressBar, mCustomScrollbar, magnificPopup, datetimepicker, TreeSixtyImageRotate, counterUp
 author: @michus.studio
 date: 05-03-2023
 */
(function ($) {
  "use strict";
  //data background
  $('[data-background]').each(function () {
    var $data_bg = $(this).attr('data-background');
    $(this).css({
      "background-image": 'url(' + $data_bg + ')'
    });
  }); //offcanvas function
  function offCanvus() {
    $(".ofcanvus-toggle").on("click", function () {
      $(".at_offcanvus_menu").addClass("active");
    });
    $(".at-offcanvus-close").on("click", function () {
      $(".at_offcanvus_menu").removeClass("active");
    });
    $(document).on("mouseup", function (e) {
      var offCanvusMenu = $(".at_offcanvus_menu");

      if (!offCanvusMenu.is(e.target) && offCanvusMenu.has(e.target).length === 0) {
        $(".at_offcanvus_menu").removeClass("active");
      }
    });
  }
  offCanvus(); //mobile menu
  $(".mobile-menu-toggle").on("click", function () {
    $(".mobile-menu").addClass("active");
  });
  $(".mobile-menu .close-menu").on("click", function () {
    $(".mobile-menu").removeClass("active");
  });
  $(".mobile-menu ul li.has-submenu a").each(function () {
    $(this).on("click", function () {
      $(this).siblings('ul').slideToggle();
      $(this).toggleClass("icon-rotate");
    });
  });
  $(document).on("mouseup", function (e) {
    var offCanvusMenu = $(".mobile-menu");

    if (!offCanvusMenu.is(e.target) && offCanvusMenu.has(e.target).length === 0) {
      $(".mobile-menu").removeClass("active");
    }
  }); //section scrolldown
  $(".btn-scroll-down").on("click", function () {
    $("html,body").animate({
      scrollTop: 600
    });
    return false;
  }); //scroll top animation
  $(".theme-scrolltop-btn").on("click", function () {
    $("body,html").animate({
      scrollTop: 0
    }, 1500, 'easeOutCubic');
  }); //counterup
  $('.counter').counterUp({
    delay: 10,
    time: 1000
  });//slider
  const at_hero_slider = new Swiper('.at-hero-slider-wrapper', {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 0,
    autoplay: {
      delay: 5000
    },
    speed: 900,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });//Category Menu
  $(".category-toggle").on("click", function () {
    $(".product_category_nav").slideToggle();
  }); //category menu offcanvas
  $(".categories-toggle").on("click", function () {
    $('.offcanvas-category-menu').addClass("active");
  });
  $(".offcanvas-category-menu .close-menu").on("click", function () {
    $(".offcanvas-category-menu").removeClass("active");
  });
  $(".offcanvas-category-menu ul li.has-submenu a").each(function () {
    $(this).on("click", function () {
      $(this).siblings('.category-submenu').slideToggle();
      $(this).toggleClass("icon-rotate");
    });
  });
  $(document).on("mouseup", function (e) {
    var offCanvusMenu = $(".offcanvas-category-menu");
    if (!offCanvusMenu.is(e.target) && offCanvusMenu.has(e.target).length === 0) {
      $(".offcanvas-category-menu").removeClass("active");
    }
  }); //custom scrollbar
  $(".at_scrollbar").mCustomScrollbar({
    axis: "y"
  });
  const inventorySlider = new Swiper(".inventroy-slider", {
    slidesPerView: 4,
    autoplay: true,
    loop: true,
    spaceBetween: 24,
    navigation: {
      nextEl: ".slider-btn-next",
      prevEl: ".slider-btn-prev"
    },
    breakpoints: {
      0: {
        slidesPerView: 1
      },
      768: {
        slidesPerView: 2
      },
      992: {
        slidesPerView: 3
      },
      1400: {
        slidesPerView: 4
      }
    }
  });
  // show more
  $(".iv-expand-btn").on("click", function (e) {
    e.preventDefault();
    $(".expanded-content").slideDown();
  });
  $('.theme-date-input').datetimepicker({
    icons: {
      time: 'fa-solid fa-clock'
    }
  });//Progressbar
  $(".progress-bar-line").ProgressBar(); //listing scroll nav
  $(".car_listing_nav ul li a").each(function () {
    $(this).on("click", function (e) {
      e.preventDefault();

      if ($(this.hash) && $(this.hash).offset()) {
        var hashOffset = $(this.hash).offset().top - 100;
        $("body,html").animate({
          scrollTop: hashOffset
        }, 1000, 'easeOutCubic');
      }
    });
  }); //shipping form slideToggle
  $(".alternate-shipping label").on("click", function () {
    if ($(this).children("input").is(":checked")) {
      $(".alternate-shipping-form").slideDown();
    } else {
      $(".alternate-shipping-form").slideUp();
    }
  }); //image rotate
  $(".img-rotate").each(function () {
    var img_location = $(this).data("img-folder");
    var totalFrames = $(this).data("total-images");
    $(this).TreeSixtyImageRotate({
      totalFrames: totalFrames,
      endFrame: totalFrames,
      currentFrame: 5,
      extension: '.png',
      imagesFolder: img_location,
      navigation: true
    }).initTreeSixty();
  }); //bootstrap tooltip
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
  $(window).on('scroll', function () {
    //header sticky 
    var scrollBar = $(this).scrollTop();
    if (scrollBar > 100) {
      $(".header-sticky").addClass("sticky-on");
    } else {
      $(".header-sticky").removeClass("sticky-on");
    } //theme scrolltop button
    if (scrollBar > 300) {
      $(".theme-scrolltop-btn").fadeIn();
    } else {
      $(".theme-scrolltop-btn").fadeOut();
    } //vertical listing menu
    var scrollBarPosition = $(window).scrollTop();
    $(".car_listing_nav ul li a").each(function () {
      if ($(this.hash) && $(this.hash).offset()) {
        var navOffset = $(this.hash).offset().top - 120;

        if (scrollBarPosition > navOffset) {
          $(this).parents("ul").find("a.active").removeClass("active");
          $(this).addClass("active");
        }
      }
    });
  });
  $(window).on('load', function () {
    //preloader
    $(".ring-preloader").fadeOut();
    var $grid = $('.filter-grid').isotope({});
    $('.collection-filter-controls').on('click', 'button', function () {
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({
        filter: filterValue
      });
    }); //active btn switch
    $(".collection-filter-controls button").each(function () {
      $(this).on("click", function () {
        $(this).parent().find("button.active").removeClass("active");
        $(this).addClass("active");
      });
    }); // filter grid 2
    var $filter_grid_2 = $('.filter_grid_2').isotope({});
    $('.h4-filter-btn-group').on('click', 'button', function () {
      var filterValue = $(this).attr('data-filter');
      $filter_grid_2.isotope({
        filter: filterValue
      });
      $(this).parent(".h4-filter-btn-group").find("button.active").removeClass("active");
      $(this).addClass("active");
    }); // filter grid 3
    var $filter_grid_3 = $('.filter_grid_3').isotope({});
    $('.bs-filter-btn-group').on('click', 'button', function () {
      var filterValue = $(this).attr('data-filter');
      $filter_grid_3.isotope({
        filter: filterValue
      });
      $(this).parent(".bs-filter-btn-group").find("button.active").removeClass("active");
      $(this).addClass("active");
    }); //masonry grid
    $('.masonry_grid').isotope({
      itemSelector: '.grid_item',
      percentPosition: true,
      masonry: {
        columnWidth: 1
      }
    });
    var filter_grid_4 = $(".featured_masonry");
    $('.listing-ft-controls').on('click', 'button', function () {
      var filterValue = $(this).attr('data-filter');
      filter_grid_4.isotope({
        filter: filterValue
      });
      $(this).parent(".listing-ft-controls").find("button.active").removeClass("active");
      $(this).addClass("active");
    });
  });
})(window.jQuery);