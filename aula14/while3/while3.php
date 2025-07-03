<?php
$valor =$_POST ['valor'];
print"Tabuada do ".$valor;
$x = 0;
while ($x <=10)
{
	print"<br>";
	print"$x * $valor = ".($x * $valor);
	$x++;
}
?>
