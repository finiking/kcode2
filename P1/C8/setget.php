<?php
header("Content-type: text/html; charset=utf-8");

class person {
	private $name;
	private $gender;

	public function __set($pername, $value){
		$this -> $pername = $value;
	}
	public function __get($pername){
		return $this -> $pername;
	}
	
	public function say() {
		echo "我叫" . $this -> name . ",我是" . $this -> gender;
	}
}
$st1 = new person();	
$st1 -> name = "小明";		//__set
$st1 -> gender = "男生";		//__set
echo "访问私有属性name:" . $st1 -> name . "<br>";  //__get
$st1 -> say();	


?>