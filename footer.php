<footer>

  <div class="footerInner">
       <!--フッターカスタムメニュー-->
       <?php wp_nav_menu( array(
               'theme_location' => 'footerNavi',
               'container' => 'div',
               'container_class' => 'footerNav',
               'container_id' => 'footerNav',
               'fallback_cb' => ''
         ) ); ?>

    <div class="footerBottom cf">
      <div class="access cf">
        <div class="cf" id="footer_logo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/footer_logo.png" alt="フッターロゴ" class="left">
		</div>
        <div class="accessText">
			  <h4>タンザニア・ポレポレクラブ</h4>
			  <p>
				<span class="large">事務所</span>
				<address>〒154-0016 東京都世田谷区弦巻1-28-15サンライトハイツ301</address>
				<span class="large">E-mail</span>
				pole2club@hotmail.com	<br>
				<span class="large">本部</span>
				<address>〒107-0062 東京都港区南青山6-1-32-103</address>
				<span class="large">TEL/FAX</span>
				03-4389-4817
			  </p>
			<p id="accessButton"><a href="http://polepoleclub.jp/pole2club/?page_id=28">詳しく見る</a></p>
        </div>
      </div>

		<div class="footerSns">
		  <ul>
			<li><a href="https://www.facebook.com/TanzaniaPolePoleClub" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/fb_icon_green.png" alt="フェイスブックアイコン"></a></li>
			<li><a href="https://twitter.com/tanzania_pole2" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/tw_icon_green.png" alt="ツイッターアイコン"></a></li>
			<li><a href="https://www.instagram.com/tanzaniapole2club/?hl=ja" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/inster_green.png" alt="インスタグラムアイコン"></a></li>
		  </ul>
		</div>

    </div><!-- フッターボトム終了 !-->

  </div><!-- フッターインナー終了!-->



  <div id="copy">
    <p id="copyRight"><small>※当サイトに掲載している、記事、写真等の無断転用を禁止します。<br>
      Copyright&copy;タンザニア・ポレポレクラブ All Rights Reserved.</small>
    </p>
  </div>

</footer>

    <div id="pagetop"><span class="top_triangle"></span></div><!--ページトップボタン-->


</div><!-- ラッパー終了 !-->


<!--[if lt IE 9]>
<script type="text/javascript" src="js/respond.js"></script>
<![endif]-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/style.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/css_browser_selector.js"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDumlHvu4kuFwoQZ6TutbeYojeBRTzOlRQ&callback=initMap">
</script>
<?php wp_footer(); ?>
</body>
</html>
