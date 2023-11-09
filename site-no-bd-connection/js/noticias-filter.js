$("#nots-atualidade .cards .moreBox").slice(6, $(".moreBox").length).addClass('hidden');

// var op = 1;
// $('#resultado').on('keyup', function(){
// 	var centerLine = $(document).height() - $('footer').height();
// 	var divStart = $('.filters-wrapper').offset().top;
// 	var divEnd = divStart + $('.filters-wrapper').height();
// 	if(divEnd > centerLine + 50){
// 		op = op - .2;
// 		if(op < 0) op = 0;
// 		$('.filters-wrapper').css('opacity', op);
// 	} else {
// 		op = op + .2;
// 		if(op > 1) op = 1;
// 		$('.filters-wrapper').css('opacity', op);
// 	};
// })

// var centerLine = $(document).height() - $('footer').height();
// var divStart = $('.filters-wrapper').offset().top;
// var divEnd = divStart + $('.filters-wrapper').height();
// if(divEnd > centerLine + 50){
// 	op = op - .2;
// 	if(op < 0) op = 0;
// 	$('.filters-wrapper').css('opacity', op);
// } else {
// 	op = op + .2;
// 	if(op > 1) op = 1;
// 	$('.filters-wrapper').css('opacity', op);
// };

// $(window).scroll(function(){
// 	var centerLine = $(document).height() - $('footer').height();
// 	var divStart = $('.filters-wrapper').offset().top;
// 	var divEnd = divStart + $('.filters-wrapper').height();

// 	if(divEnd > centerLine + 50){
// 		op = op - .2;
// 		if(op < 0) op = 0;
// 		$('.filters-wrapper').css('opacity', op);
// 	} else {
// 		op = op + .2;
// 		if(op > 1) op = 1;
// 		$('.filters-wrapper').css('opacity', op);
// 	};
// });

if(window.innerWidth > 768){
	var totalHeight = $("#header").height();
	$(".filters-wrapper").css('top', totalHeight + "px");
	var footerHeight = $("#footer").height();
	var footerOffset = $("#footer").offset().top;
		
	var stickyTop = $('.filters-wrapper').offset().top; // returns number 

	//on load
	if (totalHeight < $(window).scrollTop()) {
		if($(window).scrollTop() > footerOffset - footerHeight + 100){
			$('.filters-wrapper').css({position: 'absolute', bottom: 0, top: 'unset' });
		} else {
			$('.filters-wrapper').css({ position: 'fixed', top: totalHeight + 15});
		}
	} else {
		$('.filters-wrapper').css({position: 'absolute', top: 0 });
	}

	//on scroll
	$(window).scroll(function(){ // scroll event  
		var windowTop = $(window).scrollTop(); // returns number
		
		if (totalHeight < windowTop) {
			if(windowTop > footerOffset - footerHeight + 100){
				$('.filters-wrapper').css({position: 'absolute', bottom: 0, top: 'unset' });
			} else {
				$('.filters-wrapper').css({ position: 'fixed', top: totalHeight + 15});
			}
		} else {
			$('.filters-wrapper').css({position: 'absolute', top: 0 });
		}
	});
}

console.log('on load');


/* ------------------------------------------------------------- */

var url_string = window.location.href; //window.location.href
var url = new URL(url_string);
var c = url.searchParams.get("categoria_id");

function searchNoticias() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("resultado");
    filter = input.value.toUpperCase();
    cards_container = document.querySelector(".cards");
    card = cards_container.querySelectorAll(".cards .card");

	var filters = $('.filter-categories label input[type="checkbox"]:not(.filter-all)');
	filters.each(function(){
		$(this).prop('checked', false);
		$('.filter-categories label .filter-all').prop('checked', true);
	})

    for (i = 0; i < card.length; i++) {
        a = card[i].getElementsByTagName("h3")[0];
        txtValue = a.textContent || a.innerText;
		// $("#nots-atualidade .cards .moreBox.selected").slice(6, $(".moreBox.selected").length).addClass('hidden');
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            card[i].classList.remove("hidden")
			card[i].classList.add("selected")
			$("#nots-atualidade .cards .moreBox.selected").slice(6, $(".moreBox.selected").length).addClass('hidden');

			var visibleCards = document.querySelectorAll('#nots-atualidade .cards .card.selected');
			// var hiddenCards = document.querySelectorAll('#nots-atualidade .cards .card.hidden');

			if(visibleCards.length < 6){
				document.querySelector('.load-more').classList.add('hide');
			} else {
				document.querySelector('.load-more').classList.remove('hide');
			}

			// if(hiddenCards.length > 0){
			// 	document.querySelector('.load-more').classList.remove('hide');
			// }
        } else {
            card[i].classList.remove("selected")
            card[i].classList.add("hidden")
			// card[i].classList.remove("selected")
			var visibleCards = $('.card.selected');

			if(visibleCards.length == 0) {
				$('.filter-no-item').addClass('filter-no-item-active');
			} else {
				$('.filter-no-item').removeClass('filter-no-item-active');
				$("#nots-atualidade .cards .moreBox.selected").slice(6, $(".moreBox.selected").length).addClass('hidden');

				var visibleCards = document.querySelectorAll('#nots-atualidade .cards .card.selected');
				// var hiddenCards = document.querySelectorAll('#nots-atualidade .cards .card.hidden');

				if(visibleCards.length < 6){
					document.querySelector('.load-more').classList.add('hide');
				} else {
					document.querySelector('.load-more').classList.remove('hide');
				}

				// if(hiddenCards.length > 0){
				// 	document.querySelector('.load-more').classList.remove('hide');
				// }
			}
        }
    }
	
	if(window.innerWidth > 768){
		setTimeout(() => {
			var totalHeight = $("#header").height();
			$(".filters-wrapper").css('top', totalHeight + "px");
			var footerHeight = $("#footer").height();
			var footerOffset = $("#footer").offset().top;
			//on load
			if (totalHeight < $(window).scrollTop()) {
				if($(window).scrollTop() > footerOffset - footerHeight){
					$('.filters-wrapper').css({position: 'absolute', bottom: 0, top: 'unset' });
				} else {
					$('.filters-wrapper').css({ position: 'fixed', top: totalHeight + 15});
				}
			} else {
				$('.filters-wrapper').css({position: 'absolute', top: 0 });
			}

			$(window).scroll(function(){ // scroll event  
				var windowTop = $(window).scrollTop(); // returns number
				
				if (totalHeight < windowTop) {
					if(windowTop > footerOffset - footerHeight + 100){
						$('.filters-wrapper').css({position: 'absolute', bottom: 0, top: 'unset' });
					} else {
						$('.filters-wrapper').css({ position: 'fixed', top: totalHeight + 15});
					}
				} else {
					$('.filters-wrapper').css({position: 'absolute', top: 0 });
				}
			});
		}, 10);
	} else {

	}
}

function addClassAll(el, cls){
	for (var i = 0; i < el.length; ++i){
		if (!el[i].className.match('(?:^|\\s)'+cls+'(?!\\S)')){ el[i].className += ' '+cls; } 
	}
}
function delClassAll(el, cls){
	for (var i = 0; i < el.length; ++i){
		el[i].className = el[i].className.replace(new RegExp('(?:^|\\s)'+cls+'(?!\\S)'),'');
	}
}

var map = Array.prototype.map;

// var filtersArray = [];

function contentFilter(filterID, filterType){  
	var id = filterID;
	var filters = document.querySelectorAll('.filter-categories label');

	if(c == null){
		map.call(filters, function(f){
			f.onclick = function(evt) { 
				evt = evt || window.event;
				var elem = evt.target || evt.srcElement, 
					wrap = document.querySelectorAll(id),
					items = document.querySelectorAll(id+' .card'),
					inputs = document.querySelectorAll('.cat-checkbox'),
					filters = [],
					noitem = document.querySelectorAll('.filter-no-item'), 
					mask = document.querySelectorAll('.filter-mask'), 
					type = filterType;
				addClassAll(mask, 'filter-mask-active');
				setTimeout(function() { delClassAll(mask, 'filter-mask-active'); }, 1000); 
				if (elem.className.match('(?:^|\\s)filter-all(?!\\S)')) { // #filter-all
					for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
						inputs[i].checked = false; // uncheck all other inputs
					}
					setTimeout(function() { 
						delClassAll(items, 'selected');
						delClassAll(items, 'hidden');
						$(id + " .moreBox").slice(6, $(id + " .moreBox").length).addClass('hidden');
						delClassAll(wrap, 'filtered-'+type); 
						delClassAll(noitem, 'filter-no-item-active'); 
					}, 500); 
				} else { // another filter is checked
					inputs[0].checked = false; // uncheck #filter-all
					for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
						if (inputs[i].checked) { filters.push(inputs[i].id); } // add checked inputs to filters array 
					}
					setTimeout(function() { 
						delClassAll(items, 'selected'); 
						addClassAll(wrap, 'filtered-'+type);  
						if (type == 'inclusive') {
							if (filters.length > 0) {
								addClassAll(document.querySelectorAll(id+' .card.'+filters.join('.')), 'selected');
	
								$(id+' .card').addClass('hidden');
								$(id+' .card.'+filters.join('.')).slice(6, $(id+' .card.'+filters.join('.')).length).addClass('hidden');
								$(id+' .card.'+filters.join('.')).slice(0, 6).removeClass('hidden');
	
								var selectedCards = document.querySelectorAll(id+' .card.selected');
	
								if(selectedCards.length > 6){
									document.querySelector('.load-more').classList.remove('hide');
								} else {
									document.querySelector('.load-more').classList.add('hide');
								}
								
							} // build css selector from filters array
							document.querySelectorAll(id+' .selected').length == 0 ? addClassAll(noitem, 'filter-no-item-active') : delClassAll(noitem, 'filter-no-item-active'); 
						} else {
							// $(id+' .artigos.'+filters.join('.')).removeClass('hidden');
						}
						var checkCount = 0;  
						for (var i = 0; i < inputs.length; ++i) {
							checkCount += inputs[i].checked ? 1 : 0; 
						}
						if (checkCount == 0) {inputs[0].checked = true;}
						if (inputs[0].checked) {
							delClassAll(wrap, 'filtered-'+type);
							delClassAll(noitem, 'filter-no-item-active');
						}
					}, 500); 
				}
			}
		});
	} else {
		var clicked = false;
		map.call(filters, function(f){
			f.onclick = function(evt) { 
				clicked = true;
				evt = evt || window.event;
				var elem = evt.target || evt.srcElement, 
					wrap = document.querySelectorAll(id),
					items = document.querySelectorAll(id+' .card'),
					inputs = document.querySelectorAll('.cat-checkbox'),
					filters = [],
					noitem = document.querySelectorAll('.filter-no-item'), 
					mask = document.querySelectorAll('.filter-mask'), 
					type = filterType,
					verMais = document.querySelector('.load-more');
				addClassAll(mask, 'filter-mask-active');
				setTimeout(function() { delClassAll(mask, 'filter-mask-active'); }, 1000); 
				if (elem.className.match('(?:^|\\s)filter-all(?!\\S)')) { // #filter-all
					for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
						inputs[i].checked = false; // uncheck all other inputs
					}
					setTimeout(function() { 
						delClassAll(items, 'selected');
						delClassAll(items, 'hidden');
						$(id + " .moreBox").slice(6, $(id + " .moreBox").length).addClass('hidden');
						delClassAll(wrap, 'filtered-'+type); 
						delClassAll(noitem, 'filter-no-item-active'); 
					}, 500); 
				} else { // another filter is checked
					inputs[0].checked = false; // uncheck #filter-all
					for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
						if (inputs[i].checked) { filters.push(inputs[i].id); } // add checked inputs to filters array 
					}
					setTimeout(function() { 
						delClassAll(items, 'selected'); 
						addClassAll(wrap, 'filtered-'+type);  
						if (type == 'inclusive') {
							if (filters.length > 0) {
								addClassAll(document.querySelectorAll(id+' .card.'+filters.join('.')), 'selected');

								$(id+' .card').addClass('hidden');
								$(id+' .card.'+filters.join('.')).slice(6, $(id+' .card.'+filters.join('.')).length).addClass('hidden');
								$(id+' .card.'+filters.join('.')).slice(0, 6).removeClass('hidden');

								var selectedCards = document.querySelectorAll(id+' .card.selected');

								if(selectedCards.length > 6){
									document.querySelector('.load-more').classList.remove('hide');
								} else {
									document.querySelector('.load-more').classList.add('hide');
								}
								
							} // build css selector from filters array
							document.querySelectorAll(id+' .selected').length == 0 ? addClassAll(noitem, 'filter-no-item-active') : delClassAll(noitem, 'filter-no-item-active'); 
						} else {
							// $(id+' .artigos.'+filters.join('.')).removeClass('hidden');
						}
						var checkCount = 0;  
						for (var i = 0; i < inputs.length; ++i) {
							checkCount += inputs[i].checked ? 1 : 0; 
							}
						if (checkCount == 0) {inputs[0].checked = true;}
						if (inputs[0].checked) {
							delClassAll(wrap, 'filtered-'+type);
							delClassAll(noitem, 'filter-no-item-active');
						}
					}, 500); 
				}
			}
		});

		if(!clicked) {
			var elem = document.querySelector('.filter-categories label#label-category-'+c),
				wrap = document.querySelectorAll(id),
				items = document.querySelectorAll(id+' .card'),
				inputs = document.querySelectorAll('.cat-checkbox'),
				filters = ['category-' + c],
				noitem = document.querySelectorAll('.filter-no-item'), 
				mask = document.querySelectorAll('.filter-mask'), 
				type = filterType;
			addClassAll(mask, 'filter-mask-active');
			setTimeout(function() { delClassAll(mask, 'filter-mask-active'); }, 1000); 
			if (elem.className.match('(?:^|\\s)filter-all(?!\\S)')) { // #filter-all
				for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
					inputs[i].checked = false; // uncheck all other inputs
				}
				setTimeout(function() { 
					delClassAll(items, 'selected');
					delClassAll(items, 'hidden');
					$(id + " .moreBox").slice(6, $(id + " .moreBox").length).addClass('hidden');
					delClassAll(wrap, 'filtered-'+type); 
					delClassAll(noitem, 'filter-no-item-active'); 
				}, 500); 
			} else { // another filter is checked
				inputs[0].checked = false; // uncheck #filter-all
				// console.log(inputs[0].checked);
				inputs[c].checked = true;
				for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
					if (inputs[i].checked) { filters.push(inputs[i].id); } // add checked inputs to filters array 
				}
				setTimeout(function() { 
					delClassAll(items, 'selected'); 
					addClassAll(wrap, 'filtered-'+type);  
					if (type == 'inclusive') {
						if (filters.length > 0) {
							addClassAll(document.querySelectorAll(id+' .card.'+filters.join('.')), 'selected');

							$(id+' .card').addClass('hidden');
							$(id+' .card.'+filters.join('.')).slice(6, $(id+' .card.'+filters.join('.')).length).addClass('hidden');
							$(id+' .card.'+filters.join('.')).slice(0, 6).removeClass('hidden');

							var selectedCards = document.querySelectorAll(id+' .card.selected');

							if(selectedCards.length > 6){
								document.querySelector('.load-more').classList.remove('hide');
							} else {
								document.querySelector('.load-more').classList.add('hide');
							}
							
						} // build css selector from filters array
						document.querySelectorAll(id+' .selected').length == 0 ? addClassAll(noitem, 'filter-no-item-active') : delClassAll(noitem, 'filter-no-item-active'); 
					} else {
						// $(id+' .artigos.'+filters.join('.')).removeClass('hidden');
					}
					var checkCount = 0;  
					for (var i = 0; i < inputs.length; ++i) {
						checkCount += inputs[i].checked ? 1 : 0; 
						}
					if (checkCount == 0) {inputs[0].checked = true;}
					if (inputs[0].checked) {
						delClassAll(wrap, 'filtered-'+type);
						delClassAll(noitem, 'filter-no-item-active');
					}
				}, 500); 
			}

			if(window.innerWidth > 768){
				setTimeout(() => {
					console.log(123);
					var totalHeight = $("#header").height();
					$(".filters-wrapper").css('top', totalHeight + "px");
					var footerHeight = $("#footer").height();
					var footerOffset = $("#footer").offset().top;
					//on load
					if (totalHeight < $(window).scrollTop()) {
						if($(window).scrollTop() > footerOffset - footerHeight){
							$('.filters-wrapper').css({position: 'absolute', bottom: 0, top: 'unset' });
						} else {
							$('.filters-wrapper').css({ position: 'fixed', top: totalHeight + 15});
						}
					} else {
						$('.filters-wrapper').css({position: 'absolute', top: 0 });
					}
		
					$(window).scroll(function(){ // scroll event  
						var windowTop = $(window).scrollTop(); // returns number
						
						if (totalHeight < windowTop) {
							if(windowTop > footerOffset - footerHeight + 100){
								$('.filters-wrapper').css({position: 'absolute', bottom: 0, top: 'unset' });
							} else {
								$('.filters-wrapper').css({ position: 'fixed', top: totalHeight + 15});
							}
						} else {
							$('.filters-wrapper').css({position: 'absolute', top: 0 });
						}
					});
				}, 500);
			} else {
	
			}
		}

		
	}
}

contentFilter('#nots-atualidade .cards', 'inclusive');

$(".check input:checkbox").on('click', function() {
	var $box = $(this);
	if ($box.is(":checked")) {
	  var group = "input:checkbox[name='" + $box.attr("name") + "']";
	  $(group).prop("checked", false);
	  $box.prop("checked", true);

	  if(window.innerWidth > 768){
		setTimeout(() => {
			var totalHeight = $("#header").height();
			$(".filters-wrapper").css('top', totalHeight + "px");
			var footerHeight = $("#footer").height();
			var footerOffset = $("#footer").offset().top;
			console.log($(window).scrollTop());
			console.log(footerOffset - footerHeight);
			//on load
			if (totalHeight < $(window).scrollTop()) {
				if($(window).scrollTop() > footerOffset - footerHeight){
					$('.filters-wrapper').css({position: 'absolute', bottom: 0, top: 'unset' });
				} else {
					$('.filters-wrapper').css({ position: 'fixed', top: totalHeight + 15});
				}
			} else {
				$('.filters-wrapper').css({position: 'absolute', top: 0 });
			}

			$(window).scroll(function(){ // scroll event  
				var windowTop = $(window).scrollTop(); // returns number
				
				if (totalHeight < windowTop) {
					if(windowTop > footerOffset - footerHeight + 100){
						$('.filters-wrapper').css({position: 'absolute', bottom: 0, top: 'unset' });
					} else {
						$('.filters-wrapper').css({ position: 'fixed', top: totalHeight + 15});
					}
				} else {
					$('.filters-wrapper').css({position: 'absolute', top: 0 });
				}
			});
		}, 1000);
	  } else {
		$('.filters-wrapper').removeClass('open');
	  }

	} else {
	  $box.prop("checked", false);
	}
});

var years = $('.years');

$('.years .year').each(function(){
	var year = $(this);
	year.click(function(e){
		e.preventDefault();
		// if(years.hasClass('open')) {
		// 	years.removeClass('open');
		// }

		if($(".year").not(this).parent().hasClass('open')) {
			$(".year").not(this).parent().removeClass('open')
			$(".year").not(this).removeClass('open')
		}

		year.parent().toggleClass('open');
		year.toggleClass('open');
	});
});

var loadMore = $('.load-more');

loadMore.on('click', function(filters){
	setTimeout(() => {
		var selectedCards = document.querySelectorAll('#nots-atualidade .cards .card.selected');

		for (i = 0; i <= selectedCards.length; i++) {
			if(i >= selectedCards.length){
				loadMore.addClass('hide');	
			} else {
				loadMore.removeClass('hide');
			}
		}

		if($('#nots-atualidade .cards .moreBox.selected.hidden').length > 0) {
			$('#nots-atualidade .cards .moreBox.selected.hidden').slice(0, 4).removeClass('hidden');
		} else {
			if($('#nots-atualidade .cards .moreBox.hidden').length > 0) {
				$('#nots-atualidade .cards .moreBox.hidden').slice(0, 4).removeClass('hidden');	

				var visibleCards = document.querySelectorAll('#nots-atualidade .cards .card:not(.hidden)');
				var hiddenCards = document.querySelectorAll('#nots-atualidade .cards .card.hidden');
		
				if(visibleCards.length < 6){
					document.querySelector('.load-more').classList.add('hide');
				}
		
				if(hiddenCards.length > 0){
					document.querySelector('.load-more').classList.remove('hide');
				}
			}
		}

		if($("#nots-atualidade .cards .hidden").length == 0) {
			loadMore.css('display', 'none');
		} else {
			loadMore.css('display', 'flex');
		}

		if(window.innerWidth > 768){
			setTimeout(() => {
				var totalHeight = $("#header").height();
				$(".filters-wrapper").css('top', totalHeight + "px");
				var footerHeight = $("#footer").height();
				var footerOffset = $("#footer").offset().top;
				//on load
				if (totalHeight < $(window).scrollTop()) {
					if($(window).scrollTop() > footerOffset - footerHeight){
						$('.filters-wrapper').css({position: 'absolute', bottom: 0, top: 'unset' });
					} else {
						$('.filters-wrapper').css({ position: 'fixed', top: totalHeight + 15});
					}
				} else {
					$('.filters-wrapper').css({position: 'absolute', top: 0 });
				}
	
				$(window).scroll(function(){ // scroll event  
					var windowTop = $(window).scrollTop(); // returns number
					
					if (totalHeight < windowTop) {
						if(windowTop > footerOffset - footerHeight + 100){
							$('.filters-wrapper').css({position: 'absolute', bottom: 0, top: 'unset' });
						} else {
							$('.filters-wrapper').css({ position: 'fixed', top: totalHeight + 15});
						}
					} else {
						$('.filters-wrapper').css({position: 'absolute', top: 0 });
					}
				});
			}, 10);
		} else {

		}
	}, 500);
})

if($("#nots-atualidade .cards .hidden").length == 0) {
	loadMore.css('display', 'none');
} else {
	loadMore.css('display', 'flex');
}

var filtersButton = $('.filters-button');
var filtersWrapper = $('.filters-wrapper');

if(filtersButton.length != 0) {
	filtersButton.on('click', function(){
		filtersWrapper.toggleClass('open');
	})
}

// $("#nots-atualidade .cards .moreBox").slice(6, $(".moreBox").length).addClass('hidden');

// // var op = 1;
// // $('#resultado').on('keyup', function(){
// // 	var centerLine = $(document).height() - $('footer').height();
// // 	var divStart = $('.filters-wrapper').offset().top;
// // 	var divEnd = divStart + $('.filters-wrapper').height();
// // 	if(divEnd > centerLine + 50){
// // 		op = op - .2;
// // 		if(op < 0) op = 0;
// // 		$('.filters-wrapper').css('opacity', op);
// // 	} else {
// // 		op = op + .2;
// // 		if(op > 1) op = 1;
// // 		$('.filters-wrapper').css('opacity', op);
// // 	};
// // })

// // var centerLine = $(document).height() - $('footer').height();
// // var divStart = $('.filters-wrapper').offset().top;
// // var divEnd = divStart + $('.filters-wrapper').height();
// // if(divEnd > centerLine + 50){
// // 	op = op - .2;
// // 	if(op < 0) op = 0;
// // 	$('.filters-wrapper').css('opacity', op);
// // } else {
// // 	op = op + .2;
// // 	if(op > 1) op = 1;
// // 	$('.filters-wrapper').css('opacity', op);
// // };

// // $(window).scroll(function(){
// // 	var centerLine = $(document).height() - $('footer').height();
// // 	var divStart = $('.filters-wrapper').offset().top;
// // 	var divEnd = divStart + $('.filters-wrapper').height();

// // 	if(divEnd > centerLine + 50){
// // 		op = op - .2;
// // 		if(op < 0) op = 0;
// // 		$('.filters-wrapper').css('opacity', op);
// // 	} else {
// // 		op = op + .2;
// // 		if(op > 1) op = 1;
// // 		$('.filters-wrapper').css('opacity', op);
// // 	};
// // });

// if(window.innerWidth > 768){
// 	var totalHeight = $("#header").height();
// 	$(".filters-wrapper").css('top', totalHeight + "px");
// 	var footerHeight = $("#footer").height();
// 	var footerOffset = $("#footer").offset().top;
		
// 	var stickyTop = $('.filters-wrapper').offset().top; // returns number 

// 	//on load
// 	if (totalHeight < $(window).scrollTop()) {
// 		if($(window).scrollTop() > footerOffset - footerHeight + 100){
// 			$('.filters-wrapper').css({position: 'absolute', bottom: 0, top: 'unset' });
// 		} else {
// 			$('.filters-wrapper').css({ position: 'fixed', top: totalHeight + 15});
// 		}
// 	} else {
// 		$('.filters-wrapper').css({position: 'absolute', top: 0 });
// 	}

// 	//on scroll
// 	$(window).scroll(function(){ // scroll event  
// 		var windowTop = $(window).scrollTop(); // returns number
		
// 		if (totalHeight < windowTop) {
// 			if(windowTop > footerOffset - footerHeight + 100){
// 				$('.filters-wrapper').css({position: 'absolute', bottom: 0, top: 'unset' });
// 			} else {
// 				$('.filters-wrapper').css({ position: 'fixed', top: totalHeight + 15});
// 			}
// 		} else {
// 			$('.filters-wrapper').css({position: 'absolute', top: 0 });
// 		}
// 	});
// }


// /* ------------------------------------------------------------- */

// var url_string = window.location.href; //window.location.href
// var url = new URL(url_string);
// var c = url.searchParams.get("categoria_id");

// function searchNoticias() {
//     var input, filter, ul, li, a, i, txtValue;
//     input = document.getElementById("resultado");
//     filter = input.value.toUpperCase();
//     cards_container = document.querySelector(".cards");
//     card = cards_container.querySelectorAll(".cards .card");

// 	var filters = $('.filter-categories label input[type="checkbox"]:not(.filter-all)');
// 	filters.each(function(){
// 		$(this).prop('checked', false);
// 		$('.filter-categories label .filter-all').prop('checked', true);
// 	})

//     for (i = 0; i < card.length; i++) {
//         a = card[i].getElementsByTagName("h3")[0];
//         txtValue = a.textContent || a.innerText;
// 		// $("#nots-atualidade .cards .moreBox.selected").slice(6, $(".moreBox.selected").length).addClass('hidden');
//         if (txtValue.toUpperCase().indexOf(filter) > -1) {
//             card[i].classList.remove("hidden")
// 			card[i].classList.add("selected")
// 			$("#nots-atualidade .cards .moreBox.selected").slice(6, $(".moreBox.selected").length).addClass('hidden');

// 			var visibleCards = document.querySelectorAll('#nots-atualidade .cards .card.selected');
// 			// var hiddenCards = document.querySelectorAll('#nots-atualidade .cards .card.hidden');

// 			if(visibleCards.length < 6){
// 				document.querySelector('.load-more').classList.add('hide');
// 			} else {
// 				document.querySelector('.load-more').classList.remove('hide');
// 			}

// 			// if(hiddenCards.length > 0){
// 			// 	document.querySelector('.load-more').classList.remove('hide');
// 			// }
//         } else {
//             card[i].classList.remove("selected")
//             card[i].classList.add("hidden")
// 			// card[i].classList.remove("selected")
// 			var visibleCards = $('.card.selected');

// 			if(visibleCards.length == 0) {
// 				$('.filter-no-item').addClass('filter-no-item-active');
// 			} else {
// 				$('.filter-no-item').removeClass('filter-no-item-active');
// 				$("#nots-atualidade .cards .moreBox.selected").slice(6, $(".moreBox.selected").length).addClass('hidden');

// 				var visibleCards = document.querySelectorAll('#nots-atualidade .cards .card.selected');
// 				// var hiddenCards = document.querySelectorAll('#nots-atualidade .cards .card.hidden');

// 				if(visibleCards.length < 6){
// 					document.querySelector('.load-more').classList.add('hide');
// 				} else {
// 					document.querySelector('.load-more').classList.remove('hide');
// 				}

// 				// if(hiddenCards.length > 0){
// 				// 	document.querySelector('.load-more').classList.remove('hide');
// 				// }
// 			}
//         }
//     }
// }

// function addClassAll(el, cls){
// 	for (var i = 0; i < el.length; ++i){
// 		if (!el[i].className.match('(?:^|\\s)'+cls+'(?!\\S)')){ el[i].className += ' '+cls; } 
// 	}
// }
// function delClassAll(el, cls){
// 	for (var i = 0; i < el.length; ++i){
// 		el[i].className = el[i].className.replace(new RegExp('(?:^|\\s)'+cls+'(?!\\S)'),'');
// 	}
// }

// var map = Array.prototype.map;

// // var filtersArray = [];

// function contentFilter(filterID, filterType){  
// 	var id = filterID;
// 	var filters = document.querySelectorAll('.filter-categories label');

// 	if(c == null){
// 		map.call(filters, function(f){
// 			f.onclick = function(evt) { 
// 				evt = evt || window.event;
// 				var elem = evt.target || evt.srcElement, 
// 					wrap = document.querySelectorAll(id),
// 					items = document.querySelectorAll(id+' .card'),
// 					inputs = document.querySelectorAll('.cat-checkbox'),
// 					filters = [],
// 					noitem = document.querySelectorAll('.filter-no-item'), 
// 					mask = document.querySelectorAll('.filter-mask'), 
// 					type = filterType;
// 				addClassAll(mask, 'filter-mask-active');
// 				setTimeout(function() { delClassAll(mask, 'filter-mask-active'); }, 1000); 
// 				if (elem.className.match('(?:^|\\s)filter-all(?!\\S)')) { // #filter-all
// 					for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
// 						inputs[i].checked = false; // uncheck all other inputs
// 					}
// 					setTimeout(function() { 
// 						delClassAll(items, 'selected');
// 						delClassAll(items, 'hidden');
// 						$(id + " .moreBox").slice(6, $(id + " .moreBox").length).addClass('hidden');
// 						delClassAll(wrap, 'filtered-'+type); 
// 						delClassAll(noitem, 'filter-no-item-active'); 
// 					}, 500); 
// 				} else { // another filter is checked
// 					inputs[0].checked = false; // uncheck #filter-all
// 					for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
// 						if (inputs[i].checked) { filters.push(inputs[i].id); } // add checked inputs to filters array 
// 					}
// 					setTimeout(function() { 
// 						delClassAll(items, 'selected'); 
// 						addClassAll(wrap, 'filtered-'+type);  
// 						if (type == 'inclusive') {
// 							if (filters.length > 0) {
// 								addClassAll(document.querySelectorAll(id+' .card.'+filters.join('.')), 'selected');
	
// 								$(id+' .card').addClass('hidden');
// 								$(id+' .card.'+filters.join('.')).slice(6, $(id+' .card.'+filters.join('.')).length).addClass('hidden');
// 								$(id+' .card.'+filters.join('.')).slice(0, 6).removeClass('hidden');
	
// 								var selectedCards = document.querySelectorAll(id+' .card.selected');
	
// 								if(selectedCards.length > 6){
// 									document.querySelector('.load-more').classList.remove('hide');
// 								} else {
// 									document.querySelector('.load-more').classList.add('hide');
// 								}
								
// 							} // build css selector from filters array
// 							document.querySelectorAll(id+' .selected').length == 0 ? addClassAll(noitem, 'filter-no-item-active') : delClassAll(noitem, 'filter-no-item-active'); 
// 						} else {
// 							// $(id+' .artigos.'+filters.join('.')).removeClass('hidden');
// 						}
// 						var checkCount = 0;  
// 						for (var i = 0; i < inputs.length; ++i) {
// 							checkCount += inputs[i].checked ? 1 : 0; 
// 						}
// 						if (checkCount == 0) {inputs[0].checked = true;}
// 						if (inputs[0].checked) {
// 							delClassAll(wrap, 'filtered-'+type);
// 							delClassAll(noitem, 'filter-no-item-active');
// 						}
// 					}, 500); 
// 				}
// 			}
// 		});
// 	} else {
// 		var clicked = false;
// 		map.call(filters, function(f){
// 			f.onclick = function(evt) { 
// 				clicked = true;
// 				evt = evt || window.event;
// 				var elem = evt.target || evt.srcElement, 
// 					wrap = document.querySelectorAll(id),
// 					items = document.querySelectorAll(id+' .card'),
// 					inputs = document.querySelectorAll('.cat-checkbox'),
// 					filters = [],
// 					noitem = document.querySelectorAll('.filter-no-item'), 
// 					mask = document.querySelectorAll('.filter-mask'), 
// 					type = filterType,
// 					verMais = document.querySelector('.load-more');
// 				addClassAll(mask, 'filter-mask-active');
// 				setTimeout(function() { delClassAll(mask, 'filter-mask-active'); }, 1000); 
// 				if (elem.className.match('(?:^|\\s)filter-all(?!\\S)')) { // #filter-all
// 					for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
// 						inputs[i].checked = false; // uncheck all other inputs
// 					}
// 					setTimeout(function() { 
// 						delClassAll(items, 'selected');
// 						delClassAll(items, 'hidden');
// 						$(id + " .moreBox").slice(6, $(id + " .moreBox").length).addClass('hidden');
// 						delClassAll(wrap, 'filtered-'+type); 
// 						delClassAll(noitem, 'filter-no-item-active'); 
// 					}, 500); 
// 				} else { // another filter is checked
// 					inputs[0].checked = false; // uncheck #filter-all
// 					for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
// 						if (inputs[i].checked) { filters.push(inputs[i].id); } // add checked inputs to filters array 
// 					}
// 					setTimeout(function() { 
// 						delClassAll(items, 'selected'); 
// 						addClassAll(wrap, 'filtered-'+type);  
// 						if (type == 'inclusive') {
// 							if (filters.length > 0) {
// 								addClassAll(document.querySelectorAll(id+' .card.'+filters.join('.')), 'selected');

// 								$(id+' .card').addClass('hidden');
// 								$(id+' .card.'+filters.join('.')).slice(6, $(id+' .card.'+filters.join('.')).length).addClass('hidden');
// 								$(id+' .card.'+filters.join('.')).slice(0, 6).removeClass('hidden');

// 								var selectedCards = document.querySelectorAll(id+' .card.selected');

// 								if(selectedCards.length > 6){
// 									document.querySelector('.load-more').classList.remove('hide');
// 								} else {
// 									document.querySelector('.load-more').classList.add('hide');
// 								}
								
// 							} // build css selector from filters array
// 							document.querySelectorAll(id+' .selected').length == 0 ? addClassAll(noitem, 'filter-no-item-active') : delClassAll(noitem, 'filter-no-item-active'); 
// 						} else {
// 							// $(id+' .artigos.'+filters.join('.')).removeClass('hidden');
// 						}
// 						var checkCount = 0;  
// 						for (var i = 0; i < inputs.length; ++i) {
// 							checkCount += inputs[i].checked ? 1 : 0; 
// 							}
// 						if (checkCount == 0) {inputs[0].checked = true;}
// 						if (inputs[0].checked) {
// 							delClassAll(wrap, 'filtered-'+type);
// 							delClassAll(noitem, 'filter-no-item-active');
// 						}
// 					}, 500); 
// 				}
// 			}
// 		});

// 		if(!clicked) {
// 			var elem = document.querySelector('.filter-categories label#label-category-'+c),
// 				wrap = document.querySelectorAll(id),
// 				items = document.querySelectorAll(id+' .card'),
// 				inputs = document.querySelectorAll('.cat-checkbox'),
// 				filters = ['category-' + c],
// 				noitem = document.querySelectorAll('.filter-no-item'), 
// 				mask = document.querySelectorAll('.filter-mask'), 
// 				type = filterType;
// 			addClassAll(mask, 'filter-mask-active');
// 			setTimeout(function() { delClassAll(mask, 'filter-mask-active'); }, 1000); 
// 			if (elem.className.match('(?:^|\\s)filter-all(?!\\S)')) { // #filter-all
// 				for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
// 					inputs[i].checked = false; // uncheck all other inputs
// 				}
// 				setTimeout(function() { 
// 					delClassAll(items, 'selected');
// 					delClassAll(items, 'hidden');
// 					$(id + " .moreBox").slice(6, $(id + " .moreBox").length).addClass('hidden');
// 					delClassAll(wrap, 'filtered-'+type); 
// 					delClassAll(noitem, 'filter-no-item-active'); 
// 				}, 500); 
// 			} else { // another filter is checked
// 				inputs[0].checked = false; // uncheck #filter-all
// 				// console.log(inputs[0].checked);
// 				inputs[c].checked = true;
// 				for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
// 					if (inputs[i].checked) { filters.push(inputs[i].id); } // add checked inputs to filters array 
// 				}
// 				setTimeout(function() { 
// 					delClassAll(items, 'selected'); 
// 					addClassAll(wrap, 'filtered-'+type);  
// 					if (type == 'inclusive') {
// 						if (filters.length > 0) {
// 							addClassAll(document.querySelectorAll(id+' .card.'+filters.join('.')), 'selected');

// 							$(id+' .card').addClass('hidden');
// 							$(id+' .card.'+filters.join('.')).slice(6, $(id+' .card.'+filters.join('.')).length).addClass('hidden');
// 							$(id+' .card.'+filters.join('.')).slice(0, 6).removeClass('hidden');

// 							var selectedCards = document.querySelectorAll(id+' .card.selected');

// 							if(selectedCards.length > 6){
// 								document.querySelector('.load-more').classList.remove('hide');
// 							} else {
// 								document.querySelector('.load-more').classList.add('hide');
// 							}
							
// 						} // build css selector from filters array
// 						document.querySelectorAll(id+' .selected').length == 0 ? addClassAll(noitem, 'filter-no-item-active') : delClassAll(noitem, 'filter-no-item-active'); 
// 					} else {
// 						// $(id+' .artigos.'+filters.join('.')).removeClass('hidden');
// 					}
// 					var checkCount = 0;  
// 					for (var i = 0; i < inputs.length; ++i) {
// 						checkCount += inputs[i].checked ? 1 : 0; 
// 						}
// 					if (checkCount == 0) {inputs[0].checked = true;}
// 					if (inputs[0].checked) {
// 						delClassAll(wrap, 'filtered-'+type);
// 						delClassAll(noitem, 'filter-no-item-active');
// 					}
// 				}, 500); 
// 			}
// 		}
// 	}
// }

// contentFilter('#nots-atualidade .cards', 'inclusive');

// $(".check input:checkbox").on('click', function() {
// 	var $box = $(this);
// 	if ($box.is(":checked")) {
// 	  var group = "input:checkbox[name='" + $box.attr("name") + "']";
// 	  $(group).prop("checked", false);
// 	  $box.prop("checked", true);

// 	  if(window.innerWidth > 768){
// 		setTimeout(() => {
// 			var totalHeight = $("#header").height();
// 			$(".filters-wrapper").css('top', totalHeight + "px");
// 			var footerHeight = $("#footer").height();
// 			var footerOffset = $("#footer").offset().top;
// 			console.log($(window).scrollTop());
// 			console.log(footerOffset - footerHeight);
// 			//on load
// 			if (totalHeight < $(window).scrollTop()) {
// 				if($(window).scrollTop() > footerOffset - footerHeight){
// 					$('.filters-wrapper').css({position: 'absolute', bottom: 0, top: 'unset' });
// 				} else {
// 					$('.filters-wrapper').css({ position: 'fixed', top: totalHeight + 15});
// 				}
// 			} else {
// 				$('.filters-wrapper').css({position: 'absolute', top: 0 });
// 			}

// 			$(window).scroll(function(){ // scroll event  
// 				var windowTop = $(window).scrollTop(); // returns number
				
// 				if (totalHeight < windowTop) {
// 					if(windowTop > footerOffset - footerHeight + 100){
// 						$('.filters-wrapper').css({position: 'absolute', bottom: 0, top: 'unset' });
// 					} else {
// 						$('.filters-wrapper').css({ position: 'fixed', top: totalHeight + 15});
// 					}
// 				} else {
// 					$('.filters-wrapper').css({position: 'absolute', top: 0 });
// 				}
// 			});
// 		}, 1000);
// 	  } else {
// 		$('.filters-wrapper').removeClass('open');
// 	  }

// 	} else {
// 	  $box.prop("checked", false);
// 	}
// });

// var years = $('.years');

// $('.years .year').each(function(){
// 	var year = $(this);
// 	year.click(function(e){
// 		e.preventDefault();
// 		// if(years.hasClass('open')) {
// 		// 	years.removeClass('open');
// 		// }

// 		if($(".year").not(this).parent().hasClass('open')) {
// 			$(".year").not(this).parent().removeClass('open')
// 			$(".year").not(this).removeClass('open')
// 		}

// 		year.parent().toggleClass('open');
// 		year.toggleClass('open');
// 	});
// });

// var loadMore = $('.load-more');

// loadMore.on('click', function(filters){
// 	setTimeout(() => {
// 		var selectedCards = document.querySelectorAll('#nots-atualidade .cards .card.selected');

// 		for (i = 0; i <= selectedCards.length; i++) {
// 			console.log(selectedCards.length);
// 			console.log(i);
// 			if(i >= selectedCards.length){
// 				loadMore.addClass('hide');	
// 			} else {
// 				loadMore.removeClass('hide');
// 			}
// 		}

// 		if($('#nots-atualidade .cards .moreBox.selected.hidden').length > 0) {
// 			$('#nots-atualidade .cards .moreBox.selected.hidden').slice(0, 4).removeClass('hidden');
// 		} else {
// 			if($('#nots-atualidade .cards .moreBox.hidden').length > 0) {
// 				$('#nots-atualidade .cards .moreBox.hidden').slice(0, 4).removeClass('hidden');	

// 				var visibleCards = document.querySelectorAll('#nots-atualidade .cards .card:not(.hidden)');
// 				var hiddenCards = document.querySelectorAll('#nots-atualidade .cards .card.hidden');
		
// 				if(visibleCards.length < 6){
// 					document.querySelector('.load-more').classList.add('hide');
// 				}
		
// 				if(hiddenCards.length > 0){
// 					document.querySelector('.load-more').classList.remove('hide');
// 				}
// 			}
// 		}

// 		if($("#nots-atualidade .cards .hidden").length == 0) {
// 			loadMore.css('display', 'none');
// 		} else {
// 			loadMore.css('display', 'flex');
// 		}
// 	}, 500);
// })

// if($("#nots-atualidade .cards .hidden").length == 0) {
// 	loadMore.css('display', 'none');
// } else {
// 	loadMore.css('display', 'flex');
// }

// var filtersButton = $('.filters-button');
// var filtersWrapper = $('.filters-wrapper');

// if(filtersButton.length != 0) {
// 	filtersButton.on('click', function(){
// 		filtersWrapper.toggleClass('open');
// 	})
// }

// // $("#nots-atualidade .cards .moreBox").slice(6, $(".moreBox").length).addClass('hidden');

// // var op = 1;
// // $('#resultado').on('keyup', function(){
// // 	var centerLine = $(document).height() - $('footer').height();
// // 	var divStart = $('.filters-wrapper').offset().top;
// // 	var divEnd = divStart + $('.filters-wrapper').height();
// // 	if(divEnd > centerLine + 50){
// // 		op = op - .2;
// // 		if(op < 0) op = 0;
// // 		$('.filters-wrapper').css('opacity', op);
// // 	} else {
// // 		op = op + .2;
// // 		if(op > 1) op = 1;
// // 		$('.filters-wrapper').css('opacity', op);
// // 	};
// // })

// // var centerLine = $(document).height() - $('footer').height();
// // var divStart = $('.filters-wrapper').offset().top;
// // var divEnd = divStart + $('.filters-wrapper').height();
// // if(divEnd > centerLine + 50){
// // 	op = op - .2;
// // 	if(op < 0) op = 0;
// // 	$('.filters-wrapper').css('opacity', op);
// // } else {
// // 	op = op + .2;
// // 	if(op > 1) op = 1;
// // 	$('.filters-wrapper').css('opacity', op);
// // };

// // $(window).scroll(function(){
// // 	var centerLine = $(document).height() - $('footer').height();
// // 	var divStart = $('.filters-wrapper').offset().top;
// // 	var divEnd = divStart + $('.filters-wrapper').height();

// // 	if(divEnd > centerLine + 50){
// // 		op = op - .2;
// // 		if(op < 0) op = 0;
// // 		$('.filters-wrapper').css('opacity', op);
// // 	} else {
// // 		op = op + .2;
// // 		if(op > 1) op = 1;
// // 		$('.filters-wrapper').css('opacity', op);
// // 	};
// // });

// // var url_string = window.location.href; //window.location.href
// // var url = new URL(url_string);
// // var c = url.searchParams.get("categoria_id");

// // function searchNoticias() {
// //     var input, filter, ul, li, a, i, txtValue;
// //     input = document.getElementById("resultado");
// //     filter = input.value.toUpperCase();
// //     cards_container = document.querySelector(".cards");
// //     card = cards_container.querySelectorAll(".cards .card");

// // 	var filters = $('.filter-categories label input[type="checkbox"]:not(.filter-all)');
// // 	filters.each(function(){
// // 		$(this).prop('checked', false);
// // 		$('.filter-categories label .filter-all').prop('checked', true);
// // 	})

// //     for (i = 0; i < card.length; i++) {
// //         a = card[i].getElementsByTagName("h3")[0];
// //         txtValue = a.textContent || a.innerText;
// // 		// $("#nots-atualidade .cards .moreBox.selected").slice(6, $(".moreBox.selected").length).addClass('hidden');
// //         if (txtValue.toUpperCase().indexOf(filter) > -1) {
// //             card[i].classList.remove("hidden")
// // 			card[i].classList.add("selected")
// // 			$("#nots-atualidade .cards .moreBox.selected").slice(6, $(".moreBox.selected").length).addClass('hidden');

// // 			var visibleCards = document.querySelectorAll('#nots-atualidade .cards .card.selected');
// // 			// var hiddenCards = document.querySelectorAll('#nots-atualidade .cards .card.hidden');

// // 			if(visibleCards.length < 6){
// // 				document.querySelector('.load-more').classList.add('hide');
// // 			} else {
// // 				document.querySelector('.load-more').classList.remove('hide');
// // 			}

// // 			// if(hiddenCards.length > 0){
// // 			// 	document.querySelector('.load-more').classList.remove('hide');
// // 			// }
// //         } else {
// //             card[i].classList.remove("selected")
// //             card[i].classList.add("hidden")
// // 			// card[i].classList.remove("selected")
// // 			var visibleCards = $('.card.selected');

// // 			if(visibleCards.length == 0) {
// // 				$('.filter-no-item').addClass('filter-no-item-active');
// // 			} else {
// // 				$('.filter-no-item').removeClass('filter-no-item-active');
// // 				$("#nots-atualidade .cards .moreBox.selected").slice(6, $(".moreBox.selected").length).addClass('hidden');

// // 				var visibleCards = document.querySelectorAll('#nots-atualidade .cards .card.selected');
// // 				// var hiddenCards = document.querySelectorAll('#nots-atualidade .cards .card.hidden');

// // 				if(visibleCards.length < 6){
// // 					document.querySelector('.load-more').classList.add('hide');
// // 				} else {
// // 					document.querySelector('.load-more').classList.remove('hide');
// // 				}

// // 				// if(hiddenCards.length > 0){
// // 				// 	document.querySelector('.load-more').classList.remove('hide');
// // 				// }
// // 			}
// //         }
// //     }
// // }

// // function addClassAll(el, cls){
// // 	for (var i = 0; i < el.length; ++i){
// // 		if (!el[i].className.match('(?:^|\\s)'+cls+'(?!\\S)')){ el[i].className += ' '+cls; } 
// // 	}
// // }
// // function delClassAll(el, cls){
// // 	for (var i = 0; i < el.length; ++i){
// // 		el[i].className = el[i].className.replace(new RegExp('(?:^|\\s)'+cls+'(?!\\S)'),'');
// // 	}
// // }

// // var map = Array.prototype.map;

// // // var filtersArray = [];

// // function contentFilter(filterID, filterType){  
// // 	var id = filterID;
// // 	var filters = document.querySelectorAll('.filter-categories label');

// // 	if(c == null){
// // 		map.call(filters, function(f){
// // 			f.onclick = function(evt) { 
// // 				evt = evt || window.event;
// // 				var elem = evt.target || evt.srcElement, 
// // 					wrap = document.querySelectorAll(id),
// // 					items = document.querySelectorAll(id+' .card'),
// // 					inputs = document.querySelectorAll('.cat-checkbox'),
// // 					filters = [],
// // 					noitem = document.querySelectorAll('.filter-no-item'), 
// // 					mask = document.querySelectorAll('.filter-mask'), 
// // 					type = filterType;
// // 				addClassAll(mask, 'filter-mask-active');
// // 				setTimeout(function() { delClassAll(mask, 'filter-mask-active'); }, 1000); 
// // 				if (elem.className.match('(?:^|\\s)filter-all(?!\\S)')) { // #filter-all
// // 					for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
// // 						inputs[i].checked = false; // uncheck all other inputs
// // 					}
// // 					setTimeout(function() { 
// // 						delClassAll(items, 'selected');
// // 						delClassAll(items, 'hidden');
// // 						$(id + " .moreBox").slice(6, $(id + " .moreBox").length).addClass('hidden');
// // 						delClassAll(wrap, 'filtered-'+type); 
// // 						delClassAll(noitem, 'filter-no-item-active'); 
// // 					}, 500); 
// // 				} else { // another filter is checked
// // 					inputs[0].checked = false; // uncheck #filter-all
// // 					for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
// // 						if (inputs[i].checked) { filters.push(inputs[i].id); } // add checked inputs to filters array 
// // 					}
// // 					setTimeout(function() { 
// // 						delClassAll(items, 'selected'); 
// // 						addClassAll(wrap, 'filtered-'+type);  
// // 						if (type == 'inclusive') {
// // 							if (filters.length > 0) {
// // 								addClassAll(document.querySelectorAll(id+' .card.'+filters.join('.')), 'selected');
	
// // 								$(id+' .card').addClass('hidden');
// // 								$(id+' .card.'+filters.join('.')).slice(6, $(id+' .card.'+filters.join('.')).length).addClass('hidden');
// // 								$(id+' .card.'+filters.join('.')).slice(0, 6).removeClass('hidden');
	
// // 								var selectedCards = document.querySelectorAll(id+' .card.selected');
	
// // 								if(selectedCards.length > 6){
// // 									document.querySelector('.load-more').classList.remove('hide');
// // 								} else {
// // 									document.querySelector('.load-more').classList.add('hide');
// // 								}
								
// // 							} // build css selector from filters array
// // 							document.querySelectorAll(id+' .selected').length == 0 ? addClassAll(noitem, 'filter-no-item-active') : delClassAll(noitem, 'filter-no-item-active'); 
// // 						} else {
// // 							// $(id+' .artigos.'+filters.join('.')).removeClass('hidden');
// // 						}
// // 						var checkCount = 0;  
// // 						for (var i = 0; i < inputs.length; ++i) {
// // 							checkCount += inputs[i].checked ? 1 : 0; 
// // 						}
// // 						if (checkCount == 0) {inputs[0].checked = true;}
// // 						if (inputs[0].checked) {
// // 							delClassAll(wrap, 'filtered-'+type);
// // 							delClassAll(noitem, 'filter-no-item-active');
// // 						}
// // 					}, 500); 
// // 				}
// // 			}
// // 		});
// // 	} else {
// // 		var clicked = false;
// // 		map.call(filters, function(f){
// // 			f.onclick = function(evt) { 
// // 				clicked = true;
// // 				evt = evt || window.event;
// // 				var elem = evt.target || evt.srcElement, 
// // 					wrap = document.querySelectorAll(id),
// // 					items = document.querySelectorAll(id+' .card'),
// // 					inputs = document.querySelectorAll('.cat-checkbox'),
// // 					filters = [],
// // 					noitem = document.querySelectorAll('.filter-no-item'), 
// // 					mask = document.querySelectorAll('.filter-mask'), 
// // 					type = filterType,
// // 					verMais = document.querySelector('.load-more');
// // 				addClassAll(mask, 'filter-mask-active');
// // 				setTimeout(function() { delClassAll(mask, 'filter-mask-active'); }, 1000); 
// // 				if (elem.className.match('(?:^|\\s)filter-all(?!\\S)')) { // #filter-all
// // 					for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
// // 						inputs[i].checked = false; // uncheck all other inputs
// // 					}
// // 					setTimeout(function() { 
// // 						delClassAll(items, 'selected');
// // 						delClassAll(items, 'hidden');
// // 						$(id + " .moreBox").slice(6, $(id + " .moreBox").length).addClass('hidden');
// // 						delClassAll(wrap, 'filtered-'+type); 
// // 						delClassAll(noitem, 'filter-no-item-active'); 
// // 					}, 500); 
// // 				} else { // another filter is checked
// // 					inputs[0].checked = false; // uncheck #filter-all
// // 					for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
// // 						if (inputs[i].checked) { filters.push(inputs[i].id); } // add checked inputs to filters array 
// // 					}
// // 					setTimeout(function() { 
// // 						delClassAll(items, 'selected'); 
// // 						addClassAll(wrap, 'filtered-'+type);  
// // 						if (type == 'inclusive') {
// // 							if (filters.length > 0) {
// // 								addClassAll(document.querySelectorAll(id+' .card.'+filters.join('.')), 'selected');

// // 								$(id+' .card').addClass('hidden');
// // 								$(id+' .card.'+filters.join('.')).slice(6, $(id+' .card.'+filters.join('.')).length).addClass('hidden');
// // 								$(id+' .card.'+filters.join('.')).slice(0, 6).removeClass('hidden');

// // 								var selectedCards = document.querySelectorAll(id+' .card.selected');

// // 								if(selectedCards.length > 6){
// // 									document.querySelector('.load-more').classList.remove('hide');
// // 								} else {
// // 									document.querySelector('.load-more').classList.add('hide');
// // 								}
								
// // 							} // build css selector from filters array
// // 							document.querySelectorAll(id+' .selected').length == 0 ? addClassAll(noitem, 'filter-no-item-active') : delClassAll(noitem, 'filter-no-item-active'); 
// // 						} else {
// // 							// $(id+' .artigos.'+filters.join('.')).removeClass('hidden');
// // 						}
// // 						var checkCount = 0;  
// // 						for (var i = 0; i < inputs.length; ++i) {
// // 							checkCount += inputs[i].checked ? 1 : 0; 
// // 							}
// // 						if (checkCount == 0) {inputs[0].checked = true;}
// // 						if (inputs[0].checked) {
// // 							delClassAll(wrap, 'filtered-'+type);
// // 							delClassAll(noitem, 'filter-no-item-active');
// // 						}
// // 					}, 500); 
// // 				}
// // 			}
// // 		});

// // 		if(!clicked) {
// // 			var elem = document.querySelector('.filter-categories label#label-category-'+c),
// // 				wrap = document.querySelectorAll(id),
// // 				items = document.querySelectorAll(id+' .card'),
// // 				inputs = document.querySelectorAll('.cat-checkbox'),
// // 				filters = ['category-' + c],
// // 				noitem = document.querySelectorAll('.filter-no-item'), 
// // 				mask = document.querySelectorAll('.filter-mask'), 
// // 				type = filterType;
// // 			addClassAll(mask, 'filter-mask-active');
// // 			setTimeout(function() { delClassAll(mask, 'filter-mask-active'); }, 1000); 
// // 			if (elem.className.match('(?:^|\\s)filter-all(?!\\S)')) { // #filter-all
// // 				for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
// // 					inputs[i].checked = false; // uncheck all other inputs
// // 				}
// // 				setTimeout(function() { 
// // 					delClassAll(items, 'selected');
// // 					delClassAll(items, 'hidden');
// // 					$(id + " .moreBox").slice(6, $(id + " .moreBox").length).addClass('hidden');
// // 					delClassAll(wrap, 'filtered-'+type); 
// // 					delClassAll(noitem, 'filter-no-item-active'); 
// // 				}, 500); 
// // 			} else { // another filter is checked
// // 				inputs[0].checked = false; // uncheck #filter-all
// // 				// console.log(inputs[0].checked);
// // 				inputs[c].checked = true;
// // 				for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
// // 					if (inputs[i].checked) { filters.push(inputs[i].id); } // add checked inputs to filters array 
// // 				}
// // 				setTimeout(function() { 
// // 					delClassAll(items, 'selected'); 
// // 					addClassAll(wrap, 'filtered-'+type);  
// // 					if (type == 'inclusive') {
// // 						if (filters.length > 0) {
// // 							addClassAll(document.querySelectorAll(id+' .card.'+filters.join('.')), 'selected');

// // 							$(id+' .card').addClass('hidden');
// // 							$(id+' .card.'+filters.join('.')).slice(6, $(id+' .card.'+filters.join('.')).length).addClass('hidden');
// // 							$(id+' .card.'+filters.join('.')).slice(0, 6).removeClass('hidden');

// // 							var selectedCards = document.querySelectorAll(id+' .card.selected');

// // 							if(selectedCards.length > 6){
// // 								document.querySelector('.load-more').classList.remove('hide');
// // 							} else {
// // 								document.querySelector('.load-more').classList.add('hide');
// // 							}
							
// // 						} // build css selector from filters array
// // 						document.querySelectorAll(id+' .selected').length == 0 ? addClassAll(noitem, 'filter-no-item-active') : delClassAll(noitem, 'filter-no-item-active'); 
// // 					} else {
// // 						// $(id+' .artigos.'+filters.join('.')).removeClass('hidden');
// // 					}
// // 					var checkCount = 0;  
// // 					for (var i = 0; i < inputs.length; ++i) {
// // 						checkCount += inputs[i].checked ? 1 : 0; 
// // 						}
// // 					if (checkCount == 0) {inputs[0].checked = true;}
// // 					if (inputs[0].checked) {
// // 						delClassAll(wrap, 'filtered-'+type);
// // 						delClassAll(noitem, 'filter-no-item-active');
// // 					}
// // 				}, 500); 
// // 			}
// // 		}
// // 	}
// // }

// // contentFilter('#nots-atualidade .cards', 'inclusive');

// // $(".check input:checkbox").on('click', function() {
// // 	var $box = $(this);
// // 	if ($box.is(":checked")) {
// // 	  var group = "input:checkbox[name='" + $box.attr("name") + "']";
// // 	  $(group).prop("checked", false);
// // 	  $box.prop("checked", true);
// // 	} else {
// // 	  $box.prop("checked", false);
// // 	}
// // });

// // var years = $('.years');

// // $('.years .year').each(function(){
// // 	var year = $(this);
// // 	year.click(function(e){
// // 		e.preventDefault();
// // 		if(years.hasClass('open')) years.removeClass('open');
// // 		year.parent().addClass('open');
// // 	});
// // });

// // var loadMore = $('.load-more');

// // loadMore.on('click', function(filters){
// // 	setTimeout(() => {
// // 		var selectedCards = document.querySelectorAll('#nots-atualidade .cards .card.selected');

// // 		for (i = 0; i <= selectedCards.length; i++) {
// // 			console.log(selectedCards.length);
// // 			console.log(i);
// // 			if(i >= selectedCards.length){
// // 				loadMore.addClass('hide');	
// // 			} else {
// // 				loadMore.removeClass('hide');
// // 			}
// // 		}

// // 		if($('#nots-atualidade .cards .moreBox.selected.hidden').length > 0) {
// // 			$('#nots-atualidade .cards .moreBox.selected.hidden').slice(0, 4).removeClass('hidden');
// // 		} else {
// // 			if($('#nots-atualidade .cards .moreBox.hidden').length > 0) {
// // 				$('#nots-atualidade .cards .moreBox.hidden').slice(0, 4).removeClass('hidden');	

// // 				var visibleCards = document.querySelectorAll('#nots-atualidade .cards .card:not(.hidden)');
// // 				var hiddenCards = document.querySelectorAll('#nots-atualidade .cards .card.hidden');
		
// // 				if(visibleCards.length < 6){
// // 					document.querySelector('.load-more').classList.add('hide');
// // 				}
		
// // 				if(hiddenCards.length > 0){
// // 					document.querySelector('.load-more').classList.remove('hide');
// // 				}
// // 			}
// // 		}

// // 		if($("#nots-atualidade .cards .hidden").length == 0) {
// // 			loadMore.css('display', 'none');
// // 		} else {
// // 			loadMore.css('display', 'flex');
// // 		}
// // 	}, 500);
// // })

// // if($("#nots-atualidade .cards .hidden").length == 0) {
// // 	loadMore.css('display', 'none');
// // } else {
// // 	loadMore.css('display', 'flex');
// // }

// // var filtersButton = $('.filters-button');
// // var filtersWrapper = $('.filters-wrapper');

// // if(filtersButton.length != 0) {
// // 	filtersButton.on('click', function(){
// // 		filtersWrapper.toggleClass('open');
// // 	})
// // }

// // // $("#nots-atualidade .cards .moreBox").slice(6, $(".moreBox").length).addClass('hidden');

// // // // $(document).on('scroll', function() {
// // // // 	var footer = $('footer');
// // // // 	var footerHeight = footer.height();
// // // // 	var bodyScroll = $(document).scrollTop();

// // // // 	if(footerHeight > bodyScroll - $('.filters-wrapper').height() - 50) {
// // // // 		$('.filters-wrapper').removeClass('bottom');
// // // // 	} else {
// // // // 		$('.filters-wrapper').addClass('bottom');
// // // // 	}
// // // // });

// // // // var footer = $('footer');
// // // // var footerHeight = footer.height();
// // // // var bodyScroll = $(document).scrollTop();

// // // // if(footerHeight > bodyScroll - $('.filters-wrapper').height() - 50) {
// // // // 	$('.filters-wrapper').removeClass('bottom');
// // // // } else {
// // // // 	$('.filters-wrapper').addClass('bottom');
// // // // }

// // // // $('#resultado').on('keyup', function(){
// // // // 	var footer = $('footer');
// // // // 	var footerHeight = footer.height();
// // // // 	var bodyScroll = $(document).scrollTop();

// // // // 	if(footerHeight > bodyScroll - $('.filters-wrapper').height() - 50) {
// // // // 		$('.filters-wrapper').removeClass('bottom');
// // // // 	} else {
// // // // 		$('.filters-wrapper').addClass('bottom');
// // // // 	}
// // // // })

// // // var op = 1;
// // // $('#resultado').on('keyup', function(){
// // // 	var centerLine = $(document).height() - $('footer').height();
// // // 	var divStart = $('.filters-wrapper').offset().top;
// // // 	var divEnd = divStart + $('.filters-wrapper').height();
// // // 	if(divEnd > centerLine + 50){
// // // 		op = op - .2;
// // // 		if(op < 0) op = 0;
// // // 		$('.filters-wrapper').css('opacity', op);
// // // 	} else {
// // // 		op = op + .2;
// // // 		if(op > 1) op = 1;
// // // 		$('.filters-wrapper').css('opacity', op);
// // // 	};
// // // })

// // // var centerLine = $(document).height() - $('footer').height();
// // // var divStart = $('.filters-wrapper').offset().top;
// // // var divEnd = divStart + $('.filters-wrapper').height();
// // // if(divEnd > centerLine + 50){
// // // 	op = op - .2;
// // // 	if(op < 0) op = 0;
// // // 	$('.filters-wrapper').css('opacity', op);
// // // } else {
// // // 	op = op + .2;
// // // 	if(op > 1) op = 1;
// // // 	$('.filters-wrapper').css('opacity', op);
// // // };

// // // $(window).scroll(function(){
// // // 	var centerLine = $(document).height() - $('footer').height();
// // // 	var divStart = $('.filters-wrapper').offset().top;
// // // 	var divEnd = divStart + $('.filters-wrapper').height();

// // // 	if(divEnd > centerLine + 50){
// // // 		op = op - .2;
// // // 		if(op < 0) op = 0;
// // // 		$('.filters-wrapper').css('opacity', op);
// // // 	} else {
// // // 		op = op + .2;
// // // 		if(op > 1) op = 1;
// // // 		$('.filters-wrapper').css('opacity', op);
// // // 	};
// // // });

// // // var url_string = window.location.href; //window.location.href
// // // var url = new URL(url_string);
// // // var c = url.searchParams.get("categoria_id");

// // // function searchNoticias() {
// // //     var input, filter, ul, li, a, i, txtValue;
// // //     input = document.getElementById("resultado");
// // //     filter = input.value.toUpperCase();
// // //     cards_container = document.querySelector(".cards");
// // //     card = cards_container.querySelectorAll(".cards .card");

// // // 	var filters = $('.filter-categories label input[type="checkbox"]:not(.filter-all)');
// // // 	filters.each(function(){
// // // 		$(this).prop('checked', false);
// // // 		$('.filter-categories label .filter-all').prop('checked', true);
// // // 	})

// // //     for (i = 0; i < card.length; i++) {
// // //         a = card[i].getElementsByTagName("h3")[0];
// // //         txtValue = a.textContent || a.innerText;
// // // 		// $("#nots-atualidade .cards .moreBox.selected").slice(6, $(".moreBox.selected").length).addClass('hidden');
// // //         if (txtValue.toUpperCase().indexOf(filter) > -1) {
// // //             card[i].classList.remove("hidden")
// // // 			card[i].classList.add("selected")
// // // 			$("#nots-atualidade .cards .moreBox.selected").slice(6, $(".moreBox.selected").length).addClass('hidden');

// // // 			var visibleCards = document.querySelectorAll('#nots-atualidade .cards .card.selected');
// // // 			// var hiddenCards = document.querySelectorAll('#nots-atualidade .cards .card.hidden');

// // // 			if(visibleCards.length < 6){
// // // 				document.querySelector('.load-more').classList.add('hide');
// // // 			} else {
// // // 				document.querySelector('.load-more').classList.remove('hide');
// // // 			}

// // // 			// if(hiddenCards.length > 0){
// // // 			// 	document.querySelector('.load-more').classList.remove('hide');
// // // 			// }
// // //         } else {
// // //             card[i].classList.remove("selected")
// // //             card[i].classList.add("hidden")
// // // 			// card[i].classList.remove("selected")
// // // 			var visibleCards = $('.card.selected');

// // // 			if(visibleCards.length == 0) {
// // // 				$('.filter-no-item').addClass('filter-no-item-active');
// // // 			} else {
// // // 				$('.filter-no-item').removeClass('filter-no-item-active');
// // // 				$("#nots-atualidade .cards .moreBox.selected").slice(6, $(".moreBox.selected").length).addClass('hidden');

// // // 				var visibleCards = document.querySelectorAll('#nots-atualidade .cards .card.selected');
// // // 				// var hiddenCards = document.querySelectorAll('#nots-atualidade .cards .card.hidden');

// // // 				if(visibleCards.length < 6){
// // // 					document.querySelector('.load-more').classList.add('hide');
// // // 				} else {
// // // 					document.querySelector('.load-more').classList.remove('hide');
// // // 				}

// // // 				// if(hiddenCards.length > 0){
// // // 				// 	document.querySelector('.load-more').classList.remove('hide');
// // // 				// }
// // // 			}
// // //         }
// // //     }
// // // }

// // // function addClassAll(el, cls){
// // // 	for (var i = 0; i < el.length; ++i){
// // // 		if (!el[i].className.match('(?:^|\\s)'+cls+'(?!\\S)')){ el[i].className += ' '+cls; } 
// // // 	}
// // // }
// // // function delClassAll(el, cls){
// // // 	for (var i = 0; i < el.length; ++i){
// // // 		el[i].className = el[i].className.replace(new RegExp('(?:^|\\s)'+cls+'(?!\\S)'),'');
// // // 	}
// // // }

// // // var map = Array.prototype.map;

// // // var filtersArray = [];

// // // function contentFilter(filterID, filterType){  
// // // 	var id = filterID;
// // // 	var filters = document.querySelectorAll('.filter-categories label');
// // // 	map.call(filters, function(f){
// // // 		f.onclick = function(evt) { 
// // // 			evt = evt || window.event;
// // // 			var elem = evt.target || evt.srcElement, 
// // // 				wrap = document.querySelectorAll(id),
// // // 				items = document.querySelectorAll(id+' .card'),
// // // 				inputs = document.querySelectorAll('.cat-checkbox'),
// // // 				filters = [],
// // // 				noitem = document.querySelectorAll('.filter-no-item'), 
// // // 				mask = document.querySelectorAll('.filter-mask'), 
// // // 				type = filterType;
// // // 			addClassAll(mask, 'filter-mask-active');
// // // 			setTimeout(function() { delClassAll(mask, 'filter-mask-active'); }, 1000); 
// // // 			if (elem.className.match('(?:^|\\s)filter-all(?!\\S)')) { // #filter-all
// // // 				for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
// // // 					inputs[i].checked = false; // uncheck all other inputs
// // // 				}
// // // 				setTimeout(function() { 
// // // 					delClassAll(items, 'selected');
// // // 					delClassAll(items, 'hidden');
// // // 					$(id + " .moreBox").slice(6, $(id + " .moreBox").length).addClass('hidden');
// // // 					delClassAll(wrap, 'filtered-'+type); 
// // // 					delClassAll(noitem, 'filter-no-item-active'); 
// // // 				}, 500); 
// // // 			} else { // another filter is checked
// // // 				inputs[0].checked = false; // uncheck #filter-all
// // // 				for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
// // // 					if (inputs[i].checked) { filters.push(inputs[i].id); } // add checked inputs to filters array 
// // // 				}
// // // 				setTimeout(function() { 
// // // 					delClassAll(items, 'selected'); 
// // // 					addClassAll(wrap, 'filtered-'+type);  
// // // 					if (type == 'inclusive') {
// // // 						if (filters.length > 0) {
// // // 							addClassAll(document.querySelectorAll(id+' .card.'+filters.join('.')), 'selected');

// // // 							$(id+' .card').addClass('hidden');
// // // 							$(id+' .card.'+filters.join('.')).slice(6, $(id+' .card.'+filters.join('.')).length).addClass('hidden');
// // // 							$(id+' .card.'+filters.join('.')).slice(0, 6).removeClass('hidden');

// // // 							var selectedCards = document.querySelectorAll(id+' .card.selected');

// // // 							if(selectedCards.length > 6){
// // // 								document.querySelector('.load-more').classList.remove('hide');
// // // 							} else {
// // // 								document.querySelector('.load-more').classList.add('hide');
// // // 							}
							
// // // 						} // build css selector from filters array
// // // 						document.querySelectorAll(id+' .selected').length == 0 ? addClassAll(noitem, 'filter-no-item-active') : delClassAll(noitem, 'filter-no-item-active'); 
// // // 					} else {
// // // 						// $(id+' .artigos.'+filters.join('.')).removeClass('hidden');
// // // 					}
// // // 					var checkCount = 0;  
// // // 					for (var i = 0; i < inputs.length; ++i) {
// // // 						checkCount += inputs[i].checked ? 1 : 0; 
// // // 						}
// // // 					if (checkCount == 0) {inputs[0].checked = true;}
// // // 					if (inputs[0].checked) {
// // // 						delClassAll(wrap, 'filtered-'+type);
// // // 						delClassAll(noitem, 'filter-no-item-active');
// // // 					}
// // // 				}, 500); 
// // // 			}
// // // 		}
// // // 	});
// // // }

// // // contentFilter('#nots-atualidade .cards', 'inclusive');

// // // $(".check input:checkbox").on('click', function() {
// // // 	var $box = $(this);
// // // 	console.log($box);
// // // 	if ($box.is(":checked")) {
// // // 	  var group = "input:checkbox[name='" + $box.attr("name") + "']";
// // // 	  $(group).prop("checked", false);
// // // 	  $box.prop("checked", true);
// // // 	} else {
// // // 	  $box.prop("checked", false);
// // // 	}
// // // });

// // // var years = $('.years');

// // // $('.years .year').each(function(){
// // // 	var year = $(this);
// // // 	year.click(function(e){
// // // 		e.preventDefault();
// // // 		if(years.hasClass('open')) years.removeClass('open');
// // // 		year.parent().addClass('open');
// // // 	});
// // // });

// // // var loadMore = $('.load-more');

// // // loadMore.on('click', function(filters){
// // // 	setTimeout(() => {
// // // 		var selectedCards = document.querySelectorAll('#nots-atualidade .cards .card.selected');

// // // 		for (i = 0; i <= selectedCards.length; i++) {
// // // 			console.log(selectedCards.length);
// // // 			console.log(i);
// // // 			if(i >= selectedCards.length){
// // // 				loadMore.addClass('hide');	
// // // 			} else {
// // // 				loadMore.removeClass('hide');
// // // 			}
// // // 		}

// // // 		if($('#nots-atualidade .cards .moreBox.selected.hidden').length > 0) {
// // // 			$('#nots-atualidade .cards .moreBox.selected.hidden').slice(0, 4).removeClass('hidden');
// // // 		} else {
// // // 			if($('#nots-atualidade .cards .moreBox.hidden').length > 0) {
// // // 				$('#nots-atualidade .cards .moreBox.hidden').slice(0, 4).removeClass('hidden');	

// // // 				var visibleCards = document.querySelectorAll('#nots-atualidade .cards .card:not(.hidden)');
// // // 				var hiddenCards = document.querySelectorAll('#nots-atualidade .cards .card.hidden');
		
// // // 				if(visibleCards.length < 6){
// // // 					document.querySelector('.load-more').classList.add('hide');
// // // 				}
		
// // // 				if(hiddenCards.length > 0){
// // // 					document.querySelector('.load-more').classList.remove('hide');
// // // 				}
// // // 			}
// // // 		}

// // // 		if($("#nots-atualidade .cards .hidden").length == 0) {
// // // 			loadMore.css('display', 'none');
// // // 		} else {
// // // 			loadMore.css('display', 'flex');
// // // 		}
// // // 	}, 500);
// // // })

// // // if($("#nots-atualidade .cards .hidden").length == 0) {
// // // 	loadMore.css('display', 'none');
// // // } else {
// // // 	loadMore.css('display', 'flex');
// // // }

// // // var filtersButton = $('.filters-button');
// // // var filtersWrapper = $('.filters-wrapper');

// // // if(filtersButton.length != 0) {
// // // 	filtersButton.on('click', function(){
// // // 		filtersWrapper.toggleClass('open');
// // // 	})
// // // }
// // // // $("#nots-atualidade .cards .moreBox").slice(6, $(".moreBox").length).addClass('hidden');

// // // // $(document).on('scroll', function() {
// // // // 	your_function_to_load_content();
// // // // 	$('#nots-atualidade').bind('getheight', function() {
// // // // 		$('#nots-atualidade').height();

// // // // 		if($('#nots-atualidade').height() <= 500){
// // // // 			$('.filters-wrapper').css(
// // // // 				{
// // // // 					'position': 'absolute',
// // // // 					'bottom': '0'
// // // // 				}
// // // // 			);
// // // // 		} else {
// // // // 			$('.filters-wrapper').css(
// // // // 				{
// // // // 					'position': 'fixed',
// // // // 					'bottom': 'unset'
// // // // 				}
// // // // 			);
// // // // 		}
// // // // 	});
	
// // // // 	function your_function_to_load_content() {
// // // // 		$('#nots-atualidade').trigger('getheight');
// // // // 	}
// // // // });

// // // // if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
// // // // 	$('.filters-wrapper').css(
// // // // 		{
// // // // 			'position': 'absolute',
// // // // 			'bottom': '0'
// // // // 		}
// // // // 	);
// // // // }

// // // // $('#resultado').on('keyup', function(){
// // // // 	your_function_to_load_content();

// // // // 	$('#nots-atualidade').bind('getheight', function() {
// // // // 		$('#nots-atualidade').height();

// // // // 		if($('#nots-atualidade').height() <= 500){
// // // // 			$('.filters-wrapper').css(
// // // // 				{
// // // // 					'position': 'absolute',
// // // // 					'bottom': '0'
// // // // 				}
// // // // 			);
// // // // 		}
// // // // 	});
	
// // // // 	function your_function_to_load_content() {
// // // // 		$('#nots-atualidade').trigger('getheight');
// // // // 	}
// // // // })


// // // // function searchNoticias() {
// // // //     var input, filter, ul, li, a, i, txtValue;
// // // //     input = document.getElementById("resultado");
// // // //     filter = input.value.toUpperCase();
// // // //     cards_container = document.querySelector(".cards");
// // // //     card = cards_container.querySelectorAll(".cards .card");
// // // //     for (i = 0; i < card.length; i++) {
// // // //         a = card[i].getElementsByTagName("h3")[0];
// // // //         txtValue = a.textContent || a.innerText;
// // // //         if (txtValue.toUpperCase().indexOf(filter) > -1) {
// // // //             card[i].classList.remove("hidden")
// // // // 			$("#nots-atualidade .cards .moreBox").slice(6, $(".moreBox").length).addClass('hidden');
// // // //         } else {
// // // //             card[i].classList.add("hidden")

// // // // 			var visibleCards = $('.card:not(.hidden)');

// // // // 			if(visibleCards.length == 0) {
// // // // 				$('.filter-no-item').addClass('filter-no-item-active');
// // // // 			} else {
// // // // 				$('.filter-no-item').removeClass('filter-no-item-active');
// // // // 				$("#nots-atualidade .cards .moreBox").slice(6, $(".moreBox").length).addClass('hidden');

// // // // 				var visibleCards = document.querySelectorAll('#nots-atualidade .cards .card:not(.hidden)');
// // // // 				var hiddenCards = document.querySelectorAll('#nots-atualidade .cards .card.hidden');

// // // // 				if(visibleCards.length < 6){
// // // // 					document.querySelector('.load-more').classList.add('hide');
// // // // 				}

// // // // 				if(hiddenCards.length > 0){
// // // // 					document.querySelector('.load-more').classList.remove('hide');
// // // // 				}
// // // // 			}
// // // //         }
// // // //     }
// // // // }

// // // // function addClassAll(el, cls){
// // // // 	for (var i = 0; i < el.length; ++i){
// // // // 		if (!el[i].className.match('(?:^|\\s)'+cls+'(?!\\S)')){ el[i].className += ' '+cls; } 
// // // // 	}
// // // // }
// // // // function delClassAll(el, cls){
// // // // 	for (var i = 0; i < el.length; ++i){
// // // // 		el[i].className = el[i].className.replace(new RegExp('(?:^|\\s)'+cls+'(?!\\S)'),'');
// // // // 	}
// // // // }

// // // // var map = Array.prototype.map;

// // // // var filtersArray = [];

// // // // function contentFilter(filterID, filterType){  
// // // // 	var id = filterID;
// // // // 	var filters = document.querySelectorAll('.filter-categories label');
// // // // 	map.call(filters, function(f){
// // // // 		f.onclick = function(evt) { 
// // // // 			evt = evt || window.event;
// // // // 			var elem = evt.target || evt.srcElement, 
// // // // 				wrap = document.querySelectorAll(id),
// // // // 				items = document.querySelectorAll(id+' .card'),
// // // // 				inputs = document.querySelectorAll('.cat-checkbox'),
// // // // 				filters = [],
// // // // 				noitem = document.querySelectorAll('.filter-no-item'), 
// // // // 				mask = document.querySelectorAll('.filter-mask'), 
// // // // 				type = filterType,
// // // // 				verMais = document.querySelector('.load-more');
// // // // 			addClassAll(mask, 'filter-mask-active');
// // // // 			setTimeout(function() { delClassAll(mask, 'filter-mask-active'); }, 1000); 
// // // // 			if (elem.className.match('(?:^|\\s)filter-all(?!\\S)')) { // #filter-all
// // // // 				for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
// // // // 					inputs[i].checked = false; // uncheck all other inputs
// // // // 				}
// // // // 				setTimeout(function() { 
// // // // 					delClassAll(items, 'selected');
// // // // 					delClassAll(items, 'hidden');
// // // // 					$(id + " .moreBox").slice(6, $(id + " .moreBox").length).addClass('hidden');
// // // // 					delClassAll(wrap, 'filtered-'+type); 
// // // // 					delClassAll(noitem, 'filter-no-item-active'); 
// // // // 				}, 500); 
// // // // 			} else { // another filter is checked
// // // // 				inputs[0].checked = false; // uncheck #filter-all
// // // // 				for (var i = 1; i < inputs.length; ++i) { // loop through inputs but ignore [0] - #filter-all
// // // // 					if (inputs[i].checked) { filters.push(inputs[i].id); } // add checked inputs to filters array 
// // // // 				}
// // // // 				setTimeout(function() { 
// // // // 					delClassAll(items, 'selected'); 
// // // // 					addClassAll(wrap, 'filtered-'+type);  
// // // // 					if (type == 'inclusive') {
// // // // 						if (filters.length > 0) {
// // // // 							addClassAll(document.querySelectorAll(id+' .card.'+filters.join('.')), 'selected');

// // // // 							$(id+' .card').addClass('hidden');
// // // // 							$(id+' .card.'+filters.join('.')).slice(6, $(id+' .card.'+filters.join('.')).length).addClass('hidden');
// // // // 							$(id+' .card.'+filters.join('.')).slice(0, 6).removeClass('hidden');

// // // // 							var selectedCards = document.querySelectorAll(id+' .card.selected');

// // // // 							if(selectedCards.length > 6){
// // // // 								document.querySelector('.load-more').classList.remove('hide');
// // // // 							} else {
// // // // 								document.querySelector('.load-more').classList.add('hide');
// // // // 							}
							
// // // // 						} // build css selector from filters array
// // // // 						document.querySelectorAll(id+' .selected').length == 0 ? addClassAll(noitem, 'filter-no-item-active') : delClassAll(noitem, 'filter-no-item-active'); 
// // // // 					} else {
// // // // 						// $(id+' .artigos.'+filters.join('.')).removeClass('hidden');
// // // // 					}
// // // // 					var checkCount = 0;  
// // // // 					for (var i = 0; i < inputs.length; ++i) {
// // // // 						checkCount += inputs[i].checked ? 1 : 0; 
// // // // 						}
// // // // 					if (checkCount == 0) {inputs[0].checked = true;}
// // // // 					if (inputs[0].checked) {
// // // // 						delClassAll(wrap, 'filtered-'+type);
// // // // 						delClassAll(noitem, 'filter-no-item-active');
// // // // 					}
// // // // 				}, 500); 
// // // // 			}
// // // // 		}
// // // // 	});
// // // // }

// // // // contentFilter('#nots-atualidade .cards', 'inclusive');

// // // // $(".check input:checkbox").on('click', function() {
// // // // 	var $box = $(this);
// // // // 	if ($box.is(":checked")) {
// // // // 	  var group = "input:checkbox[name='" + $box.attr("name") + "']";
// // // // 	  $(group).prop("checked", false);
// // // // 	  $box.prop("checked", true);
// // // // 	} else {
// // // // 	  $box.prop("checked", false);
// // // // 	}
// // // // });

// // // // var years = $('.years');

// // // // $('.years .year').each(function(){
// // // // 	var year = $(this);
// // // // 	year.click(function(e){
// // // // 		e.preventDefault();
// // // // 		if(years.hasClass('open')) years.removeClass('open');
// // // // 		year.parent().addClass('open');
// // // // 	});
// // // // });

// // // // var loadMore = $('.load-more');

// // // // loadMore.on('click', function(filters){
// // // // 	setTimeout(() => {
// // // // 		var selectedCards = document.querySelectorAll('#nots-atualidade .cards .card.selected');

// // // // 		for (i = 0; i <= selectedCards.length; i++) {
// // // // 			console.log(selectedCards.length);
// // // // 			console.log(i);
// // // // 			if(i >= selectedCards.length){
// // // // 				loadMore.addClass('hide');	
// // // // 			} else {
// // // // 				loadMore.removeClass('hide');
// // // // 			}
// // // // 		}

// // // // 		if($('#nots-atualidade .cards .moreBox.selected.hidden').length > 0) {
// // // // 			$('#nots-atualidade .cards .moreBox.selected.hidden').slice(0, 4).removeClass('hidden');
// // // // 		} else {
// // // // 			if($('#nots-atualidade .cards .moreBox.hidden').length > 0) {
// // // // 				$('#nots-atualidade .cards .moreBox.hidden').slice(0, 4).removeClass('hidden');	

// // // // 				var visibleCards = document.querySelectorAll('#nots-atualidade .cards .card:not(.hidden)');
// // // // 				var hiddenCards = document.querySelectorAll('#nots-atualidade .cards .card.hidden');
		
// // // // 				if(visibleCards.length < 6){
// // // // 					document.querySelector('.load-more').classList.add('hide');
// // // // 				}
		
// // // // 				if(hiddenCards.length > 0){
// // // // 					document.querySelector('.load-more').classList.remove('hide');
// // // // 				}
// // // // 			}
// // // // 		}

// // // // 		if($("#nots-atualidade .cards .hidden").length == 0) {
// // // // 			loadMore.css('display', 'none');
// // // // 		} else {
// // // // 			loadMore.css('display', 'flex');
// // // // 		}
// // // // 	}, 500);
// // // // })

// // // // if($("#nots-atualidade .cards .hidden").length == 0) {
// // // // 	loadMore.css('display', 'none');
// // // // } else {
// // // // 	loadMore.css('display', 'flex');
// // // // }

// // // // var filtersButton = $('.filters-button');
// // // // var filtersWrapper = $('.filters-wrapper');

// // // // if(filtersButton.length != 0) {
// // // // 	filtersButton.on('click', function(){
// // // // 		filtersWrapper.toggleClass('open');
// // // // 	})
// // // // }