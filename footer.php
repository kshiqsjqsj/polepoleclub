<footer>

  <div class="footerInner">
    <?php if (have_rows('gnav_pear',7579)): ?>
        <div class="footerNav pc">
        <ul class="footerNaviCollam">
        <?php while (have_rows('gnav_pear',7579)) : the_row(); ?>
        <li>
          <a href="<?php echo home_url(); ?>/<?php the_sub_field('gnav_pear_link',7579);?>" class="naviTop"><?php the_sub_field('gnav_pear01',7579);?></a>
        </li>
        <?php endwhile; ?>
        </ul>
      </div>
    <?php else: ?>
    <?php endif; ?>
  </div>
  <!-- フッターインナー終了!-->



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
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/style.js??ssss"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/css_browser_selector.js"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDumlHvu4kuFwoQZ6TutbeYojeBRTzOlRQ&callback=initMap">
</script>
<?php wp_footer(); ?>
</body>
</html>
