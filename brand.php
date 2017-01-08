<?php
/*
* Template Name: ブランド買取ページ
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<title>ブランド買取 | TORAMI～トラミ～</title>

<?PHP get_header("2"); ?>

<div class="wrap_top">
	<div class="main">
		<div class="flex-wrap">
			<div class="brand">
				<section class="item_list anime marginb">
					<h2>関西一の高価買取を目指して</h2>
					<div class="item_list-list">
						<?php
							$args = array(
					    	'post_type' => array('brand'), /* 投稿タイプを指定 */
				    		'paged' => $paged,
					    	'posts_per_page' => '6'
							); ?>
						<?php query_posts( $args ); ?>
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<article class="item_list-item">
								<?PHP
								//商品画像
								$img = get_field('img');
								$imgurl = wp_get_attachment_image_src($img, 'large');
								if($imgurl){ ?><p class="item_list-img"><img src="<?PHP echo $imgurl[0]; ?>" alt="施工写真"></p>
			 					<?PHP }?>
								<div class="item_list-text">
									<h3><?php the_title(); ?></h3>
									<?PHP
									//商品説明
									$area = get_field('area');
									if($area){ ?><p><?PHP echo $area; ?></p>
									<?PHP } ?>
									<?PHP
									//買取価格
									$txt = get_field('text');
									if($txt){ ?><p class="item_list-price">買取価格 ¥<?PHP echo $txt; ?>円</p>
									<?PHP } ?>
								</div><!--item_list-text-->
							</article>
						<?php endwhile; ?>
						<?php else : ?>
							<dl>
								<dt>記事がありません</dt>
								<dd>表示する記事はありませんでした。</dd>
							</dl>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
					</div><!--item_list-list-->
				</section>
				<?PHP include("contact.php"); ?>
				<p><img src="<?php bloginfo('template_url'); ?>/img/3brand.jpg" alt="強化買取画像"></p>
				<p><img src="<?php bloginfo('template_url'); ?>/img/Chrome.png" alt="クロムハーツ強化買取"></p>
				<p class="line"><a href="http://torami.jp/line/"><img src="<?php bloginfo('template_url'); ?>/img/line.JPG" alt="LINE査定" /></a></p>
			</div><!--brand-->
			<div class="side">
				<?PHP get_template_part('sideblog'); ?>
			</div>
		</div><!--flex-wrap-->
	</div><!--main-->
</div><!--wrap_top-->

<?PHP get_footer(); ?>
