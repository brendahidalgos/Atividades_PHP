<html>
<head>
<meta charset="utf-8"/>
<title> Exercicios 1</title>
<link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>
<body>
<nav>
	<ul class="menu">
		<li><center><a href="index.html">Home</a></li>
		<li><center><a href="exercicio1.php">Exercicio1</a></li>
		<li><center><a href="exercicio2.php">Exercicio2</a></li>
		<li><center><a href="exercicio3.php">Exercicio3</a></li>
		<li><center><a href="exercicio4.php">Exercicio4</a></li>
		<li><center><a href="quemsomos.html">Quem Somos</a></li>
	</ul>
</nav>
<img class="foto" src="foto.jpg"/>
<br><br>
<center>
	<form  action="" method="POST">
		<label> Números de Pessoas:</label>
		<input type="number" name="txtpessoas"/> <br>

		<label> Números de Choops:</label>
		<input type="number" name="txtchoops"/> <br>

		<label> Número de Pizzas:</label>
		<input type="nummber" name="txtpizza"/> <br>

		<label> Número de Coberturas:</label>
		<input type="number" name="txtcobertura"/> <br>
		
		<input type="submit" value="Enviar">

</form></body></html>
<?php
if(isset($_POST['txtpessoas'])&& ($_POST['txtchoops'])){
	$qtd_pessoas = $_POST ['txtpessoas'];
$qtd_choops = $_POST ['txtchoops'];
$qtd_pizza = $_POST ['txtpizza'];
$qtd_cobertura = $_POST ['txtcobertura'];
$vl_choops = 5.00;
$vl_pizza = 20.00;
$vl_cobertura = 1.50;

echo "<br>Choops: " . $qtd_choops;
echo "<br>Pizza:" . $qtd_pizza;
echo "<br>Cobertura:" . $qtd_cobertura;
echo "<br> Pessoas:" . $qtd_pessoas;

$valorchoops = ($qtd_choops*$vl_choops);
$valorpizza= ($qtd_pizza*$vl_pizza);
$valorcobertura= ($qtd_cobertura*$vl_cobertura);
$conta = ($valorchoops + $valorpizza + $valorcobertura);
	print "<br> Conta = ".$conta;

$total = ($conta*0.10) + $conta;
print "<br> 10% a pagar do Garcom = ".$total;

$dividindoconta = $total/$qtd_pessoas;
print "<br> Total a ser pago por cada pessoa =".$dividindoconta;
}
?>
