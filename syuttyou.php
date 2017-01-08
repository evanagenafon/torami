<?php
/*
* Template Name: 出張買取ページ
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<title>出張買取について | TORAMI～トラミ～</title>

<?PHP get_header("2"); ?>
<div class="wrap_top">
	<div class="main">
		<div class="flex-wrap">
			<div class="syuttyou">
				<h1><?PHP the_title(); ?></h1>
				<ul class="nagare">
					<li class="no1">
						<h2><span>1</span>申し込み、訪問日を決定します。</h2>
						<p>まずはお電話にてお問い合わせください。<br>
							（お品によってはお受けできない場合もございます。）<br>
							お客様のご希望の訪問日・時間帯と弊社スタッフスケジュールを考慮し、<br>
							訪問させていただく日時を決定します。</p>
					</li>
					<li class="no2">
						<h2><span>2</span>トラミスタッフがご自宅へお伺いします。</h2>
						<p>トラミスタッフが、ご自宅へお伺いします。<br>
							社用車には店舗名やロゴなどは入っておりませんので<br>
							ご安心ください。</p>
					</li>
					<li class="no3">
						<h2><span>3</span>商品を拝見し、査定致します。</h2>
						<p>玄関先にてお品を直接拝見し、<br>
							買取金額を判断させていただきます。</p>
					</li>
					<li class="no4">
						<h2><span>4</span>その場で買取金額を、お支払い。</h2>
						<p>買取金額にご納得いただけましたら、<br>
							その場で現金にてお支払いたします。</p>
					</li>
				</ul>
				<h2>※買取にはご本人様確認書類が必要です！</h2>
				<ul class="syorui">
					<li class="no1">
						<ul>
							<li>運転免許証</li>
							<li>保険証</li>
							<li>パスポート</li>
							<li> 住民基本台帳カード　など</li>
						</ul>
					</li>
					<li class="no2">
						<h3>18歳未満のお客様の場合</h3>
						<p>いかなる場合も買取いたしません。※結婚している場合(民法上成人とみなされる)であっても、買取いたしません。</p>
					</li>
					<li class="no3">
						<h3>18歳・19歳のお客様の場合</h3>
						<p>同意書、又は委任状をご提出していただきます。同意書・委任状と共に、通常買取に必要な身分証明書もご必要となります。</p>
					</li>
					<li class="no4">
						<h3>親族以外の方からのご依頼の場合</h3>
						<p>委任状、身分証明書の他に、<span>依頼主の身分証明書のコピー</span>が必要となります。</p>
					</li>
					<li class="no5">
						<h3>法人の場合</h3>
						<p>法人の場合は、身分証として、名称、本店又は主たる事務所の所在地と、
						当取引の任に当たっている代表者・担当者の氏名、住所、生年月日を証明できる書類が必要になります。</p>
					</li>
				</ul>
			</div><!--syuttyou-->
			<div class="side">
				<?PHP get_template_part('sideblog'); ?>
			</div>
		</div><!--flex-wrap-->
	</div><!--main-->
</div><!--wrap_top-->

<?PHP get_footer(); ?>
