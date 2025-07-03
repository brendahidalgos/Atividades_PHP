<meta charset="utf-8"/>
<?php
$valor = $_POST ['valor'];
$numero = array(1,22,34,45,87,92,56,31,64,92,10);

	if ($valor == $numero)
{
	print "Valor ".$valor." identificado";
}
	else 
{
	print "<br>Valor não identificado";
}
?>