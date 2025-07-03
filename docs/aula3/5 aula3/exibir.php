<?php
/*variaveis*/
$qtd_pessoas = $_POST['txtpessoas'];
$qtd_choops = $_POST['txtchoops'];
$qtd_pizza = $_POST['txtpizza'];
$qtd_cobertura = $_POST['txtcobertura'];

$vl_choops = 5.00;
$vl_pizza = 20.00;
$vl_cobertura = 1.50;

/*Exibir*/
echo "Dados Enviados!";
echo "<br>Choops: " . $qtd_choops;
echo "<br>Pizza:" . $qtd_pizza;
echo "<br>Cobertura:" . $qtd_cobertura;
echo "<br> Pessoas:" . $qtd_pessoas;

/*estrutura de decisão*/
/*operadores logicos*/ /*e= $$*/ /* ou= ||*/
$valorchoops = ($qtd_choops*$vl_choops);
$valorpizza= ($qtd_pizza*$vl_pizza);
$valorcobertura= ($qtd_cobertura*$vl_cobertura);
$conta = ($valorchoops + $valorpizza + $valorcobertura);
	echo "<br> Conta = $conta";


$total = ($conta*0.10) + $conta; 
	echo "<br> 10% a pagar do Garcom = $total";

$dividindoconta = ($total/$qtd_pessoas);
	echo "<br> Total a ser pago por cada pessoa = $dividindoconta";

?>
