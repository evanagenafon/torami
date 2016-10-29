<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="Content-Type" content="<?PHP bloginfo('html_type'); ?>; charset=<?PHP bloginfo('charset'); ?>" />
<title><?PHP the_title(); ?> | ブランドの査定・買取はTORAMI～トラミ～。</title>
<link rel="stylesheet" type="text/css" href="<?PHP echo get_stylesheet_directory_uri(); ?>/css/reset.css"/>
<link rel="stylesheet" type="text/css" href="<?PHP echo get_stylesheet_directory_uri(); ?>/css/style.css"/>
<?php wp_deregister_script('jquery'); ?>
<!-- WordPressのjQueryを読み込ませない -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(function() {
    if (!isPhone())
        return;

    $('span[data-action=call]').each(function() {
        var $ele = $(this);
        $ele.wrap('<a href="tel:' + $ele.data('tel') + '"></a>');
    });
});

function isPhone() {
    return (navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('Android') > 0);
}
</script>



</head>

<body id="single">
<div class="wrap">
	<div class="header">
		<p id="site-title"><a href="http://torami.jp">brand reuse TORAMI</a></p>
		<dl>
			<dd>【営業時間】11:00～19:00</dd>
			<dd>【定休日】年中無休(年末年始除く)</dd>
		</dl>
		<dl>
			<dt>お問合せ・ご質問はこちらから</dt>
			<dd class="tel"><span data-action="call" data-tel="0784147274">078-414-7274</span></dd>
		</dl>
	</div><!--header-->
</div><!--wrap-->
<div class="nav">
<?PHP wp_nav_menu(array(
	'theme_location'=>'navigation'
	)); ?>
</div><!--nav-->

<main class="main">
	<h2><span class="gold_cl">ＴＯＲＡＭＩ</span>の<span class="pink">新着情報</span></h2>
		<?PHP if(have_posts()): while(have_posts()): the_post(); ?>
			<article class="single_post">
				<h1><?PHP the_title(); ?></h1>
				<?php the_content(); ?>
				<p class="postinfo"><?PHP echo get_the_date(); ?></p>
  			<p class="new"><?PHP next_post_link(); ?></p>
  			<p class="old"><?PHP previous_post_link(); ?></p>
  			<p class="all"><a href="<?PHP echo home_url(); ?>">一覧へ</a></p>
      </article><!--single_post-->
		<?PHP endwhile; endif; ?>

		<p><a href="http://torami.jp/line/"><img src="<?php bloginfo('template_url'); ?>/img/line.JPG" alt="LINE査定" /></a></p>
		<h2><span class="gold_cl">トラミ</span>が選ばれる<span class="pink">６</span>つの理由</h2>
		<ul>
			<li>
				<h3 class="no1">手数料は全て0円</h3>
				<p>手数料、鑑定査定料、出張費用、宅配買取費用すべて0円です♪査定のみも大歓迎！お気軽にお問合せ下さいませ♪</p>
			</li>
			<li>
				<h3 class="no2">経験豊富な専門鑑定士が多数在籍</h3>
				<p>ブランド、ジュエリーアパレル、それぞれの専門鑑定士が在籍している為、しっかり商品の価値を見極める事が出来ます♪</p>
			</li>
			<li>
				<h3 class="no3">的確、丁寧にスピード対応</h3>
				<p>１つ１つ丁寧に商品を拝見させて頂き、的確な相場をスピーディにお伝えいたします♪</p>
			</li>
			<li>
				<h3 class="no4">幅広い買取品目</h3>
				<p>ブランド、ジュエリー、アパレル、古銭、切手、電化製品、楽器など、その他にも幅広いお取り扱いがございます♪</p>
			</li>
			<li>
				<h3 class="no5">他社圧倒の買取価格</h3>
				<p>日本国内は勿論、海外にも多数販売ルートを確保し、高額買取を実現致しました。絶対に他社には負けません！</p>
			</li>
			<li>
				<h3 class="no6">些細な疑問も電話やメールで徹底サポート</h3>
				<p>買取相場や買取品目などお客様が気になっている疑問を、それぞれの担当スタッフが一つ一つ丁寧に応えさせて頂きます♪</p>
			</li>
		</ul>
	</main>

<?PHP get_footer(); ?>
