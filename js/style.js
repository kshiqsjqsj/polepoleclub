// JavaScript Document
$("document").ready(function(){


var headerHight = $("#js-header").outerHeight();

//ヘッダーの高さ分マージン

if (window.matchMedia( "(max-width: 768px)" ).matches) {
	$("#js-mt-spaece").css("margin-top",headerHight);
	$("#js-gnav").css("top",headerHight);
	} else {
	}



//slickスライド


$('#js-slide').slick({ //{}を入れる
	autoplay: true, //「オプション名: 値」の形式で書く
	focusOnSelect: true,
	dots: true, //複数書く場合は「,」でつなぐ
	fade:true,
	arrows: true,
	autoplaySpeed: 3000,
	speed: 3000,
	lazyLoad:'progressive',
	pauseOnFocus:false,
	pauseOnHover:false,
 	prevArrow: "<div class='slide-arrow arrow-prev'></div>",
	nextArrow:  "<div class='slide-arrow arrow-next'></div>" 

  });

/* 
  $(".js-nav-child").mouseover(function(){
	$(this).next(".mega-menu").addClass("is-maga-show");
  });

  $(".js-nav-child").mouseout(function(){
	$(this).next(".mega-menu").removeClass("is-maga-show");
  }); */



if (window.matchMedia( "(max-width: 768px)" ).matches) {
	$(".is-have-sub-menu").on("click",function(){
		$(this).toggleClass("is-ac-open");
		$(this).next(".mega-menu").toggleClass("is-sp-mega-show");
	});
	} else {

		$(".is-have-sub-menu").mouseover(function(){
			$(this).addClass("is-arrow-show");
		});
		
		$(".is-have-sub-menu").mouseout(function(){
			$(this).removeClass("is-arrow-show");
		});
		


	}




$(".is-no-link").on("click",function(){
return false;
});

//ドロワーメニュー


   $('#js-swchi').click(function(){
		$(this).toggleClass('active');
		$("body").toggleClass("is-ov-hidden");
		$('#js-gnav').toggleClass('is-gnav-show');
    });


	//グローバルナビ固定 PC_ONLY
	
	if (window.matchMedia( "(max-width: 768px)" ).matches) {
		} 
		else {
			var offset = $('.gNavi').offset();
			$(window).scroll(function () {
				if ($(window).scrollTop() > offset.top) {
					$('.gNavi').addClass('fixed');
				} else {
					$('.gNavi').removeClass('fixed');
				}
			});
			var topGnavi = 950;
			$(window).scroll(function () {
			  if($(window).scrollTop() > topGnavi) {
			   $("#topGnavi").addClass('fixed');
			  } else {
				$("#topGnavi").removeClass('fixed');
			  }
			});
		}
	
	
	//スクロールトップ
	var showTop = 200;

	var fixedTop = $('#pagetop');
	fixedTop.on('click',function(){
		$('html,body').animate({scrollTop:'0'},500);
	});
	$(window).on('load scroll resize',function(){
		if($(window).scrollTop() >= showTop){
			fixedTop.fadeIn('normal');
		} else if($(window).scrollTop() < showTop){
			fixedTop.fadeOut('normal');
		}
	});


//アンカーリンク 


var navHight = $("#js-gnav").outerHeight();


console.log(navHight);

if (window.matchMedia( "(max-width: 768px)" ).matches) {
	
		var anchor_hight = headerHight; //ヘッダの高さ
		$('a[href^=#]').click(function(){
			var href= $(this).attr("href");
			  var target = $(href == "#" || href == "" ? 'html' : href);
			   var position = target.offset().top-anchor_hight; //ヘッダの高さ分位置をずらす
			$("html, body").animate({scrollTop:position}, 550, "swing");
			   return false;
		  });
	 
	} else {
	
			var anchor_hight = navHight; //ヘッダの高さ
			$('a[href^=#]').click(function(){
				var href= $(this).attr("href");
				  var target = $(href == "#" || href == "" ? 'html' : href);
				   var position = target.offset().top-anchor_hight*2.5; //ヘッダの高さ分位置をずらす
				$("html, body").animate({scrollTop:position}, 550, "swing");
				   return false;
			  });
		  
	}






});//終了
