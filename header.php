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
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
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
				  <span class="menu">MENU</span>
				  <span class="close">CLOSE</span>
				</button>
				<nav class="smartGnavi smart tablet">
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
						<li class="button_wrap" id="member"><a href="http://polepoleclub.jp/kaiin.html"  target="_blank" class="button_text">
							<span class="triangle"></span>会員になる</a></li>
						<li class="button_wrap" id="donation"><a href="http://polepoleclub.jp/kihu.html" target="_blank" class="button_text">
							<span class="triangle"></span>寄付をする</a></li>
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
