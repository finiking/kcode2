<?php
header("Content-type: text/html; charset=utf-8");

class person {
	public $name;
	public $gender;

	public function __construct($name, $gender) {
		$this -> name = $name;
		$this -> gender = $gender;
	}

	public function say() {
		echo "我叫" . $this -> name . ",我是" . $this -> gender;
	}
	
	public function __destruct(){
		echo "<h3 style='color:red'>析构函数已执行,对象被释放</h3>";
	}

}

$st = new person("小明", "男生");
unset($st);

$st -> say();


?>