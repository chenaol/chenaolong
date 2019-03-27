<?php

//写出一个函数，求两个整数之和，在函数体内不得使用 +-*/ 四则运算。

function sum($num1,$num2)
{
	//定义空数组
	$data = array();
	//把数放入数组
	array_push($data,$num1,$num2);
	//数组求和
	$res = array_sum($data);
	//输出结果
	echo $res;
}
//传递参数
sum(11,26);




?>