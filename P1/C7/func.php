 <?php
header("Content-type: text/html; charset=utf-8");
// 
// function my_func() {
	// echo "我的自定义函数my_func";
// }
// 
// my_func();
// echo "<hr>";
// 
function call($name) {
	echo "我给" . $name . "打过电话了<br>";
}

call("小明");
call("小黑");
call("小红");

echo "<hr>";
// 
// function call2($name, $num) {
	// echo "我给" . $name . "打过" . $num . "个电话了<br>";
// }
// 
// call2("小明", 3);
// call2("小黑", 4);
// call2("小红", 1);
// 
// echo "<hr>";
// 
// function call3($name, $num = 1) {
	// echo "我给" . $name . "打过" . $num . "个电话了<br>";
// }
// 
// call3("小明", 3);
// call3("小黑");
// call3("小红", 1);
// 
// echo "<hr>";
// 
// function call4($name, $num = 2, $num2 = 1) {
	// echo "我给" . $name . "打过" . $num . "个电话，接了" . $num2 . "个<br>";
// }
// 
// call4("小明", 3, 2);
// call4("小黑");
// call4("小红", 1);
 ?>