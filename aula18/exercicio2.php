<html>
<head>
<meta charset="utf-8"/>
<title> Exercicios 2</title>
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
<p>Valor I: <input type="text" name="vi"/></p><br>
<p>Valor A: <input type="numer" name="va"/></p><br>
<p>Valor B: <input type="number" name="vb"/></p><br>
<p>Valor C: <input type="number" name="vc"/></p><br>
<p><input type="submit" value="Enviar"/>
</form></body></html>
<?php
if(isset($_POST['vi']) && ($_POST['va'])){
$vi = $_POST ['vi'];
$va = $_POST ['va'];
$vb = $_POST ['vb'];
$vc = $_POST ['vc'];
$maior = 0;
$menor = 0;
$meio = 0;

	if ($vi == 1){
		if(( $va >= $vb)&&($va >= $vc)){
		$maior = $va;

		if($vb <= $vc){
		$menor = $vb;
		$meio = $vc;
		}
		else {
		$menor = $vc;
		$meio= $vb;
		}
		}
		if(($vc>=$va)&&($vc>=$vb)){
		$maior = $vc;
			if($vb<=$va){
			$menor = $vb;
			$meio = $va;
			}
			else{
			$menor = $va;
			$meio = $vb;
			}
	}
	echo $menor." ".$meio." ".$maior."<br>";
}	
	if ($vi == 2){
	if(( $va>= $vb)&&($va >= $vc)){
		$maior = $va;
		if($vb <= $vc){
			$menor = $vb;
			$meio = $vc;
		}
		else {
			$menor = $vc;
			$meio= $vb;
		}
		}
	if(($vc>=$va)&&($vc>=$vb)){
		$maior = $vc;
		if($vb<=$va){
			$menor = $vb;
			$meio = $va;
		}
		else{
			$menor = $va;
			$meio = $vb;
		}
	}
	echo $maior." ".$meio." ".$menor;
	}
	if(($vi <> 1) && ($vi <> 2)){
		print "Valor não identificado na Valor I (1 ou 2)";
	
}
	}
?>