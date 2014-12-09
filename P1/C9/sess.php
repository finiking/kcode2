<?php
header("Content-type: text/html; charset=utf-8");

$_COOKIE['myvar'] = 22;

if(isset($_COOKIE['myvar'])){
	echo $_COOKIE['myvar'];
}

unset($_COOKIE['myvar']);//或session_destroy();销毁所有会话变量

?>