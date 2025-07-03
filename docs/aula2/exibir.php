<?php
/*variaveis*/
$nome = $_POST['txtnome'];
$idade = $_POST['txtidade'];
$sexo = $_POST['txtsexo'];

/*Exibir*/
echo "Dados Enviados!";
echo "<br>Nome: " . $nome;
echo "<br>Idade: " . $idade;
/*estrutura de decisão*/

if($idade < 18)
{
	echo "<br> Menor de idade.";
}
elseif ($idade > 64)
{
	echo "<br> Idoso.";
}
else 
{
	echo "<br> Maior de Idade.";
}

/*operadores logicos*/ /*e= $$*/ /* ou= ||*/

if($idade > 17 && $sexo == "maculino") 
{
	echo "<br> Aliste-se";
}



?>