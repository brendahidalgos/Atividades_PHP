<meta charset="utf-8">
<?php

$valor1 = $_POST['v1'];
$valor2 = $_POST['v2'];

$operacao = $_POST['op'];;

	switch($operacao)
	{
		case 'soma':
			print("A soma é: ".($valor1+$valor2));
		break;
		
		case 'sub':
			print("A subtração é: ".($valor1-$valor2));
		break;
		
		case 'mult':
			print("A multiplicação é: ".($valor1*$valor2));
		break;
		
		case 'div':
			print("A soma é: ".($valor1/$valor2));
		break;
		
		default:
			print("Operação inválida");
		break;
		
	}
?>