<?php
header("Content-type: text/html; charset=utf-8"); 

function var_args()
{
  echo "参数数目:";
  echo func_num_args();

  echo '<br />';
  $args = func_get_args();
  foreach ($args as $arg)
    echo $arg.'<br />';
}

var_Args(1,2,3);

var_args("hello", 47.3);

?>
