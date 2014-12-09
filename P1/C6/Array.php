<?php
header("Content-type: text/html; charset=utf-8"); 
$cars = array("Volvo", "BMW", "Benz");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";

echo count($cars);

echo "<hr>";
//for
$cars = array("Volvo", "BMW", "Benz");
$arrlength = count($cars);

for ($x = 0; $x < $arrlength; $x++) {
	echo $cars[$x];
	echo "<br>";
}

echo "<hr>";
//foreach
$cars = array("Volvo", "BMW", "Benz");
foreach ($cars as $value) {
	echo $value . "<br>";
}

echo "<hr>";
//guanlian
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";

$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.";

echo "<hr>";
//foreach
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $x_value) {
	echo "Key=" . $x . ", Value=" . $x_value;
	echo "<br>";
}

//多维
$cars = array( array("Volvo", 22, 18), array("BMW", 15, 13), array("Saab", 5, 2), array("Land Rover", 17, 15));

echo $cars[0][0] . ": 库存：" . $cars[0][1] . ", 销量：" . $cars[0][2] . ".<br>";
echo $cars[1][0] . ": 库存：" . $cars[1][1] . ", 销量：" . $cars[1][2] . ".<br>";
echo $cars[2][0] . ": 库存：" . $cars[2][1] . ", 销量：" . $cars[2][2] . ".<br>";
echo $cars[3][0] . ": 库存：" . $cars[3][1] . ", 销量：" . $cars[3][2] . ".<br>";

for ($row = 0; $row < 4; $row++) {
	echo "<p><b>Row number $row</b></p>";
	echo "<ul>";
	for ($col = 0; $col < 3; $col++) {
		echo "<li>" . $cars[$row][$col] . "</li>";
	}
	echo "</ul>";
}
?>