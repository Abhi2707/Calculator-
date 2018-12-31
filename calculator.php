<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="cal.css">
	<title></title>
</head>
<body>
	<div>
	<form action="calculator.php" method="POST" >
<input class="c1" type="text" name="txt1" placeholder="value1">
<input class="c1" type="text" name="txt2" placeholder="value2">
<br><input class="c2" type="submit" name="txt3" value="ADD">
<input class="c2" type="submit" name="txt4" value="SUBTRACT">
<input class="c2" type="submit" name="txt5" value="MULTIPLICATION">
<input class="c2" type="submit" name="txt6" value="DIVISION">
</form>
</div>
<div >
	<h2><font color="green">RESULT</font></h2>
<?php

class Cal
{	

	function Add($a,$b)
	{
		$d = $a + $b;
		return $d;
	}
function Sub($c,$d){
	$e=$c-$d;
	return $e;
}
function Mul($m,$n){
	$o=$m*$n;
	return $o;
}
function div($r,$s){
	$j=$r/$s;
	return $j;
}
}
extract($_POST);
//echo isset($txt4);
$ob1=new Cal();
if (isset($txt4)) 
{
	
	echo"<font color='blue' size='40px'>". $ob1->Sub($txt1,$txt2)."</font>";	
}
if (isset($txt3)) 
{
	//$ob1=new Cal();
	echo"<font color='blue' size='40px'>". $ob1->Add($txt1,$txt2)."</font>";	
}
if (isset($txt5)) 
{
	//$ob1=new Cal();
	echo"<font color='blue' size='40px'>". $ob1->Mul($txt1,$txt2)."</font>";	
}
if (isset($txt6)) 
{
	//$ob1=new Cal();
	echo"<font color='blue' size='40px'>". $ob1->Div($txt1,$txt2)."</font>";	
}
?>
<!--
<div class="c4">
	<form action="calculator.php" method="POST"> </form>
	<label >SELECT AN OPERATION</label>
	<select name="dropdown">
		<option value="sin">SIN</option>
		<option value="cos"> COS</option>
		<option value="tan">TAN</option>
		<option value="cot">COT</option>

	</select>
</div>
-->
</div>


</body>
</html>
