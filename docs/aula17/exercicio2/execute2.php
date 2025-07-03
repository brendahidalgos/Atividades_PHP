<?php
$produto = $_POST ['produto'];
$valor = $_POST ['valor'];
$lucro = $_POST['lucro'];
$valorvenda = ((($valor*$lucro)/100)+$valor);

	print "Produto: ".$produto;
	print "<br> Valor da Venda: R$".$valorvenda;


