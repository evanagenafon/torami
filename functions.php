<?PHP

//ウェジェット
register_sidebar(array('id'=>'sidebar-1'));

//ナビ
register_nav_menus(array(
	'navigation'=>'ナビゲーションバー',
'sublocation'=>'サブロケーション'
));
//受信したコメント
function mydesign($comment, $args, $depth){
	$GLOBALS['comment']=$coment; ?>

<li>
<?PHP comment_text(); ?>
<p>
<?PHP comment_date(); ?><?PHP comment_time(); ?>
|<?PHP comment_author_link(); ?>
</p>
</li>

<?PHP
}

//記事の文字数を指定し、それを超えたら続きを読む表記
function new_excerpt_mblength($length) {
	 return 28;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');

function new_excerpt_more($post) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function my_scripts() {
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

//サムネイルを表示させるやつ

function catch_that_image() {
global $post, $posts;
$first_img = '';
ob_start();
ob_end_clean();
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/', $post->post_content, $matches);
$first_img = $matches [1][0];

if(empty($first_img)){ //Defines a default image
		$first_img = "http://torami.jp/wp-content/uploads/2016/02/samneil.png";
}
return $first_img;
}

//ログインページのアイコン
function custom_login_logo() {
 echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/img/rogo.png) no-repeat 50% 50% !important; width:100% !important;background-size:contain !important; }</style>';
 }
add_action('login_head', 'custom_login_logo');

if ( !function_exists( 'add_quicktags_to_text_editor' ) ):
function add_quicktags_to_text_editor() {
  //スクリプトキューにquicktagsが保存されているかチェック
  if (wp_script_is('quicktags')){?>
    <script>
      QTags.addButton('qt-bold','太字','<span class="bold">','</span>');
      QTags.addButton('qt-red','赤字','<span class="red">','</span>');
      QTags.addButton('qt-bold-red','太い赤字','<span class="bold-red">','</span>');
      QTags.addButton('qt-red-under','赤アンダーライン','<span class="red-under">','</span>');
      QTags.addButton('qt-marker','黄色マーカー','<span class="marker">','</span>');
      QTags.addButton('qt-marker-under','黄色アンダーラインマーカー','<span class="marker-under">','</span>');
      QTags.addButton('qt-strike','打ち消し線','<span class="strike">','</span>');
      QTags.addButton('qt-ref','バッジ','<span class="ref">','</span>');
      QTags.addButton('qt-keyboard-key','キーボード','<span class="keyboard-key">','</span>');
      QTags.addButton('qt-information','補足説明(i)','<div class="information">','</div>');
      QTags.addButton('qt-question','補足説明(?)','<div class="question">','</div>');
      QTags.addButton('qt-sp-primary','primary','<div class="sp-primary">','</div>');
      QTags.addButton('qt-sp-success','success','<div class="sp-success">','</div>');
      QTags.addButton('qt-sp-info','info','<div class="sp-info">','</div>');
      QTags.addButton('qt-sp-warning','warning','<div class="sp-warning">','</div>');
      QTags.addButton('qt-sp-danger','danger','<div class="sp-danger">','</div>');
      QTags.addButton('qt-bold','','<div class="bold">','</div>');
    </script>
  <?php
  }
}
endif;
add_action( 'admin_print_footer_scripts', 'add_quicktags_to_text_editor' );

//TinyMCE追加用のスタイルを初期化
//http://com4tis.net/tinymce-advanced-post-custom/
if ( !function_exists( 'initialize_tinymce_styles' ) ):
function initialize_tinymce_styles($init_array) {
  //追加するスタイルの配列を作成
  $style_formats = array(
    array(
      'title' => '太字',
      'inline' => 'span',
      'classes' => 'bold'
    ),
    array(
      'title' => '赤字',
      'inline' => 'span',
      'classes' => 'red'
    ),
    array(
      'title' => '太い赤字',
      'inline' => 'span',
      'classes' => 'bold-red'
    ),
    array(
      'title' => '赤アンダーライン',
      'inline' => 'span',
      'classes' => 'red-under'
    ),
    array(
      'title' => '黄色マーカー',
      'inline' => 'span',
      'classes' => 'marker'
    ),
    array(
      'title' => '黄色アンダーラインマーカー',
      'inline' => 'span',
      'classes' => 'marker-under'
    ),
    array(
      'title' => '打ち消し線',
      'inline' => 'span',
      'classes' => 'strike'
    ),
    array(
      'title' => 'バッジ',
      'inline' => 'span',
      'classes' => 'ref'
    ),
    array(
      'title' => 'キーボードキー',
      'inline' => 'span',
      'classes' => 'keyboard-key'
    ),
    array(
      'title' => '補足情報(i)ボックス',
      'block' => 'div',
      'classes' => 'information'
    ),
    array(
      'title' => '補足情報(?)ボックス',
      'block' => 'div',
      'classes' => 'question'
    ),
    array(
      'title' => 'primaryボックス',
      'block' => 'div',
      'classes' => 'sp-primary'
    ),
    array(
      'title' => 'successボックス',
      'block' => 'div',
      'classes' => 'sp-success'
    ),
    array(
      'title' => 'infoボックス',
      'block' => 'div',
      'classes' => 'sp-info'
    ),
    array(
      'title' => 'warningボックス',
      'block' => 'div',
      'classes' => 'sp-warning'
    ),
    array(
      'title' => 'dangerボックス',
      'block' => 'div',
      'classes' => 'sp-danger'
    ),
  );
}
endif;
add_filter('tiny_mce_before_init', 'initialize_tinymce_styles', 10000);

//TinyMCEにスタイルセレクトボックスを追加
//https://codex.wordpress.org/Plugin_API/Filter_Reference/mce_buttons,_mce_buttons_2,_mce_buttons_3,_mce_buttons_4
if ( !function_exists( 'add_styles_to_tinymce_buttons' ) ):
function add_styles_to_tinymce_buttons($buttons) {
  //見出しなどが入っているセレクトボックスを取り出す
  $temp = array_shift($buttons);
  //先頭にスタイルセレクトボックスを追加
  array_unshift($buttons, 'styleselect');
  //先頭に見出しのセレクトボックスを追加
  array_unshift($buttons, $temp);

  return $buttons;
}
endif;
add_filter('mce_buttons_2','add_styles_to_tinymce_buttons');

//エディタースタイルの追加
add_editor_style("css/admin-editor.css");

// 管理メニューの追加
/*add_action( 'admin_menu', 'my_plugin_menu' );

function my_plugin_menu() {
	add_menu_page( 'My Plugin Options', '相場更新', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
}

function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo include("gold_form.php");
}
*/

?>
