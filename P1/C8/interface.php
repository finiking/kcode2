<?php
header("Content-type: text/html; charset=utf-8");

//接口
interface child {
	//不用加abstract
	function say();
	function play();
}
class boy implements child {
	function say(){
		echo "我叫" . $this -> name . ",我是男生";
	}
	function play(){
		echo $this -> name . "正在踢足球";
	}
}
class girl implements child {
	function say(){
		echo "我叫" . $this -> name . ",我是女生";
	}
	function play(){
		echo $this -> name . "正在踢毽子";
	}
}

$c1 = new boy();
$c2 = new girl();
$c1 -> name = "小明";
$c1 -> say();
echo "<br>";
$c1 -> play();
echo "<br>";
$c2 -> name = "小红";
$c2 -> say();
echo "<br>";
$c2 -> play();


?>