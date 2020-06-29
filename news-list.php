<?php
/*
Template Name: 最新情報
*/
 ?>


<?php get_header(); ?>

<?php if(get_field('pages_header_img')): ?>

  <div class="page-head" id="js-mt-spaece">
  
      <div class="page-head__img">
        <img src="<?php the_field('pages_header_img'); ?>" alt="<?php the_title();?>">
      </div>

      <div class="page-head__inner">
        <h1 class="page-head__ttl">
          <?php the_title();?>
        </h1>
      </div>
  </div>

<?php else: ?>
  <h1 class="page-head-no-img">
      <span class="page-head-no-img__text"><?php the_title();?></span>
  </h1>
<?php endif; ?>

		<div class="inner"><?php breadcrumb(); ?></div>

		<div class="content cf">

        
				<section class="main_area">
          <div class="title cf">
            <h2>最新情報一覧</h2>
          </div>
           
          <?php
				// WP_Queryのパラメータを指定,新着情報5件抜粋
				$args = array(
				    'posts_per_page' => 10,
				    'orderby' => 'date',
            		'order' => 'DESC'
				);
				// WP_Queryクラスのインスタンスを作成
				$the_query = new WP_Query( $args );

				// ループ開始
				while ( $the_query->have_posts() ) :
					// カスタムクエリの投稿データをセット
					$the_query->the_post();?>
                  <article <?php post_class( 'newsTopic archive-topic' ); ?>>
                    <a href="<?php the_permalink(); ?>">
                      
                            <!--カテゴリ-->
                            <?php if (!is_category()): ?>
                              <?php if( has_category() ): ?>
                              <span class="category-area <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
                                <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
                              </span>
                              <?php endif; ?>
                            <?php endif; ?>

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
                  <?php endwhile;
    				// ループ終了
    				// メインクエリの投稿データに戻す
    		wp_reset_postdata(); ?>
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


              <?php if (have_rows('top_banner',7578)): ?>
                    <aside>
                      <ul class="bannerArea">
                        <?php while (have_rows('top_banner',7578)) : the_row(); ?>

                          <li class="bannerArea__item">
                            <a href="<?php the_sub_field('banner_link',7578); ?>" target="_blank">
                            <img src="<?php the_sub_field('banner_img',7578); ?>" alt="サイドバナー"></a>
                          </li>

                        <?php endwhile; ?>
                        </ul>
                      </aside> 
                      <?php else: ?>
              <?php endif; ?>
      </section>

		 

			

		</div><!-- コンテンツ終了 !-->
<?php get_footer(); ?>
