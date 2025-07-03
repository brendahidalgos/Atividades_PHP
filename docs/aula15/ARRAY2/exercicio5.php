<?php

$cadastro = array($_POST['nome'], $_POST['idade'],$_POST['cpf'],$_POST['rg'],$_POST['telefone'],$_POST['email'],$_POST['cep'],$_POST['rua'],$_POST['bairro'],$_POST['cidade'],$_POST['estado']);

for($x = 0;$x <= 10; $x++)
{
	print $cadastro[$x] . "<br>";
}

/*print $cadastro[0] . "<br>";
print $cadastro[1] . "<br>";
print $cadastro[2] . "<br>";
print $cadastro[3] . "<br>";
print $cadastro[4] . "<br>";
print $cadastro[5] . "<br>";
print $cadastro[6] . "<br>";
print $cadastro[7] . "<br>";
print $cadastro[8] . "<br>";
print $cadastro[9] . "<br>";
print $cadastro[10] . "<br>";*/

?>