<?php
/*
Template Name: 団体概要
*/

 ?>

<?php get_header(); ?>

 <div class="title_img">
  <img src="<?php echo get_template_directory_uri(); ?>/img/gaiyou_title.jpg" class="pc tablet" alt="団体概要">
  <img src="<?php echo get_template_directory_uri(); ?>/img/gaiyou_title_sp.jpg" class="smart" alt="団体概要">

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
    <?php if(have_posts()): the_post(); ?>
       <section>
         <article class="main_area">
			 <div class="title cf">
			   <h2><?php the_title(); ?></h2>
			 </div>

			 <div class="content_area">

			 	<?php the_content(); ?>

			 </div>
         </article>
       </section>
    <?php  endif; ?>

    <aside class="right_area">

		<div class="list-wrappre">
			<?php
			  // 指定したIDの子孫を階層でリスト表示
			  $parent = "66";
			  $args=array(
				'child_of' => $parent
			  );
			  $pages = get_pages($args);
			  if ($pages) {
				$pageids = array();
				foreach ($pages as $page) {
				  $pageids[]= $page->ID;
				}
				$args=array(
				  'title_li' => '',
				  'include' =>  $parent . ',' . implode(",", $pageids)
				);
				wp_list_pages($args);
			  }
			  ?>
		  </div>
    </aside>
	  
	   <aside>
			<div class="bannerArea">
            	<?php dynamic_sidebar( 'banner-widget' ); ?>
			</div>
        </aside> 


  </div>

<?php get_footer(); ?>
