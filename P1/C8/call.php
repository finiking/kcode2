<?php
header("Content-type: text/html; charset=utf-8");

class person {
	public $name;
	public $gender;

	function __call($name, $args){
		echo "要调用的方法是：" . $name . ",参数是：";
		var_dump($args);
	}
	
	function say() {
		echo "我叫" . $this -> name . ",我是" . $this -> gender;
	}
}

$st = new person();
$st -> say1("aaa");

?>