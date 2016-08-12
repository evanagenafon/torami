<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<title>ブランドの査定・買取はTORAMI～トラミ～。関西での不用品買取ならトラミ！今話題の断捨離、リユースをお手伝いさせて頂きます。高額査定、即日現金化で生活を楽しく！</title>
<link rel="stylesheet" type="text/css" href="<?PHP echo get_stylesheet_directory_uri(); ?>/css/style.css"/>
<link rel="stylesheet" href="<?PHP echo get_stylesheet_directory_uri(); ?>/js/slick.css">
<link rel="stylesheet" href="<?PHP echo get_stylesheet_directory_uri(); ?>/js/slick-theme.css">
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/icon.jpg">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/icon.jpg">
<?php wp_deregister_script('jquery'); ?>
<!-- WordPressのjQueryを読み込ませない -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php bloginfo(template_url);?>/js/slick.min.js"></script>
<script>
$(function() {
	$('#slide').slick({
	accessibility:false,autoplay:true,dots: true,infinite: true,
	autoplaySpeed: 3500,speed: 850,
	});
});
</script>
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

<body>
<div class="all">
<div class="wrap">
	<header class="header">
		<h1 id="site-title"><a href="http://torami.jp">関西での高額買取ならブランドのリユース TORAMI　～トラミ～</a></h1>
		<dl>
			<dd>【営業時間】11:00～21:00</dd>
			<dd>【定休日】年中無休(年末年始除く)</dd>
		</dl>
		<dl>
			<dt>お問合せ・ご質問はこちらから</dt>
			<dd class="tel"><span data-action="call" data-tel="0729479666">072-947-9666</span></dd>
		</dl>
	</header><!--header-->
</div><!--wrap-->
<nav class="nav">
<?PHP wp_nav_menu(array(
	'theme_location'=>'navigation'
	)); ?>
</nav><!--nav-->

<div class="wrap">
	<div class="nav2">
		<ul id="slide">
			<li><a href="http://torami.jp/brand/"><img src="<?php bloginfo('template_url'); ?>/img/header1.jpg" alt="ブランド買取"></a></li>
			<li><a href="http://torami.jp/gold/"><img src="<?php bloginfo('template_url'); ?>/img/header2.jpg" alt="貴金属買取"></a></li>
			<li><a href="http://torami.jp/juery/"><img src="<?php bloginfo('template_url'); ?>/img/header3.jpg" alt="ジュエリー買取"></a></li>
			<li><a href="http://torami.jp/takuhai/"><img src="<?php bloginfo('template_url'); ?>/img/header4.jpg" alt="宅配買取"></a></li>
			<li><a href="http://torami.jp/syuttyou/"><img src="<?php bloginfo('template_url'); ?>/img/header5.jpg" alt="出張買取"></a></li>
			<li><a href="http://torami.jp/brand/"><img src="<?php bloginfo('template_url'); ?>/img/header.png" alt="洋服買取"></a></li>
		</ul>
	</div><!--nav2-->
	<div class="side">
		<h2><span class="gold_cl">M</span>ENU</h2>
		<?PHP wp_nav_menu(array(
	'theme_location'=>'sublocation'
	)); ?>
	<dl>
		<dt>本日の貴金属相場</dt>
		<dd>最終更新：<?php echo date( 'Y/n/j', time() ) ?> 10:00</dd>
		<?php echo file_get_contents("wp-content/themes/torami/souba.txt"); ?>
	</dl>
	<p class="side_brand">お取り扱いブランド</p>
	<p><a href="http://torami.jp/brand/">もっと見る</a></p>

		<?PHP wp_nav_menu(array(
	'theme_location'=>'sublocation'
	)); ?>

	</div><!--side-->
