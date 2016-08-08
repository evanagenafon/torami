<?PHP get_header(); ?>

	<div class="main">
		<p><a href="http://torami.jp/brand/"><img src="<?php bloginfo('template_url'); ?>/img/3brand.jpg" alt="３大ブランド強化買取" /></a></p>
		<p><a href="http://torami.jp/brand/"><img src="<?php bloginfo('template_url'); ?>/img/Chrome.png" alt="クロムハーツ強化買取" /></a></p>
		<p><a href="http://torami.jp/line/"><img src="<?php bloginfo('template_url'); ?>/img/line.JPG" alt="LINE査定" /></a></p>
		<p><img src="<?php bloginfo('template_url'); ?>/img/rolex.jpg" alt="ロレックスバナー" /></p>
		<h2><span class="gold_cl">ＴＯＲＡＭＩ</span>の<span class="pink">新着情報</span></h2>
		<div class="blog">
			<div class="blogwrap">
			<?php query_posts('cat=-2,-10,-11'); ?>
			<?PHP if(have_posts()): while(have_posts()): the_post(); ?>
				<div class="post">
					<h2><a href="<?PHP the_permalink(); ?>"><?PHP the_title(); ?></a></h2>
					<p><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></p>
					<?PHP the_excerpt(); ?>
					<p class="postinfo"><?PHP echo get_the_date(); ?></p>
				</div><!--post-->

				<?PHP if(is_single()): ?>
				<p class="new"><?PHP next_post_link(); ?></p>
				<p class="old"><?PHP previous_post_link(); ?></p>
				<?PHP endif; ?>
				<?PHP endwhile; endif; ?>
			</div><!--blogwrap-->

			<div class="sidebar">
					<li>
					<h2>最新記事</h2>
						<ul>
						<?php query_posts('cat=-2,-10,-11&showposts=15'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</li>
						<?php endwhile; endif; ?>
						</ul>
					</li>
					<?PHP dynamic_sidebar(); ?>
			</div><!--sidebar-->
		</div><!--blog-->
		<p><img src="<?php bloginfo('template_url'); ?>/img/alright.jpg" alt="トラミなら壊れていてもＯＫ" /></p>
		<h2><span class="gold_cl">トラミ</span>が選ばれる<span class="pink">6</span>つの理由</h2>
		<ul>
			<li>
				<h3 class="no1">手数料は全て0円</h3>
				<p>手数料、鑑定査定料、出張費用、宅配買取費用すべて0円♪査定のみも大歓迎！お気軽にお問合せ下さいませ♪</p>
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
	</div><!--main-->
</div><!--wrap-->

<?PHP get_footer(); ?>
