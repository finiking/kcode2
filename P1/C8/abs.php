<?php
header("Content-type: text/html; charset=utf-8");

//抽象类
abstract class child {
	public $name;
	//抽象方法，没有具体实现
	abstract function say();
}
class boy extends child {
	public function say(){
		echo "我叫" . $this -> name . ",我是男生";
	}
}
class girl extends child {
	public function say(){
		echo "我叫" . $this -> name . ",我是女生";
	}
}


$c1 = new boy();
$c2 = new girl();
$c1 -> name = "小明";
$c1 -> say();
echo "<br>";
$c2 -> name = "小红";
$c2 -> say();

?>