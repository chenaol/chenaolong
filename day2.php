<?php

function flower()
{
	for($i=0;$i<=9;i++)
	{
		for($j=0;$j<=9;$j++)
		{
			for($a=0;$a<=9;$a++)
			{
				if($i*$i*$i+$j*$j*$j+$a*$a*$a == 100*$i+10*$j+$a)
				{
					echo $flower;
				}
			}
		}
	}
}