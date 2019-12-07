<?php

//サムネイル画像有効
add_theme_support( 'post-thumbnails', array( 'post' ) );

//投稿サムネイルサイズ指定
add_image_size('thumb300',300,220,true);

//ナビゲーションメニュー
register_nav_menu( 'globalNavi' , 'グローバルナビ' );
register_nav_menu( 'mabailNavi' , 'モバイルナビ');
register_nav_menu( 'footerNavi' , 'フッターナビ');

//アーカイブページ、ウィジェット
function widgetarea_init() {
  register_sidebar(array(
      'name'=>'リストページ',
      'id' => 'list-widget',
      
      ));
}
add_action( 'widgets_init', 'widgetarea_init' );

//バナーエリアウィジェット
  register_sidebar(array(
      'name'=>'メインバナー',
      'id' => 'banner-widget',
      'class' => 'bannerImage',
      'before_widget' => '<div class="bannerImage">',
      'after_widget' => '</div>',
	  'before_title' => '<h2 class="banner_title">',
  	  'after_title' => '</h2>',
      ));

/** 「アーカイブ」ウィジェットの表示件数を設定 */
add_filter( 'widget_archives_args', 'hook_widget_archives_args' );
function hook_widget_archives_args( $args ) {

    // 月別表示
    $args['type'] = 'yearly';

    // 最大出力件数を10件に設定
    $args['limit'] = 10;

    return $args;
}

// パンくずリスト
function breadcrumb($divOption = array("id" => "breadcrumb", "class" => "clearfix")){
global $post;
$str ='';
if(!is_home()&&!is_admin()){ /* !is_admin は管理ページ以外という条件分岐 */
$tagAttribute = '';
foreach($divOption as $attrName => $attrValue){
$tagAttribute .= sprintf(' %s="%s"', $attrName, $attrValue);
}
$str.= '<div'. $tagAttribute .'>';
$str.= '<ul>';
$str.= '<li><a href="'. home_url() .'/">HOME</a></li>';
$str.= '<li>&gt;</li>';

if(is_category()) { //カテゴリーのアーカイブページ
$cat = get_queried_object();
if($cat -> parent != 0){
$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
foreach($ancestors as $ancestor){
$str.='<li><a href="'. get_category_link($ancestor) .'">'. get_cat_name($ancestor) .'</a></li>';
$str.='<li>&gt;</li>';
}
}
$str.='<li>'. $cat -> name . '</li>';
} elseif(is_single()){  //ブログの個別記事ページ
$categories = get_the_category($post->ID);
$cat = $categories[0];
if($cat -> parent != 0){
$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
foreach($ancestors as $ancestor){
$str.='<li><a href="'. get_category_link($ancestor).'">'. get_cat_name($ancestor). '</a></li>';
$str.='<li>&gt;</li>';
}
}
$str.='<li><a href="'. get_category_link($cat -> term_id). '">'. $cat-> cat_name . '</a></li>';
$str.='<li>&gt;</li>';
$str.= '<li>'. $post -> post_title .'</li>';
} elseif(is_page()){    //固定ページ
if($post -> post_parent != 0 ){
$ancestors = array_reverse(get_post_ancestors( $post->ID ));
foreach($ancestors as $ancestor){
$str.='<li><a href="'. get_permalink($ancestor).'">'. get_the_title($ancestor) .'</a></li>';
$str.='<li>&gt;</li>';
}
}
$str.= '<li>'. $post -> post_title .'</li>';
} elseif(is_date()){
			if( is_year() ){
				$str.= '<li>' . get_the_time('Y') . '年</li>';
			} else if( is_month() ){
				$str.= '<li><a href="' . get_year_link(get_the_time('Y')) .'">' . get_the_time('Y') . '年</a></li>';
				$str.= '<li>&gt;</li>';
				$str.= '<li>' . get_the_time('n') . '月</li>';
			} else if( is_day() ){
				$str.= '<li><a href="' . get_year_link(get_the_time('Y')) .'">' . get_the_time('Y') . '年</a></li>';
				$str.= '<li>&gt;</li>';
				$str.= '<li><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('n') . '月</a></li>';
				$str.= '<li>&gt;</li>';
				$str.= '<li>' . get_the_time('j') . '日</li>';
			}
			if(is_year() && is_month() && is_day() ){
				$str.= '<li>' . wp_title('', false) . '</li>';
			}

} elseif(is_search()) { //検索結果表示ページ
$str.='<li>「'. get_search_query() .'」で検索した結果</li>';
} elseif(is_author()){  //投稿者のアーカイブページ
$str .='<li>投稿者 : '. get_the_author_meta('display_name', get_query_var('author')).'</li>';
} elseif(is_tag()){ //タグのアーカイブページ
$str.='<li>タグ : '. single_tag_title( '' , false ). '</li>';
} elseif(is_attachment()){  //添付ファイルページ
$str.= '<li>'. $post -> post_title .'</li>';
} elseif(is_404()){ //404 Not Found ページ
$str.='<li>404 Not found</li>';
} else{ //その他
$str.='<li>'. wp_title('', true) .'</li>';
}
$str.='</ul>';
$str.='</div>';
}
echo $str;
}

//段落挿入と改行入れ替え

add_filter( 'tiny_mce_before_init', 'custom_tiny_mce_forced_root_block' );
function custom_tiny_mce_forced_root_block( $settings ) {
  $settings[ 'forced_root_block' ] = false;
  return $settings;
}

//エディタ用CSS挿入

add_editor_style( 'admin/editor-style.css' );
