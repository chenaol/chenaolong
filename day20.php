<?php

$x = 1;
$y = 1;
function num($x,$y)
{
	if($x==0 && $y==0)
	{
		return 0;
	}
	elseif($x==0 || $y==0)
	{
		return 1;
	}
	else
	{
		return num($x-1,$y)+num($x,$y-1);
	}
}
echo num($x,$y);






?>