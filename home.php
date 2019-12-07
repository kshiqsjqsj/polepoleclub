<?php
/*
Template Name: フロントページ
*/
 ?>

<?php get_header(); ?><div class="flexslider">
			<ul class="slides cf"><!-- 必ずクラスは slides -->
				<li>
				  <a href="http://polepoleclub.jp/about.html" target="_blank">
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
									<span class="slide_text_large">村人たちと守る“エデンの森”</span><br>
								キリマンジャロに今も豊かな緑が残る“エデンの森”<br>
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
								  <a href="https://www.instagram.com/tanzaniapole2club/?hl=ja" target="_blank" class="read_text">こちら</a>
								</div>
						 </div>
			     </li>
			</ul><!--sliders終了-->
		</div><!--flexslider終了-->

		
		<div id="topGnavi" class="gNavi pc">
    <nav>
      <ul class="navInner">
        <li><a href="<?php home_url(); ?>">HOME<br>
          <span class="naviSub">最新情報</span></a> </li>
        <li><a href="<?php home_url(); ?>adout">団体概要<br>
          <span class="naviSub">組織/年次報告,計画</span></a>
        </li>
        <li><a href="<?php home_url(); ?>adout-katudou">活動概要<br>
          <span class="naviSub">海外活動/情報一覧</span></a>
          <ul class="sub-menu">
            <li><a href="<?php home_url(); ?>adout-katudou/gaiyou">活動概要(海外/国内)</a></li>
            <li><a href="<?php home_url(); ?>adout-katudou/news-list/">最新情報一覧</a></li>
          </ul>
        </li>
        <li><a href="<?php home_url(); ?>support">支援/参加方法<br>
          <span class="naviSub">個人/企業の皆様へ</span></a>
          <ul class="sub-menu">
            <li><a href="<?php home_url(); ?>">会員になるには</a></li>
            <li><a href="<?php home_url(); ?>">ご寄付（植林/養蜂等）</a></li>
            <li><a href="<?php home_url(); ?>">マンスリーサポータ（会員/寄付）</a></li>
            <li><a href="<?php home_url(); ?>">企業団体のみなさまへ</a></li>
            <li><a href="<?php home_url(); ?>">アルバイト/ボランティア募集</a></li>
            <li><a href="<?php home_url(); ?>">壁紙募金</a></li>
          </ul>
        </li>
        <li><a href="<?php home_url(); ?>yotei">活動予定<br>
          <span class="naviSub">イベント/ミーティング</span></a>
        </li>
        <li><a href="<?php home_url(); ?>contact">お問い合わせ<br>
          <span class="naviSub">お問い合わせフォーム</span></a> </li>
      </ul>
    </nav>
  </div>
		<div class="content cf" id="front">

		<section class="main_area" id="top">

			  <div class="title cf">
				<h2>WHAT'S NEW<span class="newsSub">最新情報</span></h2>
				<div id="more" class="pc"><a href="<?php home_url(); ?>adout-katudou/news-list/">一覧へ</a>
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
							<?php the_post_thumbnail('thumb300'); ?>

							　<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/no-image.gif" alt="no-img"/>
							　<?php endif; ?>
						  </div>
						  <div class="newsText">
							<!--カテゴリ-->
							 <span class="category-area <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
                  <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
                  </span>
							<!--投稿日を表示-->
							  <span class="kiji-date">
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
			
					<div id="more_mobail" class="smart">
						<a href="<?php home_url(); ?>adout-katudou/news-list/">一覧へ</a>
					</div>
				</section>

				<aside class="right_area" id="sidebar-top">

							<div class="side_slide_subject">
									<h2>収集活動</h2>
									<p>収集活動によって蘇る森<br>
								(同じ植林地の写真です)</p>
							</div>
							 <div id="side_slide"> 
								  <div class="bk-img src1"></div>
								  <div class="bk-img src2"></div>
								  <div class="bk-img src3"></div>
							 </div>
						  <div class="link-text">
								<a href="http://polepoleclub.jp/stamp20160115.pdf" target="_blank" id="download">収集活動チラシダウンロード</a>
								<a href="http://polepoleclub.jp/kakodata.html" target="_blank" id="corporate-achievements">企業のみなさま協力実績</a>
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
