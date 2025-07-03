<meta charset="utf-8">
<?php

$valor1 = $_POST['v1'];
$valor2 = $_POST['v2'];

$operacao = $_POST['op'];;

	switch($operacao)
	{
		case '+':
			print("A soma é: ".($valor1+$valor2));
		break;
		
		case '-':
			print("A subtração é: ".($valor1-$valor2));
		break;
		
		case '*':
			print("A multiplicação é: ".($valor1*$valor2));
		break;
		
		case '/':
			print("A soma é: ".($valor1/$valor2));
		break;
		
		default:
			print("Operação inválida");
		break;
		
	}
?>