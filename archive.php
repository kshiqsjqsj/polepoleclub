

<?php get_header(); ?>

<div class="title_img">
 <img src="<?php echo get_template_directory_uri(); ?>/img/single_title.jpg" class="pc tablet" alt="最新情報">
 <img src="<?php echo get_template_directory_uri(); ?>/img/single_title_sp.jpg" class="smart" alt="最新情報">

</div>


<div class="inner">
  <?php breadcrumb(); ?>
</div>


		<div class="content cf">



<section class="main_area">
          <div class="title cf">
              <h2 class="date-category-listTitle">
                 <?php if( is_year() ) : ?>
                  <?php echo get_the_date('Y年'); ?>
                <?php endif; ?>
                <?php if( is_category() ) : ?>
                  <?php single_cat_title(); ?>
                <?php endif; ?>
                の一覧
              </h2>
			
          </div>


  <?php if(have_posts()): while(have_posts()):the_post(); ?>

    <article <?php post_class( 'newsTopic archive-topic' ); ?>>
      <a href="<?php the_permalink(); ?>">
        
         

                <?php
  $category = get_the_category();
  $cat_id   = $category[0]->cat_ID;
  $cat_name = $category[0]->cat_name;
  $cat_slug = $category[0]->category_nicename;
?>


                <span class="category-area <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
                  <?php echo $cat_name ?>
                </span>
             

     
            <!--投稿日を表示-->
              <span class="kiji-date">
                <i class="fas fa-pencil-alt"></i>
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
</section>

</div><!-- コンテンツ終了 !-->

<?php get_footer(); ?>
