<?PHP
include 'qtags.php';     //クイックタグ関係の関数
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
	 return 120;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');

function new_excerpt_more($post) {
return '<a href="'. get_permalink($post->ID) . '">' . '...続きを読む' . '</a>';
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
$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
$first_img = $matches [1] [0];

if(empty($first_img)){ //Defines a default image
		$first_img = "http://torami.jp/wp-content/uploads/2016/02/samneil.png";
}
return $first_img;
}


?>
