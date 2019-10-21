var scl,
	evt01 = false,
	evt02 = false;
/* ready */
$(document).ready(function(){
	var winH = $(window).height(),
		winW = $(window).width();
	$('#header .hd_side_btn').click(function(){
		$(this).toggleClass('on');
		$('#header .hd_side').toggleClass('on');
		if ( $('#header').hasClass('menu_on') ) {
			setTimeout(function(){$('#header').removeClass('menu_on');},300);
		} else {
			$('#header').addClass('menu_on');
		}
		return false;
	});
	$(document).scroll(function(){
		var scl = $(document).scrollTop();
		// Header 변경 이벤트
		if ( scl > 10 ) {
			$('#header').addClass('bg_w');
		} else {
			$('#header').removeClass('bg_w');
			//console.log(scl);
		}
	});

	// Footer Scl Btn
	$('.go_top').click(function(){
		var body = $("html, body");
		body.stop().animate({scrollTop:0}, 500, 'swing', function() { });
		return false;
	});

	// 페이지별 over
	var page_path = $(location).attr('href').replace('http://www.designart.co.kr/', '').replace('.php', '').split( '/' );
	var page_point = {
		'sub01' : 0,
		'sub02' : 0,
		'sub03' : 0,
		'sub04' : 0,
		'sub_b_01' : 1,
		'sub_b_02' : 1,
		'sub_b_03' : 1,
		'sub_b_04' : 1,
		'portfolio' : 2,
		'sub_board_gallery' : 3,
		'sub05' : 3,
		'sub_board_gallery' : 3
	};
	$('.hd_menu li').eq(page_point[page_path[1]]).addClass('on');
});