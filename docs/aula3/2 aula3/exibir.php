<?php
/*variaveis*/
$nome = $_POST['txtnome'];
$salario = $_POST['txtsalario'];


/*Exibir*/
echo "Dados Enviados!";
echo "<br>Nome: " . $nome;
echo "<br>Salario: " . $salario;
/*estrutura de decisão*/
/*operadores logicos*/ /*e= $$*/ /* ou= ||*/
$novosalario = ($salario*-0.10+50) + $salario ; 
	echo "<br> Imposto de 10% = $novosalario";
?>
