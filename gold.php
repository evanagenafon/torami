<?php
/*
* Template Name: 貴金属買取ページ
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<title>貴金属買取 | TORAMI～トラミ～</title>

<?PHP get_header("2"); ?>
<div class="wrap_top">
	<div class="main">
		<div class="flex-wrap">
			<div class='gold'>
				<h1><?PHP the_title(); ?></h1>
				<p>最終更新：<?php echo date( 'Y/n/j', time() ) ?> 10:00</p>
				<div class='left'>
					<h3 class='price1'>金現金買取価格   <span>1g当たり</span></h3>
					<?php
					echo file_get_contents("wp-content/themes/torami/sample.txt");
					?>
					<p><img src="<?php bloginfo('template_url'); ?>/img/simple.jpg" alt="買取はシンプル" /></p>
					<p><a href="http://torami.jp/juery/"><img src="<?php bloginfo('template_url'); ?>/img/header3.jpg" alt="ジュエリー買取" /></a></p>
			</div><!--gold-->
			<div class="side">
				<?PHP get_template_part('sideblog'); ?>
			</div>
		</div><!--flex-wrap-->
	</div><!--main-->
</div><!--wrap_top-->

<?PHP get_footer(); ?>
