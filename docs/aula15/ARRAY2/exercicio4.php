<?php

$nomes = array($_POST['nome1'], $_POST['nome2'],$_POST['nome3'],$_POST['nome4'],$_POST['nome5'],$_POST['nome6'],$_POST['nome7'],$_POST['nome8'],$_POST['nome9'],$_POST['nome10']);

$idade = array($_POST['idade1'],$_POST['idade2'],$_POST['idade3'],$_POST['idade4'],$_POST['idade5'],$_POST['idade6'],$_POST['idade7'],$_POST['idade8'],$_POST['idade9'],$_POST['idade10']);

for ($w = 0; $w <= 9; $w++)
{
	if($idade[$w]>=18)
	{
		print $names[$w]. "tem" .$idade[$w] . "anos <br>";
	}
	}
	for($z = 0; $z <=9; $z++)
	{
		if($idade[$z] < 18)
		{
			print $nomes[$z]. "tem" . $idade[$z]. "Anos <br>";
		}
	}

?>