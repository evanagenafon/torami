
<?php
/*
* Template Name: カスタム買取ページ
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<title>ブランド買取 | TORAMI～トラミ～</title>

<?PHP get_header(); ?>

	<div class="main">
		<p><img src="<?php bloginfo('template_url'); ?>/img/3brand.jpg" alt="強化買取画像"></p>
		<p><img src="<?php bloginfo('template_url'); ?>/img/Chrome.png" alt="クロムハーツ強化買取"></p>
		<div class="brand">
			<h2><span class="gold_cl">他店</span>では真似できない<span class="pink">圧倒的</span>な高額買取実績！！</h2>
				<ul>
					<li>
						<?php
						$img = get_field('brand_img01');
						$imgurl = wp_get_attachment_image_src($img);
						if($imgurl){ ?><img src="<?php echo $imgurl[0]; ?>" alt="<?php the_field('brand_text01'); ?>">
						<?php } ?>
						<p><?php the_field('brand_text01'); ?></p>
						<p class="brand__fontsize">買取金額</p>
						<p class="brand__red">¥<?php the_field('brand_price01'); ?>-</p>
					</li>
					<li>
						<?php
						$img = get_field('brand_img02');
						$imgurl = wp_get_attachment_image_src($img);
						if($imgurl){ ?><img src="<?php echo $imgurl[0]; ?>" alt="<?php the_field('brand_text02'); ?>">
						<?php } ?>
						<p><?php the_field('brand_text02'); ?></p>
						<p><?php the_field('brand_price02'); ?></p>
					</li>
					<li>
						<?php
						$img = get_field('brand_img03');
						$imgurl = wp_get_attachment_image_src($img);
						if($imgurl){ ?><img src="<?php echo $imgurl[0]; ?>" alt="<?php the_field('brand_text03'); ?>">
						<?php } ?>
						<p><?php the_field('brand_text03'); ?></p>
						<p><?php the_field('brand_price03'); ?></p>
					</li>
					<li>
						<?php
						$img = get_field('brand_img04');
						$imgurl = wp_get_attachment_image_src($img);
						if($imgurl){ ?><img src="<?php echo $imgurl[0]; ?>" alt="<?php the_field('brand_text04'); ?>">
						<?php } ?>
						<p><?php the_field('brand_text04'); ?></p>
						<p><?php the_field('brand_price04'); ?></p>
					</li>
					<li>
						<?php
						$img = get_field('brand_img05');
						$imgurl = wp_get_attachment_image_src($img);
						if($imgurl){ ?><img src="<?php echo $imgurl[0]; ?>" alt="<?php the_field('brand_text05'); ?>">
						<?php } ?>
						<p><?php the_field('brand_text05'); ?></p>
						<p><?php the_field('brand_price05'); ?></p>
					</li>
					<li>
						<?php
						$img = get_field('brand_img06');
						$imgurl = wp_get_attachment_image_src($img);
						if($imgurl){ ?><img src="<?php echo $imgurl[0]; ?>" alt="<?php the_field('brand_text06'); ?>">
						<?php } ?>
						<p><?php the_field('brand_text06'); ?></p>
						<p><?php the_field('brand_price06'); ?></p>
					</li>
					<li>
						<?php
						$img = get_field('brand_img07');
						$imgurl = wp_get_attachment_image_src($img);
						if($imgurl){ ?><img src="<?php echo $imgurl[0]; ?>" alt="<?php the_field('brand_text07'); ?>">
						<?php } ?>
						<p><?php the_field('brand_text07'); ?></p>
						<p><?php the_field('brand_price07'); ?></p>
					</li>
					<li>
						<?php
						$img = get_field('brand_img08');
						$imgurl = wp_get_attachment_image_src($img);
						if($imgurl){ ?><img src="<?php echo $imgurl[0]; ?>" alt="<?php the_field('brand_text08'); ?>">
						<?php } ?>
						<p><?php the_field('brand_text08'); ?></p>
						<p><?php the_field('brand_price08'); ?></p>
					</li>
					<li>
						<?php
						$img = get_field('brand_img09');
						$imgurl = wp_get_attachment_image_src($img);
						if($imgurl){ ?><img src="<?php echo $imgurl[0]; ?>" alt="<?php the_field('brand_text09'); ?>">
						<?php } ?>
						<p><?php the_field('brand_text09'); ?></p>
						<p><?php the_field('brand_price09'); ?></p>
					</li>
					<li>
						<?php
						$img = get_field('brand_img10');
						$imgurl = wp_get_attachment_image_src($img);
						if($imgurl){ ?><img src="<?php echo $imgurl[0]; ?>" alt="<?php the_field('brand_text10'); ?>">
						<?php } ?>
						<p><?php the_field('brand_text10'); ?></p>
						<p><?php the_field('brand_price10'); ?></p>
					</li>
					<li>
						<?php
						$img = get_field('brand_img11');
						$imgurl = wp_get_attachment_image_src($img);
						if($imgurl){ ?><img src="<?php echo $imgurl[0]; ?>" alt="<?php the_field('brand_text11'); ?>">
						<?php } ?>
						<p><?php the_field('brand_text11'); ?></p>
						<p><?php the_field('brand_price11'); ?></p>
					</li>
					<li>
						<?php
						$img = get_field('brand_img12');
						$imgurl = wp_get_attachment_image_src($img);
						if($imgurl){ ?><img src="<?php echo $imgurl[0]; ?>" alt="<?php the_field('brand_text12'); ?>">
						<?php } ?>
						<p><?php the_field('brand_text12'); ?></p>
						<p><?php the_field('brand_price12'); ?></p>
					</li>
					<li>
						<?php
						$img = get_field('brand_img13');
						$imgurl = wp_get_attachment_image_src($img);
						if($imgurl){ ?><img src="<?php echo $imgurl[0]; ?>" alt="<?php the_field('brand_text13'); ?>">
						<?php } ?>
						<p><?php the_field('brand_text13'); ?></p>
						<p><?php the_field('brand_price13'); ?></p>
					</li>
					<li>
						<?php
						$img = get_field('brand_img14');
						$imgurl = wp_get_attachment_image_src($img);
						if($imgurl){ ?><img src="<?php echo $imgurl[0]; ?>" alt="<?php the_field('brand_text14'); ?>">
						<?php } ?>
						<p><?php the_field('brand_text14'); ?></p>
						<p><?php the_field('brand_price14'); ?></p>
					</li>
					<li>
						<?php
						$img = get_field('brand_img15');
						$imgurl = wp_get_attachment_image_src($img);
						if($imgurl){ ?><img src="<?php echo $imgurl[0]; ?>" alt="<?php the_field('brand_text15'); ?>">
						<?php } ?>
						<p><?php the_field('brand_text15'); ?></p>
						<p><?php the_field('brand_price15'); ?></p>
					</li>
					<li>
						<?php
						$img = get_field('brand_img16');
						$imgurl = wp_get_attachment_image_src($img);
						if($imgurl){ ?><img src="<?php echo $imgurl[0]; ?>" alt="<?php the_field('brand_text16'); ?>">
						<?php } ?>
						<p><?php the_field('brand_text16'); ?></p>
						<p><?php the_field('brand_price16'); ?></p>
					</li>
				</ul>

				<?PHP include("contact.php"); ?>

				<p><img src="<?php bloginfo('template_url'); ?>/img/alright.jpg" alt="トラミなら壊れていてもＯＫ" /></p>
			</div><!--brand-->

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
