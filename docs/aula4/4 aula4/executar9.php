<?php
$nome =$_POST ['nome'];
$nascimento =$_POST ['nas'];

$idade = 2017 - $nascimento;
	echo "tem a idade de ".$idade;
$dezoito = $nascimento + 18;
	echo "<br>tera 18 anos em ".$dezoito;
$vinte_cinco = $nascimento + 25;
	echo "<br> tera 25 anos em ".$vinte_cinco;
$cinquenta = $nascimento + 50;
	echo "<br> tera 50 anos em ".$cinquenta;
$oitenta_cinco = $nascimento + 85;
	echo "<br> tera 85 anos em ".$oitenta_cinco;
?>