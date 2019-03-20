<?php
//1到100的和
echo "1.1+2+3+...+100和";
echo "<br>";echo "<br>";
//方法一
function sum()
{
	$a = 0;
	for($i=1;$i<=100;$i++)
	{
		$a=$a+$i;
	}
	echo $a;
}
echo sum();
echo "<br>";
//方法二
function sum2()
{
	$n = 100;
	$n=($n+1)*($n/2);
	echo $n;
}
echo sum2();
echo "<br>";
function sum3()
{
	$n=100;
	$n=($n/2)+$n*($n/2);
	echo $n;
}
echo sum3();

echo "<br>";echo "<br>";
//N的阶乘
echo "2.N的阶乘";
echo "<br>";echo "<br>";
function aaa()
{
	$n = N;
	
	for($i=$n;$i<=1;$i--)
	{
		$a = $n*($n-1)*($n-2)*1;
	}
	echo $a;
}
echo aaa();

//回文字符串
echo "3.判断回文字符串";
echo "<br>";echo "<br>";

$str = 'abcbac';
function hw($str)
{
	$a = '';
	for($i=strlen($str-1);$i>=0;$i--)
	{
		$a .= $str[$i];
	}
	if($str == $a)
	{
		return "是";
	}
	else
	{
		return "不是";
	}
}
echo hw($str);



?>