<?php
header("Content-type: text/html; charset=utf-8");
//作用域
$x=5; // 全局作用域

function myTest() {
  $y=10; // 局部作用域
  echo "<p>测试函数内部的变量：</p>";
  echo "变量 x 是：$x";
  echo "<br>";
  echo "变量 y 是：$y";
} 

myTest();

echo "<p>测试函数之外的变量：</p>";
echo "变量 x 是：$x";
echo "<br>";
echo "变量 y 是：$y";

echo "<hr>";
//global
$x=5;
$y=10;

function myTest1() {
  global $x,$y;
  $y=$x+$y;
}

myTest1();
echo $y; // 输出 15

echo "<hr>";
//global重写
$x=5;
$y=10;

function myTest2() {
  $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
} 

myTest2();
echo $y; // 输出 15

echo "<hr>";
//static
function myTest3() {
  static $x=0;
  echo $x;
  $x++;
}

myTest3();
echo "<br>";
myTest3();
echo "<br>";
myTest3();


?>