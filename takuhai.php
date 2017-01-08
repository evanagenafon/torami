<?php
/*
* Template Name: 宅配買取ページ
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<title>宅配買取について | TORAMI～トラミ～</title>

<?PHP get_header("2"); ?>
<div class="wrap_top">
	<div class="main">
		<div class="flex-wrap">
			<div class="takuhai">
				<h1><?PHP the_title(); ?></h1>
				<ul>
					<li class="no1">
						<h2>1.お申込み</h2>
						<p>お申込みは365日、24時間いつでも受け付けてます。<br>
						↓のお申込みフォームより【宅配買取について】を選択・必要事項を入力してください。</p>
						<p><a href="http://torami.jp/contact/">お問合せはこちら</a></p>
					</li>
					<li class="no2">
						<h2>2.宅配キット到着</h2>
						<ul>
							<li class="one">宅配買取カード</li>
							<li class="two">プチプチ</li>
							<li class="three">着払い伝票・ダンボール</li>
						</ul>
						<p>お届けする宅配キットの中身はこちら。<br>
						・全てのキットに着払い伝票と梱包材（プチプチ）が付属しています。<br>
						※着払い伝票のみを除く<br>
						お届け先はご身分証に記載されている現住所と同一住所をご指定ください。</p>
					</li>
					<li class="no3">
						<h2>3.詰めて発送</h2>
						<h3>身分証のコピー</h3>
						<p>【 お品物 ・ 買取カード ・ ご身分証のコピー 】を同梱してお送りください。<br>
						発送はお客様ご自身でお近くのコンビニや営業所へ直接持ち込み、<br>
						又は配送業者に集荷依頼をしていただいてもOK。</p>
						<p><a href="http://www.sagawa-exp.co.jp/send/branch_search/tanto/">佐川急便の集荷依頼はこちら</a></p>
						<p>ご住所やお名前に変更がない限り、宅配キットのご注文やご連絡も不要です。<br>
						ご自宅にある不要な段ボールに査定希望のお品物を入れてお送りください。<br>
						午前中指定でお送りください。</p>
						<!--<dl>
							<dt>〒658-0081</dt>
							<dt>兵庫県神戸市東灘区田中町 3-4-5-101</dt>
							<dt>TEL:078-414-7274</dt>
							<dt>FAX:078-414-7294</dt>
							<dd>※午前中指定でお送り下さい。</dd>
						</dl>-->
					</li>
					<li class="no4">
						<h2>4.スピード査定</h2>
						<p>弊社に商品到着後、迅速に査定をさせていただいております。</p>
						<p>※最短で届いたその日に査定完了致します。</p>
					</li>
					<li class="no5">
						<h2>5.お振込み</h2>
						<h3>ご満足いただければ即お振込み</h3>
						<p><span>ご満足いただけなかった場合はお品物を無料でご返送いたします。</span><br>
						※全品お買取ができない場合に限り着払いにてご返送いたします。</p>
					</li>
					<li class="no6">
						<p>営業時間：11:00～19:00</p>
						<p class="tel"><span data-action="call" data-tel="0784147274">078-414-7274</span></p>
						<p class="free"><a href="http://torami.jp/contact/">無料宅配買取申込み♪</a></p>
					</li>
				</ul>
			</div><!--takuhai-->
			<div class="side">
				<?PHP get_template_part('sideblog'); ?>
			</div>
		</div><!--flex-wrap-->
	</div><!--main-->
</div><!--wrap_top-->

<?PHP get_footer(); ?>
