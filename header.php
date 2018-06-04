<link rel="stylesheet" type="text/css" href="<?PHP echo get_stylesheet_directory_uri(); ?>/css/style.css"/>
<link rel="stylesheet" href="<?PHP echo get_stylesheet_directory_uri(); ?>/js/slick.css">
<link rel="stylesheet" href="<?PHP echo get_stylesheet_directory_uri(); ?>/js/slick-theme.css">
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/icon.jpg">
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/icon.jpg">
<?php wp_head(); ?>
</head>

<body onload="initialize();">
	<header class="header">
		<div class="header_wrap">
			<h1 id="site-title"><a href="http://torami.jp">関西での高額買取ならブランドのリユース TORAMI　～トラミ～</a></h1>
			<dl class="header_info">
				<dt>本日の貴金属相場</dt>
				<dd>最終更新：<?php echo date( 'Y/n/j', time() ) ?> 10:00</dd>
				<?php echo file_get_contents("wp-content/themes/torami/souba.txt"); ?>
			</dl>
			<dl class="header_time">
				<dd>【定休日】毎週水曜日</dd>
				<dd>【営業時間】11:00～19:00</dd>
			</dl>
			<dl>
				<dt>お問合せ・ご質問はこちらから</dt>
				<dd class="tel"><span data-action="call" data-tel="0729479512">TEL:072-947-9512</span></dd>
			</dl>
		</div><!--header_wrap-->
		<nav class="nav">
		<?PHP wp_nav_menu(array(
			'theme_location'=>'navigation'
			)); ?>
		</nav><!--nav-->
	</header><!--header-->
