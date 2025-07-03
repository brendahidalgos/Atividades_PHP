<?php
$valor =$_POST ['valor'];
print"Tabuada do ".$valor;
for($x = 0; $x <=10; $x++)
{
	print"<br>";
	print"$x * $valor = ".($x * $valor);
}
?>