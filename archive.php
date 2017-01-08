<?php
/*
* Template Name: blog一覧ページ
*/
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<title>記事一覧 | TORAMI～トラミ～</title>

<?PHP get_header("2"); ?>


	<div class="main">
		<div class="archive">
			<section class="blog_archive">
				<h1 class="blog_archive-heading">記事一覧</h1>
				<div class="blog_archive-toparea">
					<div class="breadcrumbs">
						<?php if(function_exists('bcn_display')){
								bcn_display();
						}?>
					</div>
					<?php
					$paged = (int) get_query_var('paged');
					$args = array(
					 'posts_per_page' => 8,
					 'paged' => $paged,
					 'orderby' => 'post_date',
					 'post_type' => 'post',
					 'post_status' => 'publish'
					);
					$the_query = new WP_Query($args);?>
				</div><!--blog_archive-toparea-->
				<div class="blogwrap">
					<?PHP
					if ( $the_query->have_posts() ) :
					 while ( $the_query->have_posts() ) : $the_query->the_post();
					?>
					<article class="post">
						<a href="<?php the_permalink(); ?>">
							<p class="post_img"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></p>
							<div class="post_right">
								<p class="postinfo">公開日:<?php the_time('Y年n月j日'); ?>
										<?php if (get_the_modified_date('Y/n/j') != get_the_time('Y/n/j')) : ?>
											最終更新日:<?php the_modified_date('Y年m月j日') ?>
										<?php endif; ?></p>
								<h2 class="post-title"><?php the_title(); ?></h2>
								<?PHP the_excerpt(); ?>
							</div>
						</a>
					</article>
					<?php endwhile; ?>
					<div class="bottom-pagenav">
						<?php if(function_exists('wp_pagenavi')) : wp_pagenavi(array('query' => $the_query)); endif; ?>
					</div>
					<?PHP endif; ?>
					<?php wp_reset_postdata(); ?>
				</div><!--blogwrap-->
			</section><!--blog_archive-->
		</div><!--archive-->
	</div><!--main-->
</div><!--wrap_top-->

<?PHP get_footer(); ?>
