<?php
$altura = $_POST['altura'];
$sexo = $_POST['sexo'];
$pesom = ($altura*72.7)-58;
$pesof = ($altura*62.1)-44.7;

if ($sexo = "masculino"){
	print $pesom;
}
else {
	print $pesof;
}
?>