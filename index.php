<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<title>ブランドの査定・買取はTORAMI～トラミ～。関西での不用品買取ならトラミ！今話題の断捨離、リユースをお手伝いさせて頂きます。高額査定、即日現金化で生活を楽しく！</title>
<?PHP get_header(); ?>

<div class="wrap">
	<div class="main">
		<section class="blog">
			<h2 class="blog_title">ＴＯＲＡＭＩの新着情報</h2>
			<div class="blogwrap">
				<?php query_posts('showposts=4&cat=-2,-10,-11'); ?>
				<?PHP if(have_posts()): while(have_posts()): the_post(); ?>
				<article class="post">
					<a href="<?PHP the_permalink(); ?>">
						<p class="post_img"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></p>
						<div class="post_right">
							<p class="postinfo"><?PHP echo get_the_date(); ?></p>
							<h2><?PHP the_title(); ?></h2>
							<?PHP the_excerpt(); ?>
						</div>
					</a>
				</article><!--post-->
				<?PHP endwhile; endif; ?>
			</div><!--blogwrap-->
		</section><!--blog-->
	</div><!--main-->
</div><!--wrap-->

<?PHP get_footer(); ?>
