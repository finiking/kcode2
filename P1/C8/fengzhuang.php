<?php
header("Content-type: text/html; charset=utf-8");

class person {
	public $name;		//全局属性
	protected $gender;	//保护属性
	private $age;		//私有属性
	
	private function game(){} //私有方法
	
	public function say() {
		echo "我叫" . $this -> name . ",我是" . $this -> gender;
	}
}

$st1 = new person();	
$st1 -> name = "小明";	
$st1 -> gender = "男生";
$st1 -> age = 20;


?>