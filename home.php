<?php
/*
Template Name: フロントページ
*/
 ?>

<?php get_header(); ?>
		<div class="flexslider">
			<ul class="slides cf"><!-- 必ずクラスは slides -->
				<li>
				  <a href="http://polepoleclub.jp/about.html">
					  <img src="<?php echo get_template_directory_uri(); ?>/img/slide01.jpg" alt="PCスライド１" class="pc tablet"/>
				    <img src="<?php echo get_template_directory_uri(); ?>/img/slide1_sp.jpg" alt="SPスライド1" class="smart"/>
				  </a>
  				<div class="text_wrap">
  					<p class="text_innner">
  						<span class="slide_text_large">世界遺産の森を守る</span><br>
  						わたしたちは世界遺産キリマンジャロで<br>
  						20年間村人たちと森林回復のための植林に取り組んでいます
  					</p>
  					  <div class="read_wrap">
  						 <a href="#" class="read_text">詳しくはこちら</a>
  					  </div>
  				</div>
			  </li>

				<li>
					<a href="http://polepoleclub.jp/about.html" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide02.jpg" alt="PCスライド２" class="pc tablet"/>
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide2_sp.jpg" alt="SPスライド2" class="smart"/>
					</a>

					<div class="text_wrap">
						<p class="text_innner">
							<span class="slide_text_large">キリマンジャロの森はいま</span><br>
							  キリマンジャロ山ではこの100年で<br>
								3割の森林が失われ人々の生活を脅かしてます
						</p>

						  <div class="read_wrap">
							 <a href="#" class="read_text">詳しくはこちら</a>
						  </div>
				    </div>
				</li>

				<li>
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide03.jpg" alt="PCスライド３" class="pc tablet"/>
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide3_sp.jpg" alt="SPスライド3" class="smart"/>
					</a>
						<div class="text_wrap">
							<p class="text_innner">
									<span class="slide_text_large">村人たちと守るエデンの森</span><br>
								キリマンジャロに今も豊かな緑が残るエデンの森<br>
								村人たちは自慢のその楽園の森が危機を迎えています<br>
								私たちは彼らと協力してこの森を守ろうとしています
							</p>
								<div class="read_wrap">
								  <a href="#" class="read_text">詳しくはこちら</a>
								</div>
						 </div>
			     </li>
				<li>
					<a href="https://www.instagram.com/tanzaniapole2club/?hl=ja" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide04.jpg" alt="PCスライド4" class="pc tablet"/>
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide04_sp.jpg" alt="SPスライド4" class="smart"/>
					</a>
						<div class="text_wrap">
							<p class="text_innner">
									<span class="slide_text_large">Gallery</span><br>
							</p>
								<div class="read_wrap">
								  <a href="https://www.instagram.com/tanzaniapole2club/?hl=ja" target="_blank" class="read_text">詳しくはこちら</a>
								</div>
						 </div>
			     </li>
			</ul><!--sliders終了-->
		</div><!--flexslider終了-->

<div id="topGnavi" class="gNavi pc">
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

		<section class="main_area" id="top">

			  <div class="title cf">
				<h2>WHAT'S NEW<span class="newsSub">最新情報</span></h2>
				<div id="more" class="pc"><a href="http://polepoleclub.jp/pole2club/?page_id=85"><span class="triangle" id="more_triangle">       </span>一覧へ</a>
				</div>
			  </div>

				
					<?php
				// WP_Queryのパラメータを指定,新着情報5件抜粋
				$args = array(
				    'posts_per_page' => 5,
				    'orderby' => 'date',
            'order' => 'DESC'
				);
				// WP_Queryクラスのインスタンスを作成
				$the_query = new WP_Query( $args );

				// ループ開始
				while ( $the_query->have_posts() ) :
					// カスタムクエリの投稿データをセット
					$the_query->the_post();?>

				<article <?php post_class( 'newsTopic' ); ?>>
						<a href="<?php the_permalink(); ?>">
										<!--画像を追加-->
						  <div class="thumbnail-wrap">
											<?php if( has_post_thumbnail() ): ?>
											<?php the_post_thumbnail('medium'); ?>

										<?php else: ?>
											<img src="<?php echo get_template_directory_uri(); ?>/img/no-image.gif" alt="no-img"/>
										<?php endif; ?>
						  </div>
						  <div class="newsText">
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
												<i class="fas fa-pencil-alt"></i>
												<time datetime="<?php echo get_the_date( 'Y/m/d' ); ?>">
													<?php the_time('Y/m/d'); ?>
												</time>
											</span>

											<!--タイトル-->
											<h3><?php the_title(); ?></h3>
										</div>
						</a>
				 </article>

    				<?php endwhile;
    				// ループ終了
    				// メインクエリの投稿データに戻す
    				wp_reset_postdata(); ?>
            <div id="more_mobail" class="smart"><a href="http://polepoleclub.jp/pole2club/?page_id=85">一覧へ</a></div>
				</section>

				<aside class="right_area" id="sidebar-top">

							<div class="side_slide_subject">
									<h2>収集活動</h2>
									<p>収集活動によって蘇る森</p>
							</div>
							 <div id="side_slide"> 
								  <div class="bk-img src1"></div>
								  <div class="bk-img src2"></div>
								  <div class="bk-img src3"></div>
							 </div>
						  <div class="link_text">
								<a href="http://polepoleclub.jp/stamp20160115.pdf" target="_blank">チラシダウンロード</a>
								<a href="http://polepoleclub.jp/kakodata.html" target="_blank">協力実績</a>
						  </div>

				  <div class="side_bannar">
					  <div class="side_banner_image">
						  <a href="http://polepoleclub.jp/kihu.html" target="_blank"><img src="<?php echo get_template_directory_uri(); 
							  ?>/img/banner_donnation.jpg" alt="寄付のご案内"></a>
					  </div>
					  <div class="side_banner_image">
						  <a href="http://polepoleclub.jp/jimukyoku.html" target="_blank"><img src="<?php echo get_template_directory_uri(); 
							  ?>/img/banner_volunteer.jpg" alt="ボランテイア募集"></a>
					  </div>
				  </div>
			    </aside>

			<aside>
				<div class="bannerArea">
					<?php dynamic_sidebar( 'banner-widget' ); ?>
				</div>
			</aside> 

	</div><!-- コンテンツ終了 !-->
<?php get_footer(); ?>
