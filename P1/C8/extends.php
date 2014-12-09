<?php header("Content-type: text/html; charset=utf-8");

class person {
	public $name;
	public $gender;

	public function say() {
		echo "我叫" . $this -> name . ",是" . $this -> gender;
	}
}

class man extends person {
	public $age;
	static $money = 100;

	public function say() {
		parent::say();
		echo "," . $this -> age . "岁了，有" . self :: $money ."元零用钱！";
		self :: pay();
	}
	
	public function pay(){
		echo "然后花掉了！";
	}
}

$st1 = new man();
$st1 -> name = "小明";
$st1 -> gender = "男生";
$st1 -> age = 10;

$st2 = new person();
$st2 -> name = "小红";
$st2 -> gender = "女生";



$st1 -> say();
echo "<br>";
$st2 -> say();
echo "<br>";
?>