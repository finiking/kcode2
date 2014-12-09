<?php
header("Content-type: text/html; charset=utf-8");

class rec{
	public $width;
	public $height;
	
	public function __construct($w = 0, $h = 0){
		$this -> width = $w;
		$this -> height = $h;
	}

	public function getArea(){
		return ($this -> width * $this -> height);
	}
	
	public function getPer(){
		return (($this -> width + $this -> height) * 2);
	}
	
	function isSquare(){
		if($this -> width == $this -> height){
			return true;
		} else {
			return false;
		}
	}
}

$r1 = new rec(10, 5);
echo "这个矩形的面积是" . $r1 -> getArea();
echo "<br>";
echo "这个矩形的周长是". $r1 -> getPer();
echo "<br>";
if($r1 -> isSquare()) {
	echo "这个矩形是正方形";
}else{
	echo "这只是个普通的矩形";
}

$r = new rec(10, 5);
$area = $r -> getArea();
$per = $r -> getPer();
?>