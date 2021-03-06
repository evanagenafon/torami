<?php
/*
* Template Name: カスタムページ
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<title>ジュエリー買取 | TORAMI～トラミ～</title>

<?PHP get_header("2"); ?>

	<div class="main">
		<div class="juery">
			<p><img src="<?php bloginfo('template_url'); ?>/img/juery.jpg" alt="トラミなら小さな宝石にもしっかり値段を付けます！" /></p>
			<h2><span class="gold_cl">専門業者</span>も<span class="pink">驚き</span>の高額買取♪</h2>
			<ul>
			<?php query_posts('showposts=12&cat=10'); while(have_posts()) : the_post(); ?>
			<li class="jueryPost">
				<p><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></p>
				<?PHP the_excerpt(); ?>
				<h2><span>買取金額</span> ￥<?php the_title();?></h2>
			</li><!--jueryPost-->
				<?php endwhile;?>
			</ul>
			<p><img src="<?php bloginfo('template_url'); ?>/img/konnna.jpg" alt="トラミなら小さな宝石にもしっかり値段を付けます！" /></p>
			<?PHP include("contact.php"); ?>
			<p><a href="http://torami.jp/line/"><img src="<?php bloginfo('template_url'); ?>/img/line.JPG" alt="LINE査定" /></a></p>
		</div><!--juery-->
	</div><!--main-->
</div><!--wrap-->

<?PHP get_footer(); ?>
