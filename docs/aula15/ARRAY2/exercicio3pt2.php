<?php

$nomes = array($POST['nome1'],$POST['nome2'],$POST['nome3'],$POST['nome4'],$POST['nome5'],$POST['nome6'],$POST['nome7'],$POST['nome8'],$POST['nome9'],$POST['nome10']);
for ($k = 0; $k <= 10; $k++)
{
	print $nomes[$k]."<br>";
}
?>