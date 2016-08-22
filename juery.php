<?php
/*
* Template Name: ジュエリーページ
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<title>ジュエリー買取 | TORAMI～トラミ～</title>

<?PHP get_header(); ?>

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
			<div class="contact">
				<p>11:00～21:00年中無休(年末年始除く)</p>
				<p class="tel"><span data-action="call" data-tel="0792920648">072-947-9666</span></p>
				<p class="free"><a href="http://torami.jp/contact/">無料宅配・出張買取申込み♪</a></p>
			</div><!--contact-->
		</div><!--juery-->

		<h2><span class="gold_cl">トラミ</span>が選ばれる<span class="pink">6</span>つの理由</h2>
		<ul>
			<li>
				<h3 class="no1">手数料は全て0円</h3>
				<p>手数料、鑑定査定料、出張費用、宅配買取費用すべて0円です♪査定のみも大歓迎！お気軽にお問合せ下さいませ♪</p>
			</li>
			<li>
				<h3 class="no2">経験豊富な専門鑑定士が多数在籍</h3>
				<p>ブランド、ジュエリーアパレル、それぞれの専門鑑定士が在籍している為、しっかり商品の価値を見極める事が出来ます♪</p>
			</li>
			<li>
				<h3 class="no3">的確、丁寧にスピード対応</h3>
				<p>１つ１つ丁寧に商品を拝見させて頂き、的確な相場をスピーディにお伝えいたします♪</p>
			</li>
			<li>
				<h3 class="no4">幅広い買取品目</h3>
				<p>ブランド、ジュエリー、アパレル、古銭、切手、電化製品、楽器など、その他にも幅広いお取り扱いがございます♪</p>
			</li>
			<li>
				<h3 class="no5">他社圧倒の買取価格</h3>
				<p>日本国内は勿論、海外にも多数販売ルートを確保し、高額買取を実現致しました。絶対に他社には負けません！</p>
			</li>
			<li>
				<h3 class="no6">些細な疑問も電話やメールで徹底サポート</h3>
				<p>買取相場や買取品目などお客様が気になっている疑問を、それぞれの担当スタッフが一つ一つ丁寧に応えさせて頂きます♪</p>
			</li>
		</ul>
		<p class="line"><a href="http://torami.jp/line/"><img src="<?php bloginfo('template_url'); ?>/img/line.JPG" alt="LINE査定" /></a></p>
	</div><!--main-->
</div><!--wrap-->

<?PHP get_footer(); ?>
