<?php
$valor1 = 10;
$valor2 = 20;

$operacao = 'soma';
	switch($operacao);
	{
		case 'soma':
			print "A soma é: ".($valor1+$valor2);
		break;

		case 'sub':
			print "A subtração é: ".($valor1-$valor2);
		break;

		case 'mult':
			print "A multiplicação é: ".($valor1*$valor2);
		break;

		case 'div':
			print "A divisão é: ".($valor1/$valor2);
		break;

		default: 
			print "Operação invalida";
		break;


	}