<?php
/*variaveis*/
$nome = $_POST['txtnome'];
$diaria = $_POST['txtdiaria'];


/*Exibir*/
echo "Dados Enviados!";
echo "<br>Nome: " . $nome;
echo "<br>Valor da Diaria:" . $diaria;

/*estrutura de decisão*/
/*operadores logicos*/ /*e= $$*/ /* ou= ||*/
$diariopromocional = ($diaria*-0.25) + $diaria ; 
	echo "<br> Promocao de 25% de Desconto = $diariopromocional";
$valor80 = (75*0.80*$diariopromocional);
	echo "<br> Valor 80 = $valor80";
$valor20 = (75*0.20*$diaria);
	echo "<br> Valor 20 = $valor20";
$diferenca = ($valor80-$valor20);
	echo "<br> Diferença = $diferenca";




?>
