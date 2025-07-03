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
$novosalario = ($salario*0.25) + $salario; 
	echo "<br> Aumento de 25% = $novosalario";


?>


