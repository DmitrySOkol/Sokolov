#!/usr/bin/php
<?php

$arr = [];

$argv = array_unique($argv);
foreach($argv as $arg)
{
	if(is_integer($arg))
	{
		$arr[] = $arg;
	}
}
$size = sizeof($arr)-1;
for ($i = $size; $i>=0; $i--) {
  for ($j = 0; $j<=($i-1); $j++)
    if ($arr[$j]>$arr[$j+1]) {
      $k = $arr[$j];
      $arr[$j] = $arr[$j+1];
      $arr[$j+1] = $k;
    }
}

foreach ($arr as $number) {
	echo $number . ' ';
}