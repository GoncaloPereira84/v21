var map = Array.prototype.map;

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

var dataFilterID;
$('.filters').click(function(event) {
    dataFilterID = $(event.target).attr('data-filter-id');
});

var pictures = $('#galeria .picture');

pictures.each(function(){
    var pic = $(this);
    if($(this).data('filter-id') == 1) {
        $(this).addClass('selected');
    }

    $(this).on('click', function(){
        $(this).toggleClass('zoom');
        $('#bg-galeria').toggleClass('open');
        $('.close-pic').toggleClass('open-pic');
    })

    $('#bg-galeria').on('click', function(){
        pic.removeClass('zoom');
        $('#bg-galeria').removeClass('open');
        $('.close-pic').removeClass('open-pic');
    })

    $('.close-pic').on('click', function(){
        pic.removeClass('zoom');
        $('#bg-galeria').removeClass('open');
        $('.close-pic').removeClass('open-pic');
    })
});

var picturesMobile = $('#galeria-mobile .picture');

picturesMobile.each(function(){
    var pic = $(this);
    if($(this).data('filter-id') == 1) {
        $(this).addClass('selected');
    }

    $(this).on('click', function(){
        $(this).toggleClass('zoom');
        $('#bg-galeria').toggleClass('open');
        $('.close-pic').toggleClass('open-pic');
    })

    $('#bg-galeria').on('click', function(){
        pic.removeClass('zoom');
        $('#bg-galeria').removeClass('open');
        $('.close-pic').removeClass('open-pic');
    })

    $('.close-pic').on('click', function(){
        pic.removeClass('zoom');
        $('#bg-galeria').removeClass('open');
        $('.close-pic').removeClass('open-pic');
    })
});

var youngLeaders = $('.young .gallery-cont .pic');

youngLeaders.each(function(){
    var pic = $(this);

    $(this).on('click', function(){
        $(this).toggleClass('zoom');
        $('#bg-galeria.young-l').toggleClass('open');
        $('.close-pic').toggleClass('open-pic');
    })

    $('#bg-galeria').on('click', function(){
        pic.removeClass('zoom');
        $('#bg-galeria.young-l').removeClass('open');
        $('.close-pic').removeClass('open-pic');
    })

    $('.close-pic').on('click', function(){
        pic.removeClass('zoom');
        $('#bg-galeria.young-l').removeClass('open');
        $('.close-pic').removeClass('open-pic');
    })
});

var youngLeadersMobile = $('.young .gallery-cont-mobile .pic');

youngLeadersMobile.each(function(){
    var pic = $(this);
    // if($(this).data('filter-id') != 1) {
    //     $(this).css('display', 'none');
    // }

    $(this).on('click', function(){
        $(this).toggleClass('zoom');
        $('#bg-galeria.young-l').toggleClass('open');
        $('.close-pic').toggleClass('open-pic');
    })

    $('#bg-galeria').on('click', function(){
        pic.removeClass('zoom');
        $('#bg-galeria.young-l').removeClass('open');
        $('.close-pic').removeClass('open-pic');
    })

    $('.close-pic').on('click', function(){
        pic.removeClass('zoom');
        $('#bg-galeria.young-l').removeClass('open');
        $('.close-pic').removeClass('open-pic');
    })
});

function contentFilter(filterID, filterType){  
    var id = filterID;
	document.querySelector(id+' .filters').onclick = function(evt) { 
		evt = evt || window.event;
		var elem = evt.target || evt.srcElement, 
		    wrap = document.querySelectorAll(id+' .pictures'),
		    items = document.querySelectorAll(id+' .picture'),
		    inputs = document.querySelectorAll(id+' .filter'),
            type = filterType,
            noitem = document.querySelectorAll('.filter-no-item'), 
            mask = document.querySelectorAll('.filter-mask');

        addClassAll(mask, 'filter-mask-active');
        setTimeout(function() { delClassAll(mask, 'filter-mask-active'); }, 500);
        setTimeout(function() { 
            delClassAll(items, 'selected'); 
            addClassAll(wrap, 'filtered-'+type);  
            if (type == 'inclusive') {
                map.call(inputs, function(ip){
                    if(ip.getAttribute('data-filter-id') == dataFilterID) {
                        ip.classList.add("active")
                    } else {
                        ip.classList.remove("active")
                    }
                });
                map.call(items, function(it){
                    if(it.getAttribute('data-filter-id') == dataFilterID) {
                        $(it).addClass('selected');
                    } else {
                        $(it).removeClass('selected');
                    }
                })
            }
            document.querySelectorAll(id+' .selected').length == 0 ? addClassAll(noitem, 'filter-no-item-active') : delClassAll(noitem, 'filter-no-item-active');
        }, 500); 
	}
}

contentFilter('#galeria', 'inclusive');
contentFilter('#galeria-mobile', 'inclusive');

var cards = $('.incubacao-gal .card');

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

if($('#galeria-mobile').length > 0){
    $('#galeria-mobile .filter-no-item').css('height', $('#galeria-mobile .pictures').height() + 'px');
    $('#galeria-mobile .filter-mask').css('height', $('#galeria-mobile .pictures').height() + 'px');
}

$(window).resize(function(){
    if($('#galeria-mobile').length > 0){
        $('#galeria-mobile .filter-no-item').css('height', $('#galeria-mobile .pictures').height() + 'px');
        $('#galeria-mobile .filter-mask').css('height', $('#galeria-mobile .pictures').height() + 'px');
    }
})