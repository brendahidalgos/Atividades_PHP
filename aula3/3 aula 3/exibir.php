<?php
/*variaveis*/
$nome = $_POST['txtnome'];
$salario = $_POST['txtsalario'];
$vendas = $_POST['txtvendas'];

/*Exibir*/
echo "Dados Enviados!";
echo "<br>Nome: " . $nome;
echo "<br>Salario: " . $salario;
echo "<br>Vendas:" . $vendas;
/*estrutura de decisão*/
/*operadores logicos*/ /*e= $$*/ /* ou= ||*/
$novosalario = ($vendas*0.15) + $salario ; 
	echo "<br> Ganho de 15% = $novosalario";
?>
