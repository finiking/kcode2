<?php 
//String
$x = "Hello world!";
echo $x;
echo "<br>"; //输出HTML标记
$x = 'Hello world!';
echo $x;

echo $x . "I am Fini!";
echo "I say:" . $x ."I am Fini!";

echo "<hr>";
//Integer
$x = 5985;
var_dump($x);//函数var_dump()会返回变量的数据类型和值
echo "<br>"; 
$x = -345; // 负数
var_dump($x);
echo "<br>"; 
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);

echo "<hr>";
//Float
$x = 10.365;
var_dump($x);
echo "<br>"; 
$x = 2.4e+3;
var_dump($x);
echo "<br>"; 
$x = 8E-5;
var_dump($x);

echo "<hr>";
//Boolean
$x=true;
$y=false;
echo $x;
echo "<br>"; 
echo $y;

echo "<hr>";
//Array
$cars=array("Volvo","BMW","Benz");
var_dump($cars);
$nums=array(1,1,1,2,2,2,3,3,3);
echo "<br>";
var_dump($nums);
echo "<hr>";
//Null
$x="Hello world!";
$x=null;
var_dump($x);

?>