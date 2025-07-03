<?php
$sal = $_POST ['sal'];
$fn = $_POST ['fn'];
echo "Salario: $sal <br>Financiamento : $fn <br>" ;
$max = $sal*5;
if (($sal > $max) && ($fn < 0)){
	echo " NEGADO!";
}
else{
	echo "CONCEDIDO!";
}
?>