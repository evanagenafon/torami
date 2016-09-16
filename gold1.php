<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>相場更新</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<?PHP
$k500= htmlspecialchars($_REQUEST["k500"] , ENT_QUOTES);
$p500= htmlspecialchars($_REQUEST["p500"] , ENT_QUOTES);
$sv= htmlspecialchars($_REQUEST["sv"] , ENT_QUOTES);

$k400= $k500*0.9946;
$kcoin= $k500*0.9934;
$k24= $k500*0.9698;
$k22= $k500*0.8778;
$k21= $k500*0.8647;
$k20= $k500*0.8044;
$k18= $k500*0.7398;
$k14= $k500*0.5401;
$k10= $k500*0.38;
$k9= $k500*0.335;
$p400= $p500*0.9948;
$pcoin= $p500*0.9861;
$p1000= $p500*0.9696;
$p950=$p500*0.9198;
$p900=$p500*0.8897;
$p850=$p500*0.8396;
$pt=$p500*0.7557;
$kp= ($k18+$p900)/2;
$kp2= ($k18+$p850)/2;
$sv925=$sv-6;

?>
<?php
file_put_contents("sample.txt", "
			<table>
				<tr>
					<th>インゴット 500g以上</th>
					<td>￥".number_format($k500)."</td>
				</tr>
				<tr>
					<th>インゴット 500g未満</th>
					<td>￥".number_format($k400)."</td>
				</tr>
				<tr>
					<th>K24　コイン</th>
					<td>￥".number_format($kcoin)."</td>
				</tr>
				<tr>
					<th>K24 (純度100％)</th>
					<td>￥".number_format($k24)."</td>
				</tr>
				<tr>
					<th>K22 (純度91.6％)</th>
					<td>￥".number_format($k22)."</td>
				</tr>
				<tr>
					<th>K21.6 (純度90.0％)</th>
					<td>￥".number_format($k21)."</td>
				</tr>
				<tr>
					<th>K20 (純度83.5％)</th>
					<td>￥".number_format($k20)."</td>
				</tr>
				<tr>
					<th>K18 (純度75.0％)</th>
					<td>￥".number_format($k18)."</td>
				</tr>
				<tr>
					<th>K14 (純度58.5％)</th>
					<td>￥".number_format($k14)."</td>
				</tr>
				<tr>
					<th>K10 (純度41.7％)</th>
					<td>￥".number_format($k10)."</td>
				</tr>
				<tr>
					<th>K 9 (純度37.5％)</th>
					<td>￥".number_format($k9)."</td>
				</tr>
				<tr>
					<th>K18 / Pt900 (50:50)</th>
					<td>￥".number_format($kp)."</td>
				</tr>
				<tr>
					<th>K18 / Pt850 (50:50)</th>
					<td>￥".number_format($kp2)."</td>
				</tr>
			</table>
			</div><!--left-->
			<div class='right'>
				<h3 class='price2'>プラチナ現金買取価格   <span>1g当たり</span></h3>
				<table>
					<tr>
						<th>インゴット 500g以上</th>
						<td>￥".number_format($p500)."</td>
					</tr>
					<tr>
						<th>インゴット 500g未満</th>
						<td>￥".number_format($p400)."</td>
					</tr>
					<tr>
						<th>Pt1000 コイン</th>
						<td>￥".number_format($pcoin)."</td>
					</tr>
					<tr>
						<th>Pt1000 (純度100％)</th>
						<td>￥".number_format($p1000)."</td>
					</tr>
					<tr>
						<th>Pt 950 (純度 95％)</th>
						<td>￥".number_format($p950)."</td>
					</tr>
					<tr>
						<th>Pt 900 (純度 90％)</th>
						<td>￥".number_format($p900)."</td>
					</tr>
					<tr>
						<th>Pt 850 (純度 85％)</th>
						<td>￥".number_format($p850)."</td>
					</tr>
					<tr>
						<th>Pt ・ Pm</th>
						<td>￥".number_format($pt)."</td>
					</tr>
				</table>
				<h3 class='price3'>シルバー現金買取価格   <span>1g当たり</span></h3>
				<table>
					<tr>
						<th>SV 1000</th>
						<td>￥".number_format($sv)."</td>
					</tr>
					<tr>
						<th>SV 925</th>
						<td>￥".number_format($sv925)."</td>
					</tr>
				</table>
				</div><!--right-->");
				?>

<?php file_put_contents("souba.txt", "
		<dd><span class='k_cl'>K18</span>   ￥".number_format($k18)."</dd>
		<dd><span class='pt'>PT900</span> ￥".number_format($p900)."</dd>
")?>
</head>
<body>
<div class="koushin">
	<p>貴金属相場を更新しましたわ！！</p>
	<a href="http://torami.jp/wp-admin/">ここを押して早く戻ったほうがええと思う。</a>
</div>
</body>
</html>
