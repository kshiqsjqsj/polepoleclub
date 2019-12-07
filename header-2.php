<!doctype html>
<html><head>
	<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,user-scalable=no">
<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flexslider.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tablet.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/smart.css">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#00aba9">
	<meta name="theme-color" content="#ffffff">
	
	
	<script>
		//WEBフォント
  (function(d) {
    var config = {
      kitId: 'tnu1wdq',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
	</script>
	
 <?php wp_head(); ?>
</head><body <?php body_class(); ?>>
   <div id="wrappre">
     <header><div id="headerInner">
         <h1><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
					alt="タンザニア・ポレポレクラブ"></a></h1>
    <!--ドロワーメニュー-->
				<button type="button" class="btn_menu smart">
				  <span class="bar bar1"></span>
				  <span class="bar bar2"></span>
				  <span class="bar bar3"></span>
				  <span class="menubtn">MENU</span>
				  <span class="close">CLOSE</span>
				</button>
				<nav class="smartGnavi">
          <!--カスタムメニューモバイル-->
          <?php wp_nav_menu( array(
                  'theme_location' => 'mabailNavi',
                  'container' => 'ul',
                  'fallback_cb' => ''
            ) ); ?>
					 <ul>
					  <li id="sp_menber_button"><a href="http://polepoleclub.jp/kaiin.html" target="_blank">会員になる</a></li>
					  <li id="sp_donation_button"><a href="http://polepoleclub.jp/kihu.html" target="_blank">寄付をする</a></li>
				   	 </ul>

					<ul class="sp_sns_icons">
						<li><a href="https://www.facebook.com/TanzaniaPolePoleClub" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/fb_icon_green.png" alt="フェイスブックリンク"></a></li>
						<li><a href="https://twitter.com/tanzania_pole2" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/tw_icon_green.png" alt="ツイッターリンク"></a></li>
						<li><a href="https://www.instagram.com/tanzaniapole2club/?hl=ja" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/inster_green.png" alt="インスタグラムリンク"></a></li>
					</ul>
				 </nav>
				<!--ドロワーメニュー終了-->

				<div class="headerNavi pc">
					<ul>
						<li><a href="http://polepoleclub.jp/pole2club/?page_id=25">お問い合わせ</a></li>
						<li><a href="http://polepoleclub.jp/pole2club/?page_id=28">アクセス</a></li>
						<!--タンザニア政府からの圧力のため封印 <li><a href="#">English</a></li> -->
					</ul>
				</div>

				<div class="icons pc">
					<ul>
						<li class="button_wrap"><a href="http://polepoleclub.jp/kaiin.html"  target="_blank" class="button_text"  id="member">会員になる</a></li>
						<li class="button_wrap"><a href="http://polepoleclub.jp/kihu.html" target="_blank" class="button_text" id="donation">寄付をする</a></li>
						<li><a href="https://www.facebook.com/TanzaniaPolePoleClub" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/fb_icon.png" alt="フェイスブックリンク"></a></li>
						<li><a href="https://twitter.com/tanzania_pole2" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/tw_icon.png" alt="ツイッターリンク"></a></li>
						<li><a href="https://www.instagram.com/tanzaniapole2club/?hl=ja" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/instr_icon.png" alt="インスタグラムリンク"></a></li>
					</ul>
				</div>
			</div><!--ヘッダーインナー終了-->
		</header>
	   
	   
<div class="title_img" style="background-image: url(<?php the_field('page_head'); ?>)">
  		
	<div class="inner">
	
		<h2><?php the_field('page_title'); ?></h2>
	
	</div>
	   
</div>
	   
 <div class="gNavi pc">
    <nav>
      <ul class="navInner">
        <li><a href="<?php home_url(); ?>">HOME<br>
          <span class="naviSub">最新情報</span></a> </li>
        <li><a href="<?php home_url(); ?>adout">団体概要<br>
          <span class="naviSub">組織/年次報告,計画</span></a>
        </li>
        <li><a href="<?php home_url(); ?>adout-katudou">活動概要<br>
          <span class="naviSub">海外活動/情報一覧</span></a>
          <ul class="sub-menu">
            <li><a href="<?php home_url(); ?>adout-katudou/gaiyou">活動概要(海外/国内)</a></li>
            <li><a href="<?php home_url(); ?>adout-katudou/news-list/">最新情報一覧</a></li>
          </ul>
        </li>
        <li><a href="<?php home_url(); ?>support">支援/参加方法<br>
          <span class="naviSub">個人/企業の皆様へ</span></a>
          <ul class="sub-menu">
            <li><a href="<?php home_url(); ?>">会員になるには</a></li>
            <li><a href="<?php home_url(); ?>">ご寄付（植林/養蜂等）</a></li>
            <li><a href="<?php home_url(); ?>">マンスリーサポータ（会員/寄付）</a></li>
            <li><a href="<?php home_url(); ?>">企業団体のみなさまへ</a></li>
            <li><a href="<?php home_url(); ?>">アルバイト/ボランティア募集</a></li>
            <li><a href="<?php home_url(); ?>">壁紙募金</a></li>
          </ul>
        </li>
        <li><a href="<?php home_url(); ?>yotei">活動予定<br>
          <span class="naviSub">イベント/ミーティング</span></a>
        </li>
        <li><a href="<?php home_url(); ?>contact">お問い合わせ<br>
          <span class="naviSub">お問い合わせフォーム</span></a> </li>
      </ul>
    </nav>
  </div>

	   
	   
	   
    
 
	   
	   
	   
