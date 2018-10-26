// JavaScript Document
$("document").ready(function(){

//スライドショー設定

    $('.flexslider').flexslider({
	  animation: "slide",
	  controlNav: "true",
	  slideshowSpeed: 4000,
	  animationSpeed: 1000,
	  pauseOnAction: false
	  });

//会員ボタン、寄付ボタンホバー設定
	$("#donation").hover(function(){
		$(this).stop().toggleClass("triangle_hover_red");
	});

	$("#member").hover(function(){
		$(this).stop().toggleClass("triangle_hover_orange");
	});



//ドロワーメニュー


   $('.btn_menu').click(function(){
		$(this).toggleClass('active');
		$('.smartGnavi').stop().slideToggle();
    });

//SPナビアコーディオン
	/*$(".sp_navi_parent").on("click",function(){
		$(this).next().stop().slideToggle();
		$(this).toggleClass("accordion_open");
	});*/

	//グローバルナビ固定
	
	
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






});//終了
