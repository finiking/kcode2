<?php
$x = 10;
$y = 6;
echo($x + $y);// 输出16
echo($x - $y);// 输出4
echo($x * $y);// 输出60
echo($x / $y);// 输出1.6666666666667
echo($x % $y);// 输出4

echo "<hr>";
//赋值运算
$x=10; 
echo $x; // 输出10

$y=20; 
$y += 100;
echo $y; // 输出120

$z=50;
$z -= 25;
echo $z; // 输出25

$i=5;
$i *= 6;
echo $i; // 输出30

$j=10;
$j /= 5;
echo $j; // 输出2

$k=15;
$k %= 4;
echo $k; // 输出3

echo "<hr>";
//String
$a = "Hello";
$b = $a . " world!";
echo $b; // 输出Hello world! 

$x="Hello";
$x .= " world!";
echo $x; // 输出Hello world! 

echo "<hr>";
// ++ / --
$x=10; 
echo ++$x; // 输出11

$y=10; 
echo $y++; // 输出10

$z=5;
echo --$z; // 输出4

$i=5;
echo $i--; // 输出5

echo "<hr>";
//比较
$x=100; 
$y="100";

var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";

$a=50;
$b=90;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";
var_dump(0 == '0');
echo "<br>";
var_dump(0 === '0');

echo "<hr>";
//数组
$x = array("a" => "red", "b" => "green"); 
$y = array("c" => "blue", "d" => "yellow"); 
$z = $x + $y; // $x 和 $y 数组合并
var_dump($z);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);
?>

