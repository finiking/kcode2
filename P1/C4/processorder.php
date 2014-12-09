<html>
	<head>
		<title>订单结算</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<h1>XX车行</h1>
		<h2>订单结果</h2>
		<?php
		echo '<p>订单创建于 ';
		echo date('Y-m-d H:i');
		echo '</p>';
		echo '<p>你的订单如下: </p>';
		echo $tireqty . ' 轮胎<br />';
		echo $oilqty . ' 油<br />';
		echo $sparkqty . ' 火花塞<br />';

		$totalqty = 0;
		$totalamount = 0.00;

		$totalqty = 0;
		$totalqty = $tireqty + $oilqty + $sparkqty;
		echo '总数: ' . $totalqty . '<br />';

		$totalamount = 0.00;

		define('TIREPRICE', 100);
		define('OILPRICE', 10);
		define('SPARKPRICE', 4);

		$totalamount = $tireqty * TIREPRICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE;

		echo '总金额: ￥' . number_format($totalamount, 2) . '<br />';

		$taxrate = 0.10;
		// local sales tax is 10%
		$totalamount = $totalamount * (1 + $taxrate);
		echo '总含税: $' . number_format($totalamount, 2) . '<br />';
	?>
</body>
</html>

