<?php
header("Content-type: text/html; charset=utf-8"); 

function create_table($data) {
	echo '<table border = "1">';
	reset($data);
	$value = current($data);
	while ($value) {
		echo "<tr><td>".$value."</td></tr>\n";
		$value = next($data);
	}
	echo '</table>';
}

$my_array = array('第一行.', '第二行.', '第三行.');
create_table($my_array);
?>
