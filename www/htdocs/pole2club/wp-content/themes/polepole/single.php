<?php get_header(); ?>

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

     <div class="content cf space-top">

			<?php breadcrumb(); ?>

			<?php if(have_posts()): the_post(); ?>
						<section class="main_area">
						  <article>
							<div class="title cf">
								<h2><?php the_title(); ?></h2>
								<div id="more" class="pc tablet"><a href="#"><span class="triangle" id="more_triangle"></span>一覧へ</a></div>
							</div>

								<div class="content_area">
									<?php the_content(); ?>
								</div>

						  </article>
						</section>
			<?php  endif; ?>

			<aside class="right_area">
				<div class="list-wrappre">
					<?php dynamic_sidebar( 'list-widget' ); ?>
				</div>
			</aside>
		</div>
	  <!-- コンテンツエリア終了 !-->

		 <aside>
			<div class="bannerArea">
            	<?php dynamic_sidebar( 'banner-widget' ); ?>
			</div>
        </aside> 


		<?php get_footer(); ?>
