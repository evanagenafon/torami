<link rel="stylesheet" type="text/css" href="<?PHP echo get_stylesheet_directory_uri(); ?>/css/style.css"/>
<link rel="stylesheet" href="<?PHP echo get_stylesheet_directory_uri(); ?>/js/slick.css">
<link rel="stylesheet" href="<?PHP echo get_stylesheet_directory_uri(); ?>/js/slick-theme.css">
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/icon.jpg">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/icon.jpg">

</head>

<body>
<div class="all">
<div class="wrap">
	<header class="header">
		<h1 id="site-title"><a href="http://torami.jp">関西での高額買取ならブランドのリユース TORAMI　～トラミ～</a></h1>
		<dl>
			<dd>【営業時間】11:00～19:00</dd>
			<dd>【定休日】毎週水曜日</dd>
		</dl>
		<dl>
			<dt>お問合せ・ご質問はこちらから</dt>
			<dd class="tel"><span data-action="call" data-tel="0784147274">078-414-7274</span></dd>
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
