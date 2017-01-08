<?php
/*
* Template Name: LINEページ
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<title>かんたんLINE査定 | TORAMI～トラミ～</title>

<?PHP get_header("2"); ?>
<div class="wrap_top">
	<div class="main">
		<div class="flex-wrap">
			<div class="line">
				<div class="breadcrumbs">
					<h1>かんたんLINE査定の流れ</h1>
					<?php if(function_exists('bcn_display')){
							bcn_display();
					}?>
				</div>
				<h2>登録はかんたん！たったの３ステップ</h2>
				<ul class="touroku">
					<li class="no1">STEP1
					<p>LINEを開き「その他」メニューから「友だち追加」を選択して下さい。</p></li>
					<li class="no2">STEP2
					<p>@torami0901で検索して下さい。</p></li>
					<li class="no3">STEP3
					<p>「torami」を友達リストに追加して下さい。</p></li>
				</ul>
				<h2>LINE査定の方法</h2>
				<p>トラミのLINE査定はとっても簡単！「撮って送るだけ！」</p>
				<ul class="satei">
					<li class="no1">撮る
					<p>査定したい商品をスマホで撮影してください。※写真アプリなどのフィルターを適用しないで下さい。</p></li>
					<li class="no2">送る
					<p>「torami」のアカウントに撮影した写真を送って下さい。</p></li>
					<li class="no3">あとは査定結果を待つだけ！
					<p>鑑定士から査定結果が送られてきます♪</p></li>
				</ul>
				<h2>高額査定になる写真の送り方！</h2>
				<ul class="picture">
					<li>
						<h3><span>point<br />1</span>良い写真を撮る</h3>
						<p>LINE査定ではお客様がご用意した写真をもとに査定を行います。よりスピーディに、より多くの査定を行えるように「明るい場所」で「ピントを合わせて」撮影を行って下さい。</p>
						<ul>
							<li class="no1">バッグの例
								<p>※明るいところで、全体が写るように撮影してください。</p>
							</li>
							<li class="no2">時計の例
								<p>※明るいところで、文字盤にピントを合わせてください。</p>
							</li>
							<li class="no3">アクセサリーの例
								<p>※明るいところで、ピントを全体に合わせ、斜め上から撮影してください。</p>
							</li>
						</ul>
					</li>
					<li>
					<h3><span>point<br />2</span>複数枚の写真を用意する</h3>
					<p>1枚だけでなく、複数枚写真を送っていただけると詳細な査定が行えます。細かい部分まできっちり査定を行うので、高額査定に繋がります！</p>
					</li>
				</ul>
				<h2>ご注意事項</h2>
				<ul class="note">
					<li>・店舗営業時間(11：00～19：00)なら最短3分以内の回答も可能です。(商品によりお時間をいただく場合もございます)</li>
					<li>・おおよその査定金額をお伝え致します。画像やコメントが明確なほど正確な査定額の提示ができます。(質問や画像を追加でお願いする場合がございます。)</li>
					<li>・商品の価格は現物を見て変動する場合がございます。</li>
					<li>・査定結果はその金額を保証するものではございません。</li>
					<li>・その他ご質問等ございましたら、お気軽にお問い合わせください。</li>
				</ul>
				<p><img src="<?php bloginfo('template_url'); ?>/img/line.jpg" alt="スマホから簡単登録"></p>
			</div><!--line-->
			<div class="side">
				<?PHP get_template_part('sideblog'); ?>
			</div>
		</div><!--flex-wrap-->
	</div><!--main-->
</div><!--wrap-->

<?PHP get_footer(); ?>
