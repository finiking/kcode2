<?php
$i = 1;
while ($i < 1) {
	$i++;
	echo "The number is " . $i . "<br>";
}

echo "<hr>";
//do...while
$i = 1;
do {
	$i++;
	echo "The number is " . $i . "<br>";
} while ($i<1);

echo "<hr>";
//for
for ($i = 1; $i <= 5; $i++) {
	echo "The number is " . $i . "<br>";
}

echo "<hr>";
//foreach
$x = array("one", "two", "three");
foreach ($x as $value) {
	echo $value . "<br>";
}
for($i = 0; $i < count($x); $i++) {
	echo $x[$i]."<br>";
}

?>
