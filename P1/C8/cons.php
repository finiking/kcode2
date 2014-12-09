<?php
header("Content-type: text/html; charset=utf-8");

class person {
	public $name;
	public $gender;

	public function __construct($name, $gender) {
		$this -> name = $name;
		$this -> gender = $gender;
		echo "构造函数已执行<br>";
	}

	public function say() {
		echo "我叫" . $this -> name . ",我是" . $this -> gender;
	}
}

$st = new person("小明", "男生");
$st -> say();

?>