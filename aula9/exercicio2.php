<meta charset="utf-8">
<?php

$valorRecebido = $_POST['op'];
$idioma = $_POST['idioma'];

	switch($valorRecebido)
	{
		case 1:
			if($idioma == "p")
				print("um");
			if($idioma == "i")
				print("one");
		break;
		
		case 2:
			if($idioma == "p")
				print("dois");
			if($idioma == "i")
				print("two");
		break;
		
		case 3:
			if($idioma == "p")
				print("três");
			if($idioma == "i")
				print("theree");
		break;
		
		case 4:
			if($idioma == "p")
				print("quatro");
			if($idioma == "i")
				print("four");
		break;
		
		case 5:
			if($idioma == "p")
				print("cinco");
			if($idioma == "i")
				print("five");
		break;
		
		default:
			print("Operação inválida");
		break;
		
	}
?>