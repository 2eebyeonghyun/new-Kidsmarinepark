var number = function (target) {
	target.value = target.value
		.replace(/[^0-9.]/g, '')
		.replace(/(\..*)\./g, '$1');
}

var autoHyphen2 = function (target) { // 예약확인 하이픈추가
	target.value = target.value
		.replace(/[^0-9]/g, '')
		.replace(/(^02|^0505|^1[0-9]{3}|^0[0-9]{2})([0-9]+)?([0-9]{4})$/, "$1-$2-$3");
}

$(window).scroll(function () {
	var scrollT = $(this).scrollTop();
	var header = $('#header');

	if (scrollT > 1) {
		header.addClass('on');
		header.removeClass('mainTop');
	} else {
		header.removeClass('on');
		header.addClass('mainTop');
	}

});


var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('#header').outerHeight();

$(window).scroll(function (event) {
	didScroll = true;
});

setInterval(function () {
	if (didScroll) {
		hasScrolled();
		didScroll = false;
	}
}, 250);

function hasScrolled() {
	var st = $(this).scrollTop();

	if (Math.abs(lastScrollTop - st) <= delta)
		return;

	if (st > lastScrollTop && st > navbarHeight) {
		$('#header').removeClass('nav-down').addClass('nav-up');
	} else {
		if (st + $(window).height() < $(document).height()) {
			$('#header').removeClass('nav-up').addClass('nav-down');
		}
	}

	lastScrollTop = st;
}






$("#header .nav_list > li").hover(function () {
	$(this).find(".nav_list_sub").fadeIn('fast');
}, function () {
	$(this).find(".nav_list_sub").fadeOut(50);
});


$('.nav_list > li').mouseover(function () {
	$(this).children().find('.nav_list_sub > li').css('border-bottom', '1px solid #00B050');
});
$('.nav_list > li').mouseleave(function () {
	$(this).children().find('.nav_list_sub > li').css('border-bottom', 'transparent');
});

$(".btn_menuOpen").on("click", function (e) {
	e.preventDefault();

	var body = $('body');
	var gnb_menuBox_mo = $('.gnb_menuBox_mo');
	var navUl1d = $('#header .nav_menu .nav_list');

	$(this).toggleClass('on');
	$(this).toggleClass('open');
	$(this).toggleClass('btnFixed');
	gnb_menuBox_mo.toggleClass('on');
	navUl1d.toggleClass('on');
	body.toggleClass('on');
});


$(".gnb_menuBox_mo .cate_menu").eq().find(".category").slideDown();
$(".cate_menu .bigMenu").click(function (event) {
	event.preventDefault();
	$(this).parent().find(".category").stop().slideToggle();
	$(".bigMenu").not(this).next().slideUp(300);
	$(".bigMenu").not(this).parent().removeClass('on');
	return false;
});

$(".cate_menu .bigMenu > a").click(function (e) {
	e.preventDefault();

	$(this).toggleClass('on');
})
