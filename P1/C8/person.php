<?php
header("Content-type: text/html; charset=utf-8");

class person {
	public $name;		//属性name
	public $gender;		//属性gender

	//方法say()
	public function say() {
		echo "我叫" . $this -> name . ",我是" . $this -> gender;
	}
}

$st1 = new person();	//创建一个实例,即对象
$st1 -> name = "小明";	//给属性赋值
$st1 -> gender = "男生";

$st2 = new person();
$st2 -> name = "小红";
$st2 -> gender = "女生";

$st1 -> say();			//小明说话
echo "<br>";
$st2 -> say();			//小红说话
// 
// echo "<br>";
// print_r((array)$st1);
// echo "<br>";
// print_r($st2);
// var_dump($st1);

?>