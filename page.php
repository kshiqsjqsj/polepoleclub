
<?php get_header(2); ?>
  <?php breadcrumb(); ?>
<div class="content cf">
  <?php if(have_posts()): the_post(); ?>
  <section>
    <article class="main_area">
      <div class="title cf">
        <h2>
          <span><?php the_title(); ?></span>
        </h2>
      </div>
      <div class="content_area">
        <?php the_content(); ?>
      </div>
    </article>
  </section>
  <?php  endif; ?>
  <aside class="right_area">
    <div class="list-wrappre">
      <?php get_sidebar(2); ?>
    </div>
  </aside>
  <aside>
    <div class="bannerArea">
      <?php dynamic_sidebar( 'banner-widget' ); ?>
    </div>
  </aside>
</div>
<?php get_footer(); ?>
