<?php
//if
$t = date("H");
if ($t < "20") {
	echo "Have a good day!";
}

echo "<hr>";
//if...else
$t = date("H");
if ($t < "20") {
	echo "Have a good day!";
} else {
	echo "Have a good night!";
}

echo "<hr>";
//if...else if...else
$t = date("H");
if ($t < "10") {
	echo "Have a good morning!";
} else if ($t < "20") {
	echo "Have a good day!";
} else {
	echo "Have a good night!";
}

echo "<hr>";
//switch
$favcolor = "red";
switch ($favcolor) {
	case "red" :
		echo "Your favorite color is red!";
		break;//跳出循环
	case "blue" :
		echo "Your favorite color is blue!";
		break;
	case "green" :
		echo "Your favorite color is green!";
		break;
	default :
		echo "Your favorite color is neither red, blue, or green!";
}

?>