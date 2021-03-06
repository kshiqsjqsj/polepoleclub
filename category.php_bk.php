


<?php get_header(); ?>

<div class="title_img">
  <img src="<?php echo get_template_directory_uri(); ?>/img/single_title.jpg" class="pc tablet" alt="最新情報">
  <img src="<?php echo get_template_directory_uri(); ?>/img/single_title_sp.jpg" class="smart" alt="最新情報">
</div>

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

		<div class="content cf">
<?php breadcrumb(); ?>

<section class="main_area">
          <div class="title cf">
              <h2><?php single_cat_title(); ?>カテゴリー記事の一覧</h2>
				<div id="more" class="pc">
					<a href="http://polepoleclub.jp/pole2club/?page_id=3147">
						<span class="triangle" id="more_triangle"></span>
					 一覧へ</a>
				</div>
          </div>


  <?php if(have_posts()): while(have_posts()):the_post(); ?>

    <article <?php post_class( 'newsTopic archive-topic' ); ?>>
      <a href="<?php the_permalink(); ?>">
                <!--カテゴリ-->

                  <span class="category-area <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
                  <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
                  </span>

             
              <!--投稿日を表示-->
                <span class="kiji-date">
                  <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                    <?php the_time('Y/m/d'); ?>
                  </time>
                </span>
           
              <div class="archive-title">
              <!--タイトル-->
              <h3><?php the_title(); ?></h3>
		     </div>
         
      </a>
    </article>

			  <?php endwhile; endif; ?>
			  <!--ページネーション追加-->
			  <div class="pagination">
				<?php echo paginate_links( array(
				  'type' => 'list',
				  'mid_size' => '2',
				  'prev_text' => '&laquo;',
				  'next_text' => '&raquo;'
				  ) ); ?>
			  </div>
  				<?php wp_reset_query(); ?>
	
					<div id="more_mobail" class="smart">
						<a href="http://polepoleclub.jp/pole2club/?page_id=3147">一覧へ</a>
					</div>

  </section>


			  <aside class="right_area">
				<div class="list-wrappre">
				  <?php dynamic_sidebar( 'list-widget' ); ?>
				</div>
			  </aside>

			 <aside>
				<div class="bannerArea">
					<?php dynamic_sidebar( 'banner-widget' ); ?>
				</div>
        	 </aside> 

		</div><!-- コンテンツ終了 !-->
<?php get_footer(); ?>
