<?php
header("Content-type: text/html; charset=utf-8");

$ck = $_COOKIE['mycookie'];

if (isset($ck)) {
	echo "{$ck}还在呢！:-D";
} else {
	echo "我的小饼干丢了 %>_<%";
}

setcookie("mycookie","我的小饼干",time()-3600);

?>