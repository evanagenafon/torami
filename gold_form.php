<?php
/*
* Template Name: 相場入力ページ
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>相場入力</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="wp-content/themes/torami/gold1.php">
	<div class="gold">
			<div class="left">
			<h3 class="price1">金現金買取価格   <span>1g当たり</span></h3>
			<table>
				<tr>
					<th>インゴット 500g以上</th>
					<td><input type="text" name="k500" id="k500" /></td>
				</tr>
			</table>
			</div><!--left-->
			<div class="right">
				<h3 class="price2">プラチナ現金買取価格   <span>1g当たり</span></h3>
				<table>
					<tr>
						<th>インゴット 500g以上</th>
						<td><input type="text" name="p500" /></td>
					</tr>
				</table>
				<h3 class="price3">シルバー現金買取価格   <span>1g当たり</span></h3>
				<table>
					<tr>
						<th>SV 1000</th>
						<td><input type="text" name="sv" /></td>
					</tr>
				</table>
			</div><!--right-->
		</div><!--gold-->
		
	<p><input type="submit" name="button" value="送信" /></p>
</form>
</body>
</html>
