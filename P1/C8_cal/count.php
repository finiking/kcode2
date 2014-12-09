<?php
require 'cal.php';

$x = $_POST["n1"];
$y = $_POST["n2"];
$c = $_POST["ope"];

$cal = new cal($x, $y, $c);
$result = $cal -> docal();

echo $result;  
?>