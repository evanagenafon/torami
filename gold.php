<?php
/*
* Template Name: 貴金属買取ページ
*/
?>
<?PHP get_header(); ?>

	<div class="main">
	<div class="post">
		<h2><?PHP the_title(); ?></a></h2>
		<?PHP the_content(); ?>
		<div class='gold'>
		<p>最終更新：<?php echo date( 'Y/n/j', time() ) ?> 10:00</p>
			<div class='left'>
			<h3 class='price1'>金現金買取価格   <span>1g当たり</span></h3>
			<?php
			
			echo file_get_contents("wp-content/themes/torami/sample.txt"); 
			
			?>
		<p><img src="<?php bloginfo('template_url'); ?>/img/simple.jpg" alt="買取はシンプル" /></p>
		<p><a href="http://torami.jp/juery/"><img src="<?php bloginfo('template_url'); ?>/img/header3.jpg" alt="ジュエリー買取" /></a></p>
		</div><!--gold-->
	</div><!--post-->
	
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
	</div><!--main-->
</div><!--wrap-->

<?PHP get_footer(); ?>

