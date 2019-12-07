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
            <dd>京王線つつじヶ丘駅南口から徒歩7分</dd>
        </dl>
        <dl class="cf">
          <dt>住所</dt><dd><address>東京都調布市東つつじケ丘2-39-11アザレアヒルズ203</address></dd>
        </dl>
        <dl class="cf">
          <dt>TEL/FAX</dt><dd class="tel">03-3300-7234</dd>
        </dl>
        <dl class="cf">
          <dt>E-mail</dt><dd>pole2club@gmail.com</dd>
        </dl>
      </div>
  <?php endwhile; endif; ?><!--ループ終了-->

    <div id="map"></div>


<script>//gmap設定

  function initMap() {
    var uluru = {lat: 35.656544, lng: 139.580533};

    var map = new google.maps.Map(
      document.getElementById('map'), {
        zoom: 15,
        center: {lat: 35.656544, lng: 139.580533},

      });

  var marker = new google.maps.Marker({
      position:  {lat: 35.656544, lng: 139.580533},
      map: map,
      });

  var infowindow = new google.maps.InfoWindow({
    content: "<h2>タンザニアポレポレクラブ</h2><p>東京都調布市東つつじケ丘2-39-11アザレアヒルズ203</p>"
  });
      marker.addListener("mouseover", function() {
        infowindow.open(map,marker);
      });

   }//end

   </script>
</div>

<?php get_footer(); ?>
