<?php
$n1 = $_POST ['n1'];
$n2 = $_POST ['n2'];
$n3 = $_POST ['n3'];

if ($n1 < $n2)  
	{
		if ($n1 < $n3) {
	print "<br>$n1, $n2, $n3";
}
else{
	 ($n1 < $n3)
	 print "$n1, $n3, $n2";
	 }
else {
	print "$n3, $n1, $n2";
	 }
}     
else{
if ($n2 < $n3)
	{
		if($n1 < $n3) {
	print "$n2, $n3, $n1";

		}
	}
	else 
	{
	print "$n3, $n2, $n1"
}


?> 