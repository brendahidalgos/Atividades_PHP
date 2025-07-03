<?php
$nome = $_POST['nome'];
$salario = $_POST['salario'];
	print $nome;
$primeiro = ($salario + 60%);
$segundo = ($salario + 45%);
$terceiro = ($salario + 30%);

if ($salario >= 800.00) {
	print $primeiro." Reajuste 60%";
}
if ($salario > 800)&&($salario < 2000.00){
	print $reajuste45." Reajuste 45%";
}
if($salario > 2000.00){
	print $reajuste30." Reajuste 30%";
}
?>