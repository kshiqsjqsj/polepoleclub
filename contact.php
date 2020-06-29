<?php
/*
Template Name: コンタクトページ
*/
?>

<?php get_header(); ?>

 <div class="title_img">
  <img src="<?php echo get_template_directory_uri(); ?>/img/contact_title.jpg" class="pc tablet" alt="お問い合わせ">
  <img src="<?php echo get_template_directory_uri(); ?>/img/contact_title_sp.jpg" class="smart" alt="お問い合わせ">

 </div>

<div class="inner">
<?php breadcrumb(); ?>
</div> 

  <div class="content">

    <?php if(have_posts()): the_post(); ?>
       <section>
         <article>
         <div class="title cf">
           <h2><?php the_title(); ?></h2>
         </div>

        <div class="content_area">
         <?php the_content(); ?>
        </div>

         </article>
       </section>
    <?php  endif; ?>
  </div>

<?php get_footer(); ?>
