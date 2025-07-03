<html>
<head>
<meta charset="utf-8"/>
<title> Exercicios 4</title>
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
<form action="" method="POST">
<p>valor 1 <input type="text" name="primeiro"/></p>
<p>valor 2 <input type="text" name="segundo"/></p>
<p>valor 3 <input type="text" name="terceiro"/></p>
<p>valor 4 <input type="text" name="quarto"/></p>
<p>valor 5 <input type="text" name="quinto"/></p>
<p>valor 6 <input type="text" name="sexto"/></p>
<p>valor 7 <input type="text" name="setimo"/></p>
<p>valor 8 <input type="text" name="oitavo"/></p>
<p>valor 9 <input type="text" name="nono"/></p>
<p>valor 10 <input type="text" name="decimo"/></p>
<p><input type="submit" value="ENVIAR"/></p>
</form></body></html>

<?php
if(isset($_POST['primeiro'])&& ($_POST['segundo'])){

$primeiro = $_POST['primeiro'];
$segundo = $_POST['segundo'];
$terceiro = $_POST['terceiro'];
$quarto = $_POST['quarto'];
$quinto = $_POST['quinto'];
$sexto = $_POST['sexto'];
$setimo = $_POST['setimo'];
$oitavo = $_POST['oitavo'];
$nono = $_POST['nono'];
$decimo = $_POST['decimo'];

$vetor = array();
$vetor[0] = $primeiro;
$vetor[1] = $segundo;
$vetor[2] = $terceiro;
$vetor[3] = $quarto;
$vetor[4] = $quinto;
$vetor[5] = $sexto;
$vetor[6] = $setimo;
$vetor[7] = $oitavo;
$vetor[8] = $nono;
$vetor[9] = $decimo;


if ($primeiro) {
	print("<br>Valor 1 é " . $vetor[0]);
}
if ($segundo) {
	print("<br>Valor 2 é " . $vetor[1]);
}
if ($terceiro) {
	print("<br>Valor 3 é " . $vetor[2]);
}
if ($quarto) {
	print("<br>Valor 4 é " . $vetor[3]);
}
if ($quinto) {
	print("<br>Valor 5 é " . $vetor[4]);
}
if ($sexto) {
	print("<br>Valor 6 é " . $vetor[5]);
}
if ($setimo) {
	print("<br>Valor 7 é " . $vetor[6]);
}
if ($oitavo) {
	print("<br>Valor 8 é " . $vetor[7]);
}
if ($nono) {
	print("<br>Valor 9 é " . $vetor[8]);
}
if ($decimo) {
	print("<br>Valor 10 é " . $vetor[9]);
}

print "<br><br>O menor número é ";

$menor = print min(array($primeiro, $segundo, $terceiro, $quarto, $quinto, $sexto, $setimo, $oitavo, $nono, $decimo));

	if ($primeiro == $menor) {
	print("<br>e sua posição é 1 ");
	}
	if ($segundo == $menor) {
	print("<br>e sua posição é 2 ");
	}
	if ($terceiro == $menor) {
	print("<br>e sua posição é 3 ");
	}
	if ($quarto == $menor) {
	print("<br>e sua posição é 4 ");
	}
	if ($quinto == $menor) {
	print("<br>e sua posição é 5 ");
	}
	if ($sexto == $menor) {
	print("<br>e sua posição é 6 ");
	}
	if ($setimo == $menor) {
	print("<br>e sua posição é 7 ");
	}
	if ($oitavo == $menor) {
	print("<br>e sua posição é 8 ");
	}
	if ($nono == $menor) {
	print("<br>e sua posição é 9 ");
	}
	if ($decimo == $menor) {
	print("<br>e sua posição é 10 ");

}
}
?> 