var isActive = true;
var index = 1;
var category = 1;
var slides = 0;
var isLoaded = false;

var intervals = [];
var isPlaying = false;

function clickIndicator(cat, n, dir) {
  var i;
  var slides = document.querySelectorAll(".cards .card[data-category='" + cat + "']");
  var dots = document.querySelectorAll(".indicators .ind[data-category='" + cat + "']");
  if (n > slides.length) {
    index = 1;
  }
  if (n < 1) {
    index = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].className = "card";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
    isActive = false;
  }
  slides[index - 1].className = "card active";
  dots[index - 1].className += " active";
  isActive = true;
}

function currentSlide(cat, n) {
  clickIndicator(cat, (index = n), -1);
}

var slider = document.querySelector(".cards");
var slides = document.querySelectorAll(".cards .card");

function selectCategory(cat) {
  var cat_btn = $('.category[data-category="' + cat + '"]');
  var cats_btn = $('.category');
  var window = $('.window[data-category="' + cat + '"]');
  var windows = $('.window');

  window.addClass('active');
  windows.not(window).removeClass('active');

  cat_btn.addClass('active');
  cats_btn.not(cat_btn).removeClass('active');
}


function clickIndicatorMob(cat, n, dir) {
  var i;
  var slides = document.querySelectorAll(".testemunhos-mobile .cards .card[data-category='" + cat + "']");
  var dots = document.querySelectorAll(".testemunhos-mobile .indicators .ind[data-category='" + cat + "']");
  if (n > slides.length) {
    index = 1;
  }
  if (n < 1) {
    index = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].className = "card";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
    isActive = false;
  }
  slides[index - 1].className = "card active";
  dots[index - 1].className += " active";
  isActive = true;
}

function currentSlideMob(cat, n) {
  clickIndicatorMob(cat, (index = n), -1);
}

var slider = document.querySelector(".testemunhos-mobile.cards");
var slides = document.querySelectorAll(".testemunhos-mobile.cards .card");

function selectCategoryMob(cat) {
  var cat_btn = $('.testemunhos-mobile .category[data-category="' + cat + '"]');
  var cats_btn = $('.testemunhos-mobile .category');
  var window = $('.testemunhos-mobile .window[data-category="' + cat + '"]');
  var windows = $('.testemunhos-mobile .window');

  window.addClass('active');
  windows.not(window).removeClass('active');

  cat_btn.addClass('active');
  cats_btn.not(cat_btn).removeClass('active');
}

var testemunhosMobile = $('.testemunhos-mobile');
var windowsMob = $('.testemunhos-mobile .window');
var cardsMob = $('.testemunhos-mobile .card');