<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<title>ブランドの査定・買取はTORAMI～トラミ～。関西での不用品買取ならトラミ！今話題の断捨離、リユースをお手伝いさせて頂きます。高額査定、即日現金化で生活を楽しく！</title>
<?PHP get_header(); ?>
<section class="top_img">
	<ul>
		<li><a href="<?php echo home_url('/takuhai'); ?>">宅配買取</a></li>
		<li><a href="<?php echo home_url('/syuttyou'); ?>">出張買取</a></li>
		<li><a href="<?php echo home_url('/line'); ?>">LINE査定</a></li>
	</ul>
</section>
<p class="top_logo anime"><img src="<?php bloginfo('template_url'); ?>/img/rogo.svg" alt="トラミロゴ" /></p>
<div class="wrap">
	<div class="home">
		<section class="top_info anime">
			<h2>新店舗オープン致しました！是非一度御立ち寄りください。</h2>
			<?php echo do_shortcode('[smartslider3 slider=2]'); ?>
		</section><!--top_info-->
		<div class="anime" id="map_canvas" style="width:100%;height:500px;"></div>
		<section class="item_list anime">
			<h2>関西一の高価買取を目指して</h2>
			<div class="item_list-list">
				<?php
					$args = array(
			    	'post_type' => array('brand', 'juery'), /* 投稿タイプを指定 */
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
		<section class="necessary anime">
			<h2>お買取に必要なものは本人確認書類のみ</h2>
			<div class="necessary_text">
				<h3>本人確認書類</h3>
				<ul class="necessary_list">
					<li>■運転免許証</li>
					<li>■パスポート</li>
					<li>■健康保険証</li>
					<li>■住民基本台帳カード</li>
					<li>■特別永住者証明書</li>
				</ul>
				<p>※18未満のお客様はご利用いただけません。</p>
				<p>※18歳・19歳のお客様は本人確認書類の他に、委任状又は同意書が必要となります。</p>
			</div>
			<p class="necessary_img"><img src="<?php bloginfo('template_url'); ?>/img/document.jpg" alt="本人確認書類" />
		</section><!--necessary-->
		<section class="blog anime">
			<h2 class="blog_title"><span>ＴＯＲＡＭＩの新着情報</span></h2>
			<div class="blogwrap">
				<?php query_posts('showposts=6&cat=-2,-10,-11'); ?>
				<?PHP if(have_posts()): while(have_posts()): the_post(); ?>
				<article class="post">
					<a href="<?PHP the_permalink(); ?>">
						<p class="post_img"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></p>
						<div class="post_right">
							<p class="postinfo"><?PHP echo get_the_date(); ?></p>
							<h3 class="post-title"><?PHP the_title(); ?></h3>
							<?PHP the_excerpt(); ?>
						</div>
					</a>
				</article><!--post-->
				<?PHP endwhile; endif; ?>
			</div><!--blogwrap-->
			<p class="blog-more"><a href="<?php echo home_url('/blog-archive'); ?>">もっと見る</a></p>
		</section><!--blog-->
	</div><!--main-->
</div><!--wrap-->

<?PHP get_footer(); ?>
