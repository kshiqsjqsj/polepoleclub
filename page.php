
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
<h1 class="page-head-no-img" id="js-mt-spaece">
      <span class="page-head-no-img__text"><?php the_title();?></span>
  </h1>
<?php endif; ?>

<?php breadcrumb(); ?>

 
<div class="content cf">
  <?php if(have_posts()): the_post(); ?>
  <section class="content__main">
    <article class="main_area">
      <div class="content_area">
        <?php the_content(); ?>
      </div>
    </article>
  </section>

  
  <?php get_sidebar(); ?>
  <?php  endif; ?>
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
  
</div>
<?php get_footer(); ?>
