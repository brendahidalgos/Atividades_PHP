<meta charset="utf-8">
<?php

$valorRecebido = $_POST['op'];

	switch($valorRecebido)
	{
		case 1:
			print("um");
		break;
		
		case 2:
			print("dois");
		break;
		
		case 3:
			print("três");
		break;
		
		case 4:
			print("quatro");
		break;
		
		case 5:
			print("cinco");
		break;
		
		default:
			print("Operação inválida");
		break;
		
	}
?>