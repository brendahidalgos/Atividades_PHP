<?php

$mes = $_POST['mes'];

switch ($mes) {
	case 1:
		print("Janeiro");
		break;

	case 2:
		print("Fevereiro");
		break;	

	case 3:
		print("Março");
		break;	
				
	default:
		print("Erro!");
		break;
}



?>