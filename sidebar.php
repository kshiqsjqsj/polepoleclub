



<?php if ( is_home() || is_front_page()  ) : ?>

<!-- TOPページのみ表示 -->

<aside class="content__sidebar content__sidebar--top" id="sidebar-top">
<a href="<?php the_field("side_silde_link",7578);?>" class="side_slide_link">

        <div class="side_slide_subject">
                <h2>収集活動にご協力ください!</h2>
                <p>収集活動によって蘇る森<br>
            (同じ植林地の写真です)</p>
        </div>
        <div id="side_slide"> 
            <div class="bk-img src1"></div>
            <div class="bk-img src2"></div>
            <div class="bk-img src3"></div>
        </div>

</a>

<div class="link-text">
    <a href="<?php the_field("pdf_link",7578);?>" target="_blank" id="download">収集活動チラシダウンロード</a>
    <a href="<?php the_field("pdf_link02",7578);?>" target="_blank" id="corporate-achievements">企業のみなさま協力実績</a>
</div>

<?php if (have_rows('side_banner',7578)): ?>
    <ul class="side_bannar">
      <?php while (have_rows('side_banner',7578)) : the_row(); ?>

        <li class="side_banner_image">
            <a href="<?php the_sub_field('banner_link',7578); ?>" target="_blank">
            <img src="<?php the_sub_field('banner_img',7578); ?>" alt="サイドバナー"></a>
        </li>

      <?php endwhile; ?>
    </ul>
<?php else: ?>
<?php endif; ?>


<ul class="list-wrappre">
<li class="list-wrappre__ttl side_slide_subject">カテゴリー</li>
<?php wp_list_categories('title_li='); ?>
</ul>

<?php // 年別アーカイブリストを表示
  $year=NULL; // 年の初期化
  $args = array( // クエリの作成
    'orderby' => 'date', // 日付順で表示
    'posts_per_page' => -1 // すべての投稿を表示
  );
  $the_query = new WP_Query($args); if($the_query->have_posts()){ // 投稿があれば表示
    echo '<ul class="year-list list-wrappre">';
    echo '<li class="list-wrappre__ttl side_slide_subject">年別</li>';
    while ($the_query->have_posts()): $the_query->the_post(); // ループの開始
      if ($year != get_the_date('Y')){ // 同じ年でなければ表示
        $year = get_the_date('Y'); // 年の取得
        echo '<li><a href="'.home_url( '/').$year.'">'.$year.'年</a></li>'; // 年別アーカイブリストの表示
      }
    endwhile; // ループの終了
    echo '</ul>';
    wp_reset_postdata(); // クエリのリセット
  }
?>


</aside>

<?php elseif(is_single()): ?>

<!-- 記事ページの場合 -->

<aside class="content__sidebar">

		<div class="page-list">
        <ul class="list-wrappre">
<li class="list-wrappre__ttl side_slide_subject">カテゴリー</li>
<?php wp_list_categories('title_li='); ?>
</ul>

<?php // 年別アーカイブリストを表示
  $year=NULL; // 年の初期化
  $args = array( // クエリの作成
    'orderby' => 'date', // 日付順で表示
    'posts_per_page' => -1 // すべての投稿を表示
  );
  $the_query = new WP_Query($args); if($the_query->have_posts()){ // 投稿があれば表示
    echo '<ul class="year-list list-wrappre">';
    echo '<li class="list-wrappre__ttl side_slide_subject">年別</li>';
    while ($the_query->have_posts()): $the_query->the_post(); // ループの開始
      if ($year != get_the_date('Y')){ // 同じ年でなければ表示
        $year = get_the_date('Y'); // 年の取得
        echo '<li><a href="'.home_url( '/').$year.'">'.$year.'年</a></li>'; // 年別アーカイブリストの表示
      }
    endwhile; // ループの終了
    echo '</ul>';
    wp_reset_postdata(); // クエリのリセット
  }
?>


        </div>

</aside>


<?php elseif ( is_page() ): ?>
<aside class="content__sidebar">
<div class="page-list">
        <ul class="list-wrappre">
            <li class="list-wrappre__ttl side_slide_subject"><?php the_field("side_ttl"); ?></li>
            <?php if (have_rows('side__menu')): ?>
            <?php while (have_rows('side__menu')) : the_row(); ?>
            <li class="">
                <a href="<?php the_sub_field('side__link');?>" class="">
                <?php the_sub_field('side__link__name');?>
                </a>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>
        </ul>
</aside>
<?php endif; ?>


