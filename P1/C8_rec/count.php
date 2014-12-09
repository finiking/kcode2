<?php
require 'rec.php';

$w = $_POST["width"];
$h = $_POST["height"];

$r = new rec($w, $h);
$area = $r -> getArea();
$per = $r -> getPer();
$isq = $r -> isSquare();
$data = array("area" => $area, "per" => $per, "isq" => $isq);
// $data = "{'area' : $area,'per' : $per}";
// echo $data;
echo json_encode($data);  
?>