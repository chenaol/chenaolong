<?php

function num($n)
{
	$i = 0;
	while($n != 0)
	{
		$i++;
		$n &= ($n-1);
	}
	return $i;
}
$n = 90;
echo num($n);



?>