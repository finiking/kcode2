<?php
header("Content-type: text/html; charset=utf-8");

class person {
	public $name;
	public $gender;
	
	public function __construct($name, $gender) {
		$this -> name = $name;
		$this -> gender = $gender;
	}
	function __toString(){
		return "属性name=" . $this -> name . ",属性gender=" . $this -> gender;
	}
	function say() {
		echo "我叫" . $this -> name . ",我是" . $this -> gender;
	}
}
$st = new person("小明", "男生");
echo $st;

class A {}
class B {}
$a = new A();
if ($a instanceof A) {
    echo 'A';
}
?>