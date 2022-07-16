<?php 

function compare($num1, $num2, $num3)
{
  $arr = array($num1, $num2, $num3);
  sort($arr);

  return $arr[2];
}
