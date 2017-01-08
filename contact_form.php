<?php
/*
* Template Name: お問い合わせページ
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<title>各種お問い合わせ | TORAMI～トラミ～</title>

<?PHP get_header("2"); ?>
<div class="wrap_top">
	<div class="main">
		<div class="flex-wrap">
			<div class="contact_form">
				<?PHP if(have_posts()): while(have_posts()): the_post(); ?><!--記事が無くなるまで繰り返す。-->
				<h1><?PHP the_title(); ?></h1>
				<div class="breadcrumbs">
					<?php if(function_exists('bcn_display')){
							bcn_display();
					}?>
				</div>
				<?PHP the_content(); ?>
				<?PHP endwhile; endif; ?>
				<p><a href="http://torami.jp/line/"><img src="<?php bloginfo('template_url'); ?>/img/line.JPG" alt="LINE査定" /></a></p>
			</div><!--contant-->
			<div class="side">
				<?PHP get_template_part('sideblog'); ?>
			</div>
		</div><!--flex-wrap-->
	</div><!--main-->
</div><!--wrap_top-->

<?PHP get_footer(); ?>
