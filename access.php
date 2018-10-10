<?php
/*
Template Name: アクセスページ
*/
 ?>

<?php  get_header(); ?>

<div class="gNavi pc">
  <!--カスタムメニュー-->
  <?php wp_nav_menu( array(
          'theme_location' => 'globalNavi',
          'container' => 'nav',
          'container_class' => 'navInner',
          'container_id' => 'navInner',
          'fallback_cb' => ''
    ) ); ?>
</div>



<div class="gmap_wrap space-top">

  <?php breadcrumb(); ?>

  <?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="title">
      <h2><?php the_title(); ?></h2>
</div>
      <div class="gmap_text">
        <dl class="cf">
            <dt>交通</dt>
            <dd>東急田園都市線『桜新町駅』北口から徒歩13分<br>
              渋谷から東急バス渋05弦巻営業所行き『弦巻中学校前』バス停下車　徒歩3分</dd>
        </dl>
        <dl class="cf">
          <dt>住所</dt><dd><address>〒154-0016 東京都世田谷区弦巻1-28-15サンライトハイツ301</address></dd>
        </dl>
        <dl class="cf">
          <dt>TEL/FAX</dt><dd class="tel">03-3489-4817</dd>
        </dl>
        <dl class="cf">
          <dt>E-mail</dt><dd>pole2club@hotmail.com</dd>
        </dl>
      </div>
  <?php endwhile; endif; ?><!--ループ終了-->

    <div id="map"></div>


<script>//gmap設定

  function initMap() {
    var uluru = {lat: 35.637266, lng: 139.650682};

    var map = new google.maps.Map(
      document.getElementById('map'), {
        zoom: 15,
        center: {lat: 35.6371077, lng: 139.6505468},

      });

  var marker = new google.maps.Marker({
      position:  {lat: 35.637112, lng: 139.650709},
      map: map,
      });

  var infowindow = new google.maps.InfoWindow({
    content: "<h2>タンザニアポレポレクラブ</h2><p>〒154-0016 東京都世田谷区弦巻1-28-15サンライトハイツ301</p>"
  });
      marker.addListener("mouseover", function() {
        infowindow.open(map,marker);
      });

   }//end

   </script>
</div>

<?php get_footer(); ?>
