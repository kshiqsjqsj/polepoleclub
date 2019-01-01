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
							<div class="title single-title">
								<h2><?php the_title(); ?></h2>
								<div id="more" class="pc"><a href="http://polepoleclub.jp/pole2club/?page_id=85"><span class="triangle" id="more_triangle"></span>一覧へ</a></div>
							</div>
							  
						 <div class="category-date-wrap">
							 <!--カテゴリ-->		
							   <span class="category-area <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
								<?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
							   </span>
							 <!--投稿日を表示-->
								<span class="kiji-date">
								  <i class="fas fa-pencil-alt"></i>
								  <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
									<?php the_time('Y/m/d'); ?>
								  </time>
								</span>
						 </div>
								<div class="content_area clearfix">
									<?php the_content(); ?>
								</div>
				<div id="prev_next">  
			<?php
				$prevpost = get_adjacent_post(false, '', true); //前の記事
				$nextpost = get_adjacent_post(false, '', false); //次の記事
				if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
		     ?>
				<?php
				if ( $prevpost ) { //前の記事が存在しているとき
				echo '<a href="' . get_permalink($prevpost->ID) . '" title="' . get_the_title($prevpost->ID) . '" id="prev" >
				<div id="prev_title">前の記事へ</div>
				' . get_the_post_thumbnail($prevpost->ID, array(100,100)) . '
				<p>' . get_the_title($prevpost->ID) . '</p></a>';
				} else { //前の記事が存在しないとき
				echo  '<div id="prev_no"><a href="' .home_url('/'). '"><div id="prev_next_home"><i class="fa fa-home"></i>
				</div></a></div>';
				}
					
					echo('<a href="http://polepoleclub.jp/pole2club/?page_id=85" id="list-center">一覧へ</a>');
					
				if ( $nextpost ) { //次の記事が存在しているとき
				echo '<a href="' . get_permalink($nextpost->ID) . '" title="'. get_the_title($nextpost->ID) . '" id="next" >  
				<div id="next_title">次の記事へ</div>
				' . get_the_post_thumbnail($nextpost->ID, array(100,100)) . '
				<p>'. get_the_title($nextpost->ID) . '</p></a>';
				} else { //次の記事が存在しないとき
				echo '<div id="next_no"><a href="' .home_url('/'). '"><div id="prev_next_home"><i class="fa fa-home"></i>
				</div></a></div>';
				}
				?>
				<?php } ?>
				</div>
				  <div id="more_mobail" class="smart"><a href="http://polepoleclub.jp/pole2club/?page_id=85">一覧へ</a></div>
			</article>
						</section>
			<?php  endif; ?>
		   
			<aside class="right_area">
				<div class="list-wrappre">
					<?php dynamic_sidebar( 'list-widget' ); ?>
				</div>
			</aside>
		 
		</div><!-- コンテンツエリア終了 !-->

		 <aside>
			<div class="bannerArea">
            	<?php dynamic_sidebar( 'banner-widget' ); ?>
			</div>
        </aside> 


		<?php get_footer(); ?>
