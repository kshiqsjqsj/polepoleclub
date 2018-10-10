
<?php get_header(); ?>

		<div class="flexslider">
			<ul class="slides cf"><!-- 必ずクラスは slides -->
				<li>

				  <a href="#">
					  <img src="<?php echo get_template_directory_uri(); ?>/img/slide01.jpg" alt="PCスライド１" class="pc"/>
				      <img src="<?php echo get_template_directory_uri(); ?>/img/slide1_sp.jpg" alt="SPスライド1" class="smart"/>
				  </a>

  				<div class="text_wrap">
  					<p class="text_innner">
  						<span class="slide_text_large">タンザニア・ポレポレクラブは</span><br>
  						世界遺産キリマンジャロ山で<br>
  						20年間村人たちと植林に取り組んでいます。
  					</p>

  					  <div class="read_wrap">
  						<a href="#" class="read_text">詳しくはこちら</a>
  					  </div>
  				</div>
			  </li>

				<li>
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide02.jpg" alt="PCスライド２" class="pc"/>
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide2_sp.jpg" alt="SPスライド2" class="smart"/>
					</a>

					<div class="text_wrap">
						<p class="text_innner">
							<span class="slide_text_large">キリマンジャロでは100年で</span><br>
								3割の森林が失われ、<br>
								人々の生活を脅かしてます。
						</p>

						  <div class="read_wrap">
							 <a href="#" class="read_text">詳しくはこちら</a>
						  </div>
				    </div>
				</li>

				<li>
					<a href="#">
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide03.jpg" alt="PCスライド３" class="pc"/>
						<img src="<?php echo get_template_directory_uri(); ?>/img/slide3_sp.jpg" alt="SPスライド3" class="smart"/>
					</a>
						<div class="text_wrap">
							<p class="text_innner">
								村人たちと協力して守っている<br>
								<span class="slide_text_large">キリマンジャロ山のエデンの森</span>
							</p>
								<div class="read_wrap">
								  <a href="#" class="read_text">詳しくはこちら</a>
								</div>
						 </div>
			     </li>

			</ul><!--sliders終了-->

		</div><!--flexslider終了-->

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

			<!-- <nav>
				<ul class="navInner">
					<li><a href="#">最新情報<br>
						<span class="naviSub">ニュース/お知らせ</span></a>
					</li>

					<li><a href="#">団体概要<br>
						<span class="naviSub">組織/年次報告・計画</span></a>

							<ul class="child" style="display: none">
								<li><a href="#">組織</a></li>
								<li><a href="#">定款</a></li>
								<li><a href="#">年次報告/計画</a></li>
							</ul>
					</li>

					<li><a href="#">活動概要<br>
						<span class="naviSub">海外活動/国内活動</span></a>

							<ul class="child" style="display: none">
								<li><a href="#">海外活動概要</a></li>
								<li><a href="#">国内活動概要</a></li>
							</ul>
					</li>

					<li><a href="#">支援/参加方法<br>
						<span class="naviSub">個人/企業の皆様へ</span></a>

							<ul class="child" style="display: none">
									<li><a href="#">会員になるには</a></li>
									<li><a href="#">ご寄付（植林/養蜂等）</a></li>
								<li><a href="#">マンスリーサポータ（会員/寄付）</a></li>
								<li><a href="#">企業団体のみなさまへ</a></li>
								<li><a href="#">アルバイト/ボランティア募集</a></li>
								<li><a href="#">Book募金</a></li>
								<li><a href="#">壁紙募金</a></li>
								<li><a href="#">NPOメンバーズカード</a></li>
							</ul>
					</li>

					<li><a href="#">活動予定<br>
						<span class="naviSub">イベント/ミーティング</span></a>

						    <ul class="child" style="display: none">
								<li><a href="#">イベント</a></li>
								<li><a href="#">ミーティング</a></li>
							</ul>
					</li>

					<li><a href="<?php echo home_url(); ?>/contact/">お問い合わせ<br>
						<span class="naviSub">お問い合わせフォーム</span></a>
					</li>

				</ul>
			</nav> -->



		<div class="content cf">

				<section class="main_area">

          <div class="newsTitle cf">
            <h2>WHAT'S NEW<span class="newsSub">最新情報</span></h2>
            <div id="more" class="pc tablet"><a href="#"><span class="triangle" id="more_triangle"></span>一覧へ</a></div>
          </div>

          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article <?php post_class( 'newsTopic' ); ?>>
              <a href="<?php the_permalink(); ?>">
                <!--画像を追加-->
                <?php if( has_post_thumbnail() ): ?>
                  <?php the_post_thumbnail('medium'); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/no-image.gif" alt="no-img"/>
                <?php endif; ?>
                <div class="newsText">
                  <!--投稿日を表示-->
                  <span class="kiji-date">
                    <i class="fas fa-pencil-alt"></i>
                    <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                      <?php echo get_the_date(); ?>
                    </time>
                  </span>

                  <!--カテゴリ-->
                  <?php if (!is_category()): ?>
                    <?php if( has_category() ): ?>
                    <span class="category">
                      <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
                    </span>
                    <?php endif; ?>
                  <?php endif; ?>

                  <!--タイトル-->
                  <h3><?php the_title(); ?></h3>
                  <!--抜粋-->
                  <?php the_excerpt(); ?>
                </div>
              </a>
            </article>
          <?php endwhile; endif; ?><!--ループ終了-->

				   <!-- <article>


					    <div class="newsTopic">
							<div class="thuamneil"><img src="img/news_image.jpg" alt="サムネイル1" class="colleft"></div>
							<div class="newsText">
								<time datetime="2018.03.21">2018.03.21</time>
								<span class="category">カテゴリ1</span>
								<h3>ホームページリニューアルホームページリニューアルホームページリニューアルホームページ</h3>
							</div>
						</div>

					    <div class="newsTopic">
							<div class="thuamneil"><img src="img/news_image.jpg" alt="サムネイル1" class="colleft"></div>
							<div class="newsText">
								<time datetime="2018.03.21">2018.03.21</time>
								<span class="category">カテゴリ1</span>
								<h3>ホームページリニューアルホームページリニューアルホームページリニューアルホームページ</h3>
							</div>
						</div>

					    <div class="newsTopic">
							<div class="thuamneil"><img src="img/news_image.jpg" alt="サムネイル1" class="colleft"></div>
							<div class="newsText">
								<time datetime="2018.03.21">2018.03.21</time>
								<span class="category">カテゴリ1</span>
								<h3>ホームページリニューアルホームページリニューアルホームページリニューアルホームページ</h3>
							</div>
						</div>

					   <div class="newsTopic">
							<div class="thuamneil"><img src="img/news_image.jpg" alt="サムネイル1" class="colleft"></div>
							<div class="newsText">
								<time datetime="2018.03.21">2018.03.21</time>
								<span class="category">カテゴリ1</span>
								<h3>ホームページリニューアルホームページリニューアルホームページリニューアルホームページ</h3>
							</div>
						</div>
					   <div class="newsTopic">
							<div class="thuamneil"><img src="img/news_image.jpg" alt="サムネイル1" class="colleft"></div>
							<div class="newsText">
								<time datetime="2018.03.21">2018.03.21</time>
								<span class="category">カテゴリ1</span>
								<h3>ホームページリニューアルホームページリニューアルホームページリニューアルホームページ</h3>
							</div>
						</div>
					  <div class="newsTopic">
							<div class="thuamneil"><img src="img/news_image.jpg" alt="サムネイル1" class="colleft"></div>
							<div class="newsText">
								<time datetime="2018.03.21">2018.03.21</time>
								<span class="category">カテゴリ1</span>
								<h3>ホームページリニューアルホームページリニューアルホームページリニューアルホームページ</h3>
							</div>
						</div>

					   <div class="smart" id="toNewsList">
					   	<a href="#">一覧へ</a>
					   </div>

					</article> -->
				</section>

  <?php get_sidebar(); ?>

			<aside>
				<div class="bannerArea">
					<div class="bannerImage">
						<a href="#"><img src="img/banner.jpg" width="270px" alt="ダミー"></a>
					</div>

					<div class="bannerImage">
						<a href="#"><img src="img/banner.jpg" width="270px" alt="ダミー"></a>
					</div>

					<div class="bannerImage">
						<a href="#"><img src="img/banner.jpg" width="270px" alt="ダミー"></a>
					</div>

					<div class="bannerImage">
						<a href="#"><img src="img/banner.jpg" width="270px" alt="ダミー"></a>
					</div>

					<div class="bannerImage">
						<a href="#"><img src="img/banner.jpg" width="270px" alt="ダミー"></a>
					</div>

					<div class="bannerImage">
						<a href="#"><img src="img/banner.jpg" width="270px" alt="ダミー"></a>
					</div>

				</div>
			</aside>

		</div><!-- コンテンツ終了 !-->
<?php get_footer(); ?>
