<?php
/*
Template Name: ランディングページボトックス
*/

?>
<head>
<meta charset="UTF-8">
<title>
<?php bloginfo('name'); ?>
</title>
<meta name="viewport" content="width=device-width">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?<?php echo filemtime(get_stylesheet_directory() . '/css/style.css'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lp.css?<?php echo filemtime(get_stylesheet_directory() . '/css/lp.css'); ?>">
<script>
  (function(d) {
    var config = {
      kitId: 'yrq5rir',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<?php wp_head(); ?>

</head>
<body id="lp2" class="lps">
<div class="wrapper">
  <?php if (wp_is_mobile()) : ?>
  <header class="fv-sp"> <h1><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/sp/fv_sp.jpg" alt="ボトックス注入治療で
ナチュラルな若返りを"></h1> </header>
  <?php else: ?>
  <header class="lp-header">
    <div class="header-inner flex al-cent">
      <div class="logo tc"><a href="<?php echo home_url('/'); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.png" alt="FMUI BEAUTY CLINIC"></a></div>
      <div class="lp-cv-btn flex"> <a class="" href="https://fumibeauty.reserve.ne.jp/sp/index.php?" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/header_btn01.png" alt="来院予約"></a> <a class="btn2" href="<?php echo home_url('/'); ?>contact" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/btn02.png" alt="お問合わせ"></a> </div>
    </div>
  </header>
  <div class="lp-fv cf">
    <div class="fv-inner">
      <div class="box">
        <p class="cach"><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/fv_cach01.png" alt="目尻の笑いジワ、眉間や額の根深い表情ジワ諦めていませんか？"></p>
        <h1><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/fv_cach02.png" alt="ボトックス注入治療で
ナチュラルな若返りを"></h1>
        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/fv_img.png" alt="即効性が
ある少ないダウンタイム自然な仕上がり"></div>
      </div>
    </div>
  </div>
  <!--FV END-->

  <?php endif; ?>
  <?php if (wp_is_mobile()) : ?>
  <?php else: ?>
  <section class="area2 area-bgs" id="bg1">
    <div class="lp-inner cf">
      <div class="box">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/area2_h2.png" alt="こんなことでお悩みの方"></h2>
        <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/area2_img.png" alt="ほうれい線顔のしわ"></div>
      </div>
    </div>
  </section>
  <?php endif; ?>
  <section class="area3 area-bgs" id="bg2">
    <div class="lp-inner">
      <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area3_img.png" alt="点滴"></div>
      <h2><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/area3_h2.png" alt="オーダーメイドヒアルロン酸注入治療なら"></h2>
      <ul class="thumbs flex">
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/area3_thumb01.jpg" alt="眉間や目尻など
表情じわの解消"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/area3_thumb02.jpg" alt="エラ張り解消・
小顔治療"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/area3_thumb03.jpg" alt="しわ・たるみの解消"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/area3_thumb04.jpg" alt="汗の抑制"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/area3_thumb05.jpg" alt="脚やせ"></li>
        <li><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/area3_thumb06.jpg" alt="肩こり解消"></li>
      </ul>
    </div>
  </section>
  <div class="lp-cv">
    <div class="top">
      <h2 class="cw ls1 tc">ご予約・お問合わせはこちらから</h2>
    </div>
    <div class="lp-inner">
      <div class="top-cont flex al-cent"> <a href="tel:0663722323" class="cw ls2 tel">06-6372-2323</a>
        <p class="sm tc cw time">受付時間<br>
          10:00～18:00 </p>
      </div>
      <div class="lp-cv-btn flex"> <a href="https://fumibeauty.reserve.ne.jp/sp/index.php?" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/cv_btn01.png" alt="来院予約
"></a> <a href="<?php echo home_url('/'); ?>contact" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/cv_btn02.png" alt="お問合わせ
"></a> </div>
    </div>
  </div>
  <section class="area7">
    <div class="lp-inner">
      <h2 class="tc"><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/area7_h2.png" alt="当院ではただヒアルロン酸を注入するだけではありませんお顔全体のバランスが整うように"></h2>
      <p class="cach tc"><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/area7_cach01.png" alt="より自然に、より美しくトータルフェイシャルトリートメントを行います。"></p>
      <div class="box mb25 box-size">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/area7_cach02.png" alt="長年気になっていた表情じわたった数分の治療で解消します"></h3>
        <div class="cont flex">
          <div class="desc gosic gd"> ボトックス(botox)とは、A型ボツリヌス毒素から抽出した、毒性のない製剤(毒性のないA型ボツリヌストキシン)の事で、筋肉を弛緩させる作用があります。
            これをしわの筋肉に注射することにより、筋肉が弛緩、それを補うように周囲の筋肉が皮膚をひっぱる事により、しわが消え、効果が持続する間はしわが出来にくくなります。 </div>
          <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp2/area7_thumb01.png" alt="画像"> </div>
        </div>
      </div>
      <div class="box box-size">
        <h3><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/area7_cach03.png" alt="ヒアルロン酸とボトックスの違い"></h3>
        <ul class="wrap flex">
          <li>
            <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/area7_thumb02.png" alt="画像"></div>
            <p class="gosic gd ls1">加齢とともに皮下の組織のボリュームが低下し、皮膚の張りがなくなりたるんできますので、ボリュームを適切に補うのがヒアルロン酸注射です。</p>
          </li>
          <li>
            <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/area7_thumb03.png" alt="画像"></div>
            <p class="gosic gd ls1">ヒアルロンに対して、ボトックスは過剰に働く表情筋の働きをブロックすることで、表情筋に伴うシワを治療もしくは予防します。</p>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section class="area8 area-bgs" id="bg4">
    <div class="lp-inner">
      <div class="box">
        <h2><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/area8_cach.png" alt="お一人お一人の悩みに寄り添い、
確かな技術とセンスでその方に合った
自然な美しさをご提案いたします。"></h2>
        <p class="gosic mb25">私たちは丁寧なカウンセリングを心がけており、<br>
          患者様のご要望やお悩みに寄り添い、<br>
          その方に合った治療法をご提案いたします。<br>
          またナチュラルで違和感のない仕上がりを重視します。</p>
        <p class="gosic"> <span class="fs-midle cp mincho">もちろん部分的なご相談も可能です。</span><br>
          当院は全体のバランスをみてご提案を行う<br>
          トータルフェイシャルトリートメントをおすすめしておりますが、<br>
          部分的な注入も行っております。<br>
          是非お気軽にご相談も可能ください。 </p>
      </div>
    </div>
  </section>
  <section class="area10 area-bgs" id="bg5">
    <div class="lp-inner cf">
      <div class="box">
        <h2 class="cp ls2">安心・安全な治療をご提案いたします。</h2>
        <p class="gosic">日本の厚生労働省で承認を得ている製剤やFDAの承認を得ている安全性の確立された製剤を特におすすめしています。<br>
          またなるべくダウンタイムやリスク、副作用のない治療をおすすめします。</p>
      </div>
    </div>
  </section>
  <?php if (have_rows('pr2', 155)): ?>
  <section class="case area-bgs" id="bg6">
    <div class="lp-inner">
      <h2 class="gd tc">症例写真</h2>
      <div class="case-photos flex">
       <?php while (have_rows('pr2', 155)) : the_row(); ?>
        <!-- サブリピートスタート-->
        <?php if (have_rows('pr2_sub')): ?>
        <?php while (have_rows('pr2_sub', 155)) : the_row(); ?>
        <div class="case-box">
          <div class="ba-box flex">
            <div class="box">
              <div class="thumb"> <img src="<?php the_sub_field('befor_p', 155); ?>" alt=""> </div>
              <p class="gd tc">
                <?php the_sub_field('befor_title', 155); ?>
              </p>
            </div>
            <!---->

            <div class="box">
              <div class="thumb"> <img src="<?php the_sub_field('after_p', 155); ?>" alt=""> </div>
              <p class="gd tc">
                <?php the_sub_field('after_title', 155); ?>
              </p>
            </div>
            <!---->
            <div class="arw"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/case_arrow.png" alt=">"></div>
          </div>
          <!---->
        </div>
        <!--./ case-box-->
        <?php endwhile; ?>
        <?php endif; ?>
        <!--  サブリピートEND-->
        <?php if (get_sub_field('text', 155)): ?>
        <div class="comment cp gosic box-size">
          <?php the_sub_field('text', 155); ?>
        </div>
        <?php endif; ?>
        <?php endwhile; ?>
        <div class="note box-size">
          <h4 class="tc"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/note.png" alt="注意事項"></h4>
          <p class="gosic tc pc">個人差がありますが、注入後、内出血が生じることがあります。<br>
            内出血によってアザができた場合は1～2週間程度で消滅します。<br>
            軽い腫れや軽度の疼痛が出る方もいますが、多くの場合翌日には治ります。</p>
          <p class="gosic tc sp">個人差がありますが、注入後、内出血が生じることがあります。内出血によってアザができた場合は1～2週間程度で消滅します。軽い腫れや軽度の疼痛が出る方もいますが、多くの場合翌日には治ります。</p>
        </div>
      </div>
    </div>
  </section>
  <?php else: ?>
  <?php endif; ?>
  <section class="infu">
    <div class="lp-inner">
      <h2 class="gd tc">注入可能部位</h2>
      <div class="thumb"> <img src="<?php echo get_template_directory_uri(); ?>/img/lp2/infu_img.png" alt="注入可能部位"> </div>
    </div>
  </section>
  <section class="price">
    <div class="lp-inner">
      <h2 class="gd tc">料金</h2>
      <!--   <table class="gosic">
        <thead>
          <tr>
            <th scope="col">部位</th>
            <th scope="col">目安量</th>
            <th scope="col">値段</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>目の下</td>
            <td>0cc～0cc</td>
            <td>お問い合わせください</td>
          </tr>
          <tr>
            <td>鼻</td>
            <td>0cc～0cc</td>
            <td>お問い合わせください</td>
          </tr>
          <tr>
            <td>頬</td>
            <td>0cc～0cc</td>
            <td>お問い合わせください</td>
          </tr>
          <tr>
            <td>ほうれい線</td>
            <td>0cc～0cc</td>
            <td>お問い合わせください</td>
          </tr>
          <tr>
            <td>唇</td>
            <td>0cc～0cc</td>
            <td>お問い合わせください</td>
          </tr>
          <tr>
            <td>顎</td>
            <td>0cc～0cc</td>
            <td>お問い合わせください</td>
          </tr>
        </tbody>
      </table>-->

      <table class="pt2 gosic mb35">
        <thead>
          <tr>
            <th scope="col">注入部位</th>
            <th scope="col">部位数</th>
            <th scope="col">値段(税別)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="5"style="background-color: #fef0f4; vertical-align: middle;" class="left">スタンダード部位
              目尻、眉間、額、あご、鼻 <span class="sm">(1ヶ月以内の追加・調整無料、針代無料、再診料無料)<br>
<span class="sm">※アラガン社ボトックスビスタ使用</span></td>
            <td>1部位</td>
            <td class="right">¥25,000</td>
          </tr>
          <tr>
            <td>2部位</td>
            <td class="right">¥40,000</td>
          </tr>
          <tr>
            <td>3部位</td>
            <td class="right">¥50,000</td>
          </tr>
          <tr>
            <td>4部位</td>
            <td class="right">¥60,000</td>
          </tr>
          <tr>
            <td>5部位</td>
            <td class="right">¥70,000</td>
          </tr>
        </tbody>
      </table>
      <table class="pt2 gosic mb35">
        <thead>
          <tr>
            <th scope="col">注入部位</th>
            <th scope="col">部位数</th>
            <th scope="col">値段(税別)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="2"style="background-color: #fef0f4; vertical-align: middle;" class="left">アディショナル部位口角、目頭、口唇(口すぼめ時のしわ) 、眉下(ブローリフト)、アーモンドアイ(たれ目)<br>
              <span class="sm">※アラガン社ボトックスビスタ使用</span></td>
            <td>スタンダード部位に追加１部位</td>
            <td class="right">¥10,000</td>
          </tr>
          <tr>
            <td>アディショナル部位のみ１部位</td>
            <td class="right">¥20,000</td>
          </tr>
        </tbody>
      </table>

        <table class="pt2 gosic mb35">
        <thead>
          <tr>
            <th scope="col" colspan="2">製剤名<br>
            <span class="sm">※アラガン社ボトックスビスタ使用</span></th>
            <th scope="col">値段(税別)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="2">エラボトックス</td>
            <td class="right">¥50,000</td>
          </tr>
          <tr>
            <td colspan="2">首(ネフェルティティリフト)</td>
            <td class="right">¥65,000</td>
          </tr>
          <tr>
            <td colspan="2">マイクロボトックス(額＆眉間)</td>
            <td class="right">¥50,000</td>
          </tr>
          <tr>
            <td colspan="2">マイクロボトックス(鼻＆鼻横の頬)</td>
            <td class="right">¥50,000</td>
          </tr>
          <tr>
            <td colspan="2">わき汗</td>
            <td class="right">¥65,000</td>
          </tr>
          <tr>
            <td colspan="2">ガミースマイル</td>
            <td class="right">¥30,000</td>
          </tr>
             <tr>
            <td colspan="2">肩こり両側</td>
            <td class="right">¥74,800</td>
          </tr>
            <tr>
            <td colspan="2">肩こり両側 4回セット</td>
            <td class="right">1回あたり¥49,800<br>
              <span class="sm">¥199,200</span></td>
          </tr>

            <tr>
            <td colspan="2">脚痩せ(ふくらはぎ両脚)</td>
            <td class="right">¥268,000</td>
          </tr>

        </tbody>
      </table>


        <table class="pt2 gosic mb35">
        <thead>
          <tr>
            <th scope="col" colspan="2" class="bg-gth">ボツリヌス・トキシン<br>
            <span class="sm">(リジェノックスの場合)</span></th>
            <th scope="col" class="bg-gth">値段(税別)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="2" class="bg-g2 gd-i">肩こり両側</td>
            <td class="right bg-g2 gd-i">¥34,800</td>
          </tr>

            <tr>
            <td colspan="2" class="bg-g gd-i">脚痩せ(ふくらはぎ両脚)</td>
            <td class="right bg-g gd-i">¥72,600</td>
          </tr>
        </tbody>
      </table>

      <!--<table class="pt2 gosic mb15">
        <thead>
          <tr class="bg-gth">
            <th scope="col">製剤名</th>
            <th scope="col">部位</th>
            <th scope="col">値段(税別)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="3"style="vertical-align: middle;" class="left bg-g gd-i">ボツリヌス・トキシン注入<br>
(リジェノックス)</td>
            <td class="bg-g2 gd-i">肩こり両側</td>
            <td class="right bg-g2 gd-i">¥34,800</td>
          </tr>
          <tr class="bg-g">
            <td class="gd-i">脚痩せ(ふくらはぎ両脚)</td>
            <td class="right gd-i">¥72,600</td>
          </tr>
        </tbody>
      </table>-->
       <!-- <p class="note tc">「アラガン社以外の製剤も取り扱っており、お求めやすい価格でご提供しています。」</p>-->
     <!-- <table class="pt2 gosic mb35">
        <thead>
          <tr>
            <th scope="col">製剤名</th>
            <th scope="col">部位</th>
            <th scope="col">値段(税別)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td rowspan="3"style="background-color: #fef0f4; vertical-align: middle;" class="left">ボツリヌス・トキシン注入 アラガン</td>
            <td>肩こり両側</td>
            <td class="right">¥74,800</td>
          </tr>
          <tr>
            <td>4回セット</td>
            <td class="right">1回あたり¥49,800<br>
              <span class="sm">(総額¥199,200)</span></td>
          </tr>
          <tr>
            <td>脚痩せ(ふくらはぎ両脚)</td>
            <td class="right">¥268,000</td>
          </tr>
        </tbody>
      </table>-->

    </div>
  </section>
  <div class="lp-cv">
    <div class="top">
      <h2 class="cw ls1 tc">ご予約・お問合わせはこちらから</h2>
    </div>
    <div class="lp-inner">
      <div class="top-cont flex al-cent"> <a href="tel:0663722323" class="cw ls2 tel">06-6372-2323</a>
        <p class="sm tc cw time">受付時間<br>
          10:00～18:00 </p>
      </div>
      <div class="lp-cv-btn flex"> <a href="https://fumibeauty.reserve.ne.jp/sp/index.php?" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/cv_btn01.png" alt="来院予約"></a> <a href="<?php echo home_url('/'); ?>contact" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/cv_btn02.png" alt="お問い合わせ"></a> </div>
    </div>
  </div>
  <section class="flow">
    <div class="lp-inner">
      <h2 class="gd tc">施術の流れ</h2>
      <ul class="steps">
        <li class="box-size flex">
          <div class="text">
            <h3 class="cp2 ls1">予約</h3>
            <p class="gosic cp2 ls1"> お電話・予約システムにてご予約をよろしくお願いいたします。来院前のご不明な点があれば、お気軽にご相談下さいませ。 </p>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step1_thumb.png" alt="予約"></div>
          <div class="num"><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/step1.png" alt="1"></div>
          <div class="arw"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step_arw.png" alt=">"></div>
        </li>
        <li class="box-size flex">
          <div class="text">
            <h3 class="cp2 ls1">ご来院</h3>
            <p class="gosic cp2 ls1"> ご予約された、日時でのご来院をお願いいたします。カウンセリングでお客様のお悩みをお聞かせ下さいませ。 </p>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step3_thumb.png" alt="ご来院"></div>
          <div class="num"><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/step2.png" alt="2"></div>
          <div class="arw"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step_arw.png" alt=">"></div>
        </li>
        <li class="box-size flex">
          <div class="text">
            <h3 class="cp2 ls1">診察・カウンセリング</h3>
            <p class="gosic cp2 ls1"> 経験豊富な医師が診察致します。治療について些細なことでもご納得のいくまでご相談下さい。 </p>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step2_thumb.png" alt="診察・カウンセリング"></div>
          <div class="num"><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/step3.png" alt="3"></div>
          <div class="arw"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step_arw.png" alt=">"></div>
        </li>
          <li class="box-size flex">
          <div class="text">
            <h3 class="cp2 ls1">お会計</h3>
            <p class="gosic cp2 ls1">施術の前にお会計をお願いいたします。<br>
当院は、下記のクレジットカードのご利用が可能です。</p>
              <div class="card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/common/card.png?0918" alt="カード"></div>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step5_thumb.png" alt="診察・カウンセリング"></div>
          <div class="num"><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/step4.png" alt="4"></div>
          <div class="arw"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step_arw.png" alt=">"></div>
        </li>
        <li class="box-size flex mb0">
          <div class="text">
            <h3 class="cp2 ls1">施術</h3>
            <p class="gosic cp2 ls1"> 痛みを極力に抑え、安全第一に責任を持って施術いたします。施術は全て有資格者が行いますのでご安心下さいませ。 </p>
          </div>
          <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/step4_thumb.png" alt="施術"></div>
          <div class="num"><img src="<?php echo get_template_directory_uri(); ?>/img/lp2/step5.png" alt="5"></div>
        </li>
      </ul>
    </div>
  </section>
  <section class="lp-qa">
    <div class="lp-inner">
      <h2 class="gd tc">よくある質問</h2>
      <div class="swiper-container slide-p2 swiper5 cont">
        <div class="swiper-wrapper gosic">
          <?php
          $args = array(
            'post_type' => 'faq',
            'tax_query' => array(
              array(
                'taxonomy' => 'faq_kind',
                'field' => 'slug',
                'terms' => array( 'bx' )
              )
            ),
            'orderby' => 'date',
            'order' => 'DESC',
          );
          $the_query = new WP_Query($args);
          while ($the_query->have_posts()): $the_query->the_post();
          ?>

          <!-- Slides -->

          <div class="qas gd box-size swiper-slide">
            <p class="qa-txt qa-tit mb15 cp2"><span class="q">Q</span>
              <?php the_title(); ?>
            </p>
            <div class="qa-txt qa-answer text-over gd"><span class="a">A</span>
              <?php remove_filter('the_content', 'wpautop'); ?>
              <?php the_content(); ?>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <div class="swiper-button-prev prev2"></div>
        <div class="swiper-button-next next2"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>
  <section class="lp-doctor">
    <div class="lp-inner">
      <div class="box flex">
        <div class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/lp1/doctor.png" alt="先山 史先生"></div>
        <div class="desc">
          <h2 class="cp3 ls2"> <span>ふみビューティークリニック梅田 院長</span> 先山 史 </h2>
          <dl class="gosic gd flex">
            <dt>経歴</dt>
            <div>
              <dd><span class="year">2003年</span><span class="text">帝京大学医学部　卒業</span></dd>
              <dd><span class="year">2003年</span><span class="text">帝京大学病院形成外科　入局</span></dd>
              <dd><span class="year">2011年</span><span class="text">市立旭川病院皮膚科　入局</span></dd>
              <dd><span class="year">2015年</span><span class="text">トキコクリニック　淀屋橋院長　就任</span></dd>
              <dd><span class="year">2016年</span><span class="text">トキコクリニック　梅田院長　就任</span></dd>
              <dd><span class="year">2019年</span><span class="text">ふみビューティークリニック梅田　<br class="sp">院長　就任</span></dd>
            </div>
          </dl>
          <dl class="gosic gd flex">
            <dt>所属</dt>
            <div>
              <dd>ジュビダームビスタ認定医、ボトックスビスタ認定医、
                日本形成外科学会、日本抗加齢学会、日本美容皮膚科学会</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </section>
  <section class="info">
    <div class="lp-inner">
      <h2 class="gd tc ls1">クリニック情報</h2>
      <div class="box flex">
        <div class="map-cont">
          <div class="map" id="map"> </div>
          <a href="https://www.google.com/maps/place/%E3%80%92530-0012+%E5%A4%A7%E9%98%AA%E5%BA%9C%E5%A4%A7%E9%98%AA%E5%B8%82%E5%8C%97%E5%8C%BA%E8%8A%9D%E7%94%B0%EF%BC%92%E4%B8%81%E7%9B%AE%EF%BC%98%E2%88%92%EF%BC%93%EF%BC%93+%E8%8A%9D%E7%94%B0%E3%83%93%E3%83%AB/@34.7071032,135.4959917,17z/data=!4m2!3m1!1s0x6000e68fc13f248b:0xc11dcd33c073a9ec" target="_blank" class="cp gosic">Google Mapで見る</a> </div>
        <div class="desc gosic">
          <div class="clinic-info gd mb10"> 大阪市北区芝田2丁目8-33 芝田ビル3F<br>
            <span>TEL 06-6372-2323</span><br>
            FAX 06-6372-2324<br>
          </div>
          <p class="cp time">営業時間</p>
          <table>
            <tbody>
              <tr>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
                <th>日</th>
              </tr>
              <tr>
                <td>〇<br>
                  10-18時</td>
                <td>〇<br>
                  10-18時</td>
                <td>〇<br>
                  10-18時</td>
                <td>-<br>
                  定休日</td>
                <td>〇<br>
                  10-18時</td>
                <td>〇<br>
                  10-17時</td>
                <td>-<br>
                  定休日</td>
              </tr>
            </tbody>
          </table>
          <div class="clinic-info gd"> 月、火、水、金  10時～18時<br>
            土  10時～17時<br>
            木、日、祝が定休日になります。 </div>
        </div>
      </div>
    </div>
  </section>
  <!--MAP END-->

  <footer class="lp-footer">
    <div class="inner">
      <p class="copy cp"><small>fumi beauty cinic(ふみビューティクリニック梅田)美容皮膚科・形成外科・皮膚科<br>
        Copyright(C) fumi beauty clinic All Rights Reserved.</small></p>
    </div>
  </footer>
  <a href="#" class="page-top bounce"><img src="<?php echo get_template_directory_uri(); ?>/img/common/scrool_up.svg" alt="scrool-up"></a> </div>
<!--WRAPPER END-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.inview.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<script>
    function initMap() {
        var latlng = new google.maps.LatLng( 34.707103, 135.495992 );
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: latlng
        });

             var marker = new google.maps.Marker({
          position: latlng,
          map: map
        });

        /*=========ここから追加=========*/
        var mapStyle = [ {
            "stylers": [ {
            "saturation": -100
            } ]
        } ];
        var mapType = new google.maps.StyledMapType(mapStyle);
            map.mapTypes.set( 'GrayScaleMap', mapType);
            map.setMapTypeId( 'GrayScaleMap' );
        /*=========ここまで追加=========*/
      }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBwr6DPo5X5S4CbkcKpSV5atpzNnKAifI&callback=initMap"></script>
<?php wp_footer(); ?>
</body>
</html>
