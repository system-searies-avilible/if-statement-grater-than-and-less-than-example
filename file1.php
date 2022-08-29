<?php

echo"<center><h1><ins>Grater than and less than records :</ins></h1></center>";

$num1=80;
$num2=100;
$num3=90;

if($num1>$num2 && $num1>$num3){
	echo"Number 1 is grater then number 2 and number3";
}
if($num2>$num1 && $num2>$num3){
	echo"Number 2 is grater then number 1 and number3";
}
if($num3>$num1 && $num3>$num2){
	echo"Number 3 is grater then number 1 and number2";
}
?>