<!DOCTYPE html>
<html lang="ja">
<head><!--シングル-->
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="Content-Type" content="<?PHP bloginfo('html_type'); ?>; charset=<?PHP bloginfo('charset'); ?>" />
<title><?PHP the_title(); ?> | ブランドの査定・買取はTORAMI～トラミ～。</title>
<?PHP get_header("2"); ?>

	<main class="single">
		<article class="single_post">
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
				<?php if(function_exists('bcn_display'))
				{
				 bcn_display();
				}?>
			</div>
		<?PHP if(have_posts()): while(have_posts()): the_post(); ?>
			<h1><?PHP the_title(); ?></h1>
			<p class="single_post-info">
				公開日:<?PHP echo the_time("Y年n月j日"); ?>
				<?php if (get_the_modified_date() != get_the_time("Y年n月j日")) : ?>
					最終更新日:<?php the_modified_date("Y年n月j日"); ?>
				<?php endif; ?>
			</p>
			<?php the_content(); ?>
			<p class="new"><?PHP next_post_link(); ?></p>
			<p class="old"><?PHP previous_post_link(); ?></p>
			<p class="list"><a href="<?PHP echo home_url(); ?>">一覧へ</a></p>
		<?PHP endwhile; endif; ?>
		</article><!--single_post-->
		<p class="single_banner"><a href="http://torami.jp/line/"><img src="<?php bloginfo('template_url'); ?>/img/line.JPG" alt="LINE査定" /></a></p>
	</main>

<?PHP get_footer(); ?>
