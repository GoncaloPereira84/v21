window.addEventListener("load", function () {
  $("body").removeClass("preload");

  if (document.getElementById("slideshow") != null) playAnim();

  var cookieBar = document.getElementById("gdpr-box");
  var acceptBtn = document.querySelector(".gdpr-button-accept");

  if (Cookies.get("cookie-consent-v21") == undefined) {
    cookieBar.style.display = "flex";

    acceptBtn.addEventListener("click", function () {
      Cookies.set("cookie-consent-v21", "yes", {
        expires: 365,
        path: "/",
      });
      cookieBar.style.display = "none";
    });
  } else {
    cookieBar.style.display = "none";
  }
  
  $.fn.isInViewport = function () {
    let elementTop = $(this).offset().top;
    let elementBottom = elementTop + $(this).outerHeight();

    let viewportTop = $(window).scrollTop();
    let viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
  };

  if ($(".especializacao .cards-mobile").length > 0) {
    $(window).scroll(function () {
      if ($(".especializacao .cards-mobile").isInViewport()) {
        setTimeout(() => {
          $(".especializacao .cards-mobile > div:first-child").addClass(
            "tease"
          );
        }, 1000);
      }
    });
  }

  if ($(".servicos .cards-mobile").length > 0) {
    $(window).scroll(function () {
      if ($(".servicos .cards-mobile").isInViewport()) {
        setTimeout(() => {
          $(".servicos .cards-mobile > div:first-child").addClass(
            "tease"
          );
        }, 1000);
      }
    });
  }

  var resultado = Number(100) / 1000;

  // $("#banner").css("margin-top", $("#header").height() + "px");
  // $("#banner-noticia").css("margin-top", $("#header").height() + "px");
  // $("#slideshow").css("margin-top", $("#header").height() + "px");

  $("#blue")
    .stop()
    .css("width", resultado + "%")
    .animate(
      {
        width: "100%",
      },
      {
        duration: 1000,
        progress: 100,
        progress: function (promise, progress, ms) {
          $("#percentage").text(Math.round(progress * 100) + "%");
        },
      }
    );

  $("#logo-loader")
    .stop()
    .css("opacity", resultado + "%")
    .animate(
      {
        opacity: "100%",
      },
      {
        duration: 1000,
        progress: function (promise, progress, ms) {
          progress = resultado++;
          if (progress >= 100) {
            progress = 100;
          }
        },
      }
    );

  setTimeout(() => {
    $("#loader").addClass("loaded");
    $("body").addClass("loaded");
  }, 1000);

  var language = document.documentElement.lang;

  $(".langs .lang").on("click", function () {
    changeLanguage($(this).data("lang"));
  });

  function changeLanguage(langid) {
    $(".langs .lang").each(function () {
      if ($(this).attr("data-lang") == langid) $(this).addClass("active");
      if ($(this).attr("data-lang") != langid) $(this).removeClass("active");
    });
    $.ajax({
      url: "/ajax/change_language.php",
      type: "POST",
      dataType: "json",
      data: { langid: langid },
    }).done(function () {
      location.reload();
    });
  }

  if ($("#header-mobile").length != 0) {
    var buttonMenu = $("#hamburguer");
    var menuMobile = $("#header-mobile .menu-cont");

    buttonMenu.on("click", function () {
      menuMobile.toggleClass("open");
      buttonMenu.toggleClass("open");
      $("body").toggleClass("menu-open");
    });
  }
});

if (window.innerWidth <= 768) {
  openSubmenuMobile();
} else {
  openSubmenu();

  function handleTouchStart(evt) {
    const firstTouch = getTouches(evt)[0];
    xDown = firstTouch.clientX;
    yDown = firstTouch.clientY;
  }

  if ("ontouchstart" in window) {
    $(".menu-item:not(:nth-child(5)):not(:nth-child(6)) > a").click(function (
      e
    ) {
      e.preventDefault();
      // trigger tooltip...
    });
  }
}

function openSubmenu() {
  $("#menu .menu-item").mouseenter(function () {
    if ($(this).find(".submenu").hasClass("active")) {
      $(this).find(".submenu").removeClass("active");
    } else {
      $("#menu .menu-item .submenu").removeClass("active");
      $(this).find(".submenu").addClass("active");
    }
  });

  $("#menu .menu-item").mouseleave(function () {
    if ($(this).find(".submenu").hasClass("active")) {
      $(this).find(".submenu").removeClass("active");
    } else {
      $("#menu .menu-item .submenu").removeClass("active");
      $(this).find(".submenu").addClass("active");
    }
  });
}

function openSubmenuMobile() {
  var menuBtns = $("#header-mobile #menu .menu-item");
  menuBtns.each(function () {
    $(this).on("click", function () {
      if ($(this).find(".submenu").hasClass("active")) {
        $(this).find(".submenu").removeClass("active");
      } else {
        $("#header-mobile #menu .menu-item .submenu").removeClass("active");
        $(this).find(".submenu").addClass("active");
      }
    });
  });
}

function toHash(hash) {
  var top = $(hash)[0].offsetTop;
  $("html, body").animate({ scrollTop: top }, 1000);

  if ($("#header-mobile").length != 0) {
    $("body").removeClass("menu-open");
    $("#header-mobile .menu-cont").removeClass("open");
    $("#header-mobile #hamburguer").removeClass("open");
  }
}
