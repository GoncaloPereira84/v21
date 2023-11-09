function plusSlides(n, cl, index) {
  var slideIndex = 1;
  showSlide(index, cl);

  function showSlide(n, c) {
    var i;
    var cards = $(".gallery-slider." + c + " .cont .card-group");
    var cardContainer = $(".gallery-slider." + c + " .cont");

    if (n > cards.length) {
        index = 1;
    }
    if (n < 1) {
        index = cards.length;
    }
    for (i = 0; i < cards.length; i++) {
      cards[i].className = "card-group";
    }

    cards[index - 1].className = "card-group active";
    isActive = true;

    var value = -(1 / 2) * (index - 1) * 100;
    cardContainer.css("transform", "translateX(" + value + "%)");

    if (value == 0) {
      $("." + cl + " #left-enabled").css({
        "pointer-events": "none",
        opacity: "0",
      });

      $("." + cl + " #right-disabled").css({
        "pointer-events": "none",
        opacity: "0",
      });

      $("." + cl + " #left-disabled").css({
        "pointer-events": "all",
        opacity: "1",
      });

      $("." + cl + " #right-enabled").css({
        "pointer-events": "all",
        opacity: "1",
      });
    } else {
      $("." + cl + " #left-enabled").css({
        "pointer-events": "all",
        opacity: "1",
      });

      $("." + cl + " #right-disabled").css({
        "pointer-events": "all",
        opacity: "1",
      });

      $("." + cl + " #left-disabled").css({
        "pointer-events": "none",
        opacity: "0",
      });

      $("." + cl + " #right-enabled").css({
        "pointer-events": "none",
        opacity: "0",
      });
    }
  }
}

var slideIndexS = 1;

function showSlideSingle(n) {
  var i;
  var slides = document.querySelectorAll(".noticia .card");

  if (n > slides.length) {
    slideIndexS = 1;
  }
  if (n < 1) {
    slideIndexS = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].className = "card";
  }
  slides[slideIndexS - 1].className = "card active";
}

function prevSlidesSingle(n) {
  showSlideSingle((slideIndexS -= n));
}

function plusSlidesSingle(n) {
  showSlideSingle((slideIndexS += n));
}

var cards = $('.noticia .card');

if(cards != null) {
    cards.each(function(){
        var pic = $(this);

        $(this).on('click', function(){
            $(this).toggleClass('zoom');
            $('#bg-slider').toggleClass('open');
            $('.close-pic').toggleClass('open-pic');
        })

        $('#bg-slider').on('click', function(){
            pic.removeClass('zoom');
            $('#bg-slider').removeClass('open');
            $('.close-pic').removeClass('open-pic');
        })

        $('.close-pic').on('click', function(){
            pic.removeClass('zoom');
            $('#bg-slider').removeClass('open');
            $('.close-pic').removeClass('open-pic');
        })
    });
}
