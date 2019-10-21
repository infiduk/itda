/*  */
var movArr = Array($('<video class="video" preload="none" muted="muted" volume="0"><source src="./image/main/movie/video_1.mp4"></video>'),$('<video class="video" preload="none" muted="muted" volume="0"><source src="./image/main/movie/video_2.mp4"></video>'),$('<video class="video" preload="none" muted="muted" volume="0"><source src="./image/main/movie/video_3.mp4"></video>'));
function shuffleArray(array) {
	for (var i = array.length - 1; i > 0; i--) {
		var j = Math.floor(Math.random() * (i + 1));
		var temp = array[i];
		array[i] = array[j];
		array[j] = temp;
	}
}

/* Visual  */
var count, maxCount, sldTimer = 0, sldTimeInerval, setWorkTime = 6;

function mainEvt01 () {
	$('.cont01 .red_title').addClass('on');
};
function mainEvt02 () {
	$('.cont02 .red_title').addClass('on');
};
function sldTimeFunc () {
	sldTimer++;
	console.log(sldTimer);
	if ( sldTimer == setWorkTime ) {
		count++;
		mainVisualEvt2(count);
		//console.log('dddd')
	}
};
function mainVisualEvt() {
	console.log('work');
	$('#header').addClass('pc_w');
	$('.visual_block').addClass('after');
	$('.visual_block').eq(0).addClass('on').removeClass('after');
	$('.visual_evt .dots').eq(0).addClass('on');
	$('.main_visual .visual_evt').addClass('on');
	$('.main_visual .visual_evt .pr .dots a').eq(0).addClass('on');
	setTimeout(function(){
		$('.sld_timer .dotSpin .timer').addClass('ui-spinner');
		sldTimeInerval = setInterval(function(){
			sldTimeFunc();
		},1000);
		setTimeout(function(){
			$('.visual_block').eq(0).find('.txt .big > div').each(function(idx2){
				setTimeout(function(){
					$('.visual_block').eq(0).find('.txt .big > div').eq(idx2).addClass('on');
				},(50*idx2));
			});
		},500);
	},1000);
};
function mainVisualEvt2(cnt) {
	if ( cnt >= maxCount ) {
		cnt = 0;
	} else if ( cnt < 0 ) {
		cnt = maxCount - 1;
	}
	count = cnt;
	console.log(cnt+'/'+maxCount);
	sldTimer = 0;
	$('.sld_timer .dotSpin .timer').removeClass('ui-spinner');
	$('.sld_timer .dotSpin').removeClass('sld01').removeClass('sld02').removeClass('sld03');
	$('.sld_timer .dotSpin').addClass('sld0'+(cnt+1));
	setTimeout(function(){$('.sld_timer .dotSpin .timer').addClass('ui-spinner');},50);
	clearInterval(sldTimeInerval);
	sldTimeInerval = setInterval(function(){
		sldTimeFunc();
	},1000);
	$('.visual_block').removeClass('prev on after');
	$('.visual_block').each(function(idx){
		if ( idx < cnt ) {
			$(this).addClass('prev');
		} else if ( idx == cnt ) {
			$(this).addClass('on');
		} else {
			$(this).addClass('after');
		}
	});
	$('.visual_block').each(function(idx){
		if (idx == cnt) {
			setTimeout(function(){
				$('.visual_block').eq(idx).find('.txt .big > div').each(function(idx2){
					setTimeout(function(){
						$('.visual_block').eq(idx).find('.txt .big > div').eq(idx2).addClass('on');
					},(50*idx2));
				});
			},500);
		} else {
			$('.visual_block').eq(idx).find('.txt .big > div').each(function(idx2){
				setTimeout(function(){
					$('.visual_block').eq(idx).find('.txt .big > div').eq(idx2).removeClass('on');
				},(50*idx2));
			});
		}
	});
	$('.main_visual .visual_evt .pr .dots a').removeClass('on');
	$('.main_visual .visual_evt .pr .dots a').eq(cnt).addClass('on');
};

// 
/*  */
var prevType = 0;
function slickPc() {
	prevType = 0;
	$('.port_sld').slick({
		arrows: false,
		infinite: true,
		slidesToShow: 2,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
	});
}
function slickM() {
	prevType = 1;
	$('.port_sld').slick({
		arrows: true,
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
	});
}
// �붾컮�댁뒪蹂� �대깽�� 援щ텇
function portSet(winW) {
	if ( winW >= 1500 ) {
		slickPc();
	} else if ( winW >= 500 ) {
		slickPc();
	} else {
		slickM();
	}
}
function portResize(winW) {
	if ( winW >= 500 ) {
		if ( prevType == 0 ) {
			return false;
		}
		$('.port_sld').slick('unslick');
		slickPc();
	} else {
		if ( prevType == 1 ) {
			return false;
		}
		$('.port_sld').slick('unslick');
		slickM();
	}
}

// scroll
var scl,
	evt01 = false,
	evt02 = false;
/* ready */
$(document).ready(function(){
	var winH = $(window).height(),
		winW = $(window).width();
	$(window).resize(function(){
		winH = $(window).height(),
		winW = $(window).width();
		portResize(winW);
	});

	// 
	$('.main_visual').css({'height':$(window).height()+'px'});
	$(window).resize(function(){
		$('.main_visual').css({'height':$(window).height()+'px'});
	});

	// Video Event
	/*var movLeng = 0,
		movNow = 0;
	shuffleArray(movArr);
	$(movArr).each(function(idx){
		$('.main_visual .bg').prepend(movArr[idx]);
		movLeng++;
	});
	$('.main_visual .bg .video').each(function(idx){
		$('.main_visual .bg .video').get(idx).addEventListener('ended',myHandler,false);
	});
	$('.main_visual .bg .video').get(movNow).classList.add("on");
	$('.main_visual .bg .video').get(movNow).play();*/

	/* */
	mainVisualEvt();
	$('.visual_block').eq(0).find('.txt .big > div').each(function(idx2){
		setTimeout(function(){
			$('.visual_block').eq(0).find('.txt .big > div').eq(idx2).addClass('on');
		},(50*idx2));
	});








	function myHandler(e) {
        //if ( movNow == (movLeng - 1) ) {
			mainVisualEvt();
        /*} else {
			movNow++;
			$('.main_visual .bg .video').get(movNow).play();
		}*/
    }

	// Visual Text Evt
	/*var typed2 = new Typed('#main_txt', {
		strings: ['Inspiring<br>People<span>.</span>', 'Design<br>Something<span>.</span>', 'Work<br>Something<span>.</span>'],
		typeSpeed: 50,
		backSpeed: 50,
		backDelay: 1200,
		startDelay: 500,
		smartBackspace: true,
		loop: true,
	});*/
	// Visual Scl Btn
	$('.go_evt').click(function(){
		var body = $("html, body");
		body.stop().animate({scrollTop:$(window).height()}, 500, 'swing', function() { });
		return false;
	});

	// 
	/*$('.bt_slide1').click(function(){
		mainVisualEvt();
	});*/
	/*setTimeout(function(){
		mainVisualEvt();
	},10000);*/
	count = 0,
	maxCount = $('.visual_block').length;
	for (var i = 0; i < maxCount; i++) {
		var $btn = $('<a href="#" class="btns'+i+'" onclick="mainVisualEvt2('+i+');"></a>');
		$('.visual_evt .dots').append($btn);
	}
	$('.main_visual .visual_evt .pr .dots a').eq(0).addClass('on');

	$('.bt_slide2').click(function(){
		count++;
		mainVisualEvt2(count);
	});
	$('.bt_slide3').click(function(){
		count -= 1;
		mainVisualEvt2(count);
	});
	$(document).scroll(function(){
		var scl = $(document).scrollTop();
		console.log(scl);
		//
		if ( (scl > 250) && !evt01 ) {
			mainEvt01();
			evt01 == true;
		};
		if ( (scl > 950) && !evt02 ) {
			mainEvt02();
			evt02 == true;
		};
	});
	$('.tgle').click(function(){
		$('.red_title').toggleClass('on');
	});
	portSet(winW, winH);

	// 
	var topSes = localStorage.getItem('topbnr');
	if ( topSes != 'close' ) {
		$('.top_bnr').addClass('on');
		$('#header').addClass('tp_bnr');
		$(document).on('scroll.topbnr', function(){
			if ( $(document).scrollTop() > 50 ) {
				$('#header').addClass('fix');
			} else {
				$('#header').removeClass('fix');
			}
		});
		$('.top_close').on('click.topbnr', function(){
			$('.top_bnr').removeClass('on');
			$('#header').removeClass('tp_bnr');
			localStorage.setItem('topbnr', 'close');
		});
	}
});