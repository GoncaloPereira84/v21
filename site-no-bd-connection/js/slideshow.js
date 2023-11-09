window.addEventListener("load", function () {
  // playAnim();
  var bg = $('.bg');
  var svg = $('.bg svg');

  bg.css('width', svg.width() + 'px');

  svg.each(function(){
    $(this).siblings().css('height', $('.bg').height() - 140 + 'px');
  })

  if(window.innerWidth <= 1366) {
    svg.each(function(){
      $(this).siblings().css('height', $(this).height() - 90 + 'px');
    })
  }

  if(window.innerWidth <= 768) {
    svg.each(function(){
      $(this).siblings().css('height', $(this).height() - 85 + 'px');
    })
  }

  if((window.innerHeight < window.innerWidth) && window.innerWidth <= 768){
    svg.each(function(){
      $(this).siblings().css('height', $(this).height() - 50 + 'px');
    })
  }
});

var slideIndex = 1;
var intervals = [];
var isPlaying = false;
var xDown = null;
var yDown = null;
var isActive = true;
var isMobile = false;

function playAnim() {
  intervals.forEach(clearInterval);

  var slider = document.querySelector(".slides");
  var wrap = document.querySelector("#slideshow .wrapper");

  wrap.addEventListener("touchstart", handleTouchStart, false);
  wrap.addEventListener("touchmove", handleTouchMove, false);

  var i = setInterval(() => {
    prevSlides(-1);
    var value = -.333333333333333333 * (slideIndex - 1) * 100;
    slider.style.transform = "translateX(" + value + "%)";

    isPlaying = true;
  }, 8000);

  setTimeout(() => {
    isPlaying = false;
  }, 8000);

  intervals.push(i);
}

function showSlide(n) {
  var i;
  var slides = document.querySelectorAll(".slides .slide");
  var dots = document.querySelectorAll(".indicators .ind");

  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].className = "slide";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
    isActive = false;
  }
  slides[slideIndex - 1].className = "slide active";
  dots[slideIndex - 1].className += " active";
  isActive = true;
  isPlaying = false;
}

function prevSlides(n) {
  isPlaying = false;
  showSlide((slideIndex -= n));
  intervals.forEach(clearInterval);
  setTimeout(() => {
    if (isPlaying == false) playAnim();
  }, 500);
}

function plusSlides(n) {
  isPlaying = false;
  showSlide((slideIndex += n));
  intervals.forEach(clearInterval);
  setTimeout(() => {
    if (isPlaying == false) playAnim();
  }, 500);
}

function currentSlide(n) {
  showSlide((slideIndex = n));
  intervals.forEach(clearInterval);

  var slider = document.querySelector(".slides");
  var wrap = document.querySelector("#slideshow .wrapper");
  wrap.removeEventListener("touchstart", handleTouchStart, false);
  wrap.removeEventListener("touchmove", handleTouchMove, false);

  var value = -.333333333333333333 * (slideIndex - 1) * 100;
  slider.style.transform = "translateX(" + value + "%)";

  setTimeout(() => {
    isPlaying = false;

    setTimeout(() => {
      wrap.addEventListener("touchstart", handleTouchStart, false);
      wrap.addEventListener("touchmove", handleTouchMove, false);

      if (isPlaying == false) playAnim();
    }, 1000);
  }, 500);
}

function getTouches(evt) {
  return evt.touches || evt.originalEvent.touches;
}

function handleTouchStart(evt) {
  const firstTouch = getTouches(evt)[0];
  xDown = firstTouch.clientX;
  yDown = firstTouch.clientY;
}

function handleTouchMove(evt) {
  if (!xDown || !yDown) {
    return;
  }

  var xUp = evt.touches[0].clientX;
  var yUp = evt.touches[0].clientY;

  var xDiff = xDown - xUp;
  var yDiff = yDown - yUp;

  var active = document.querySelector(".slides .slide.active");
  var activeDot = document.querySelector(".indicators .ind.active");
  var id = active.getAttribute("data-slide-id");
  var slider = document.querySelector(".slides");

  if (Math.abs(xDiff) > Math.abs(yDiff)) {
    /*most significant*/
    if (xDiff > 0) {
      /* left swipe */
      plusSlides(1);
      var value = -.333333333333333333 * (slideIndex - 1) * 100;
      slider.style.transform = "translateX(" + value + "%)";
    } else {
      /* right swipe */
      prevSlides(1);
      var value = -.333333333333333333 * (slideIndex - 1) * 100;
      slider.style.transform = "translateX(" + value + "%)";
    }
  }

  xDown = null;
  yDown = null;
}

// $(".slides").addClass("not-hidden");

var slideArray = [];
$(".slide").each(function () {
  slideArray.push($(this));
});
$(".slides").css("width", 100 * Object.keys(slideArray).length + "%");

window.addEventListener("resize", function () {
  var bg = $('.bg');
  var svg = $('.bg svg');

  bg.css('width', svg.width() + 'px');

  svg.each(function(){
    $(this).siblings().css('height', $('.bg').height() - 140 + 'px');
  })

  if(window.innerWidth <= 1366) {
    svg.each(function(){
      $(this).siblings().css('height', $(this).height() - 90 + 'px');
    })
  }

  if(window.innerWidth <= 768) {
    svg.each(function(){
      $(this).siblings().css('height', $(this).height() - 85 + 'px');
    })
  }

  if((window.innerHeight < window.innerWidth) && window.innerWidth <= 768){
    svg.each(function(){
      $(this).siblings().css('height', $(this).height() - 50 + 'px');
    })
  }
});
