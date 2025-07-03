<?php
$valor = $_POST ['valor'];
$x = 0;
$numero = array();

$numero[0] = 22;
$numero[1] = 15;
$numero[2] = 12;
$numero[3] = 16;
$numero[4] = 55;
$numero[5] = 66;
$numero[6] = 78;
$numero[7] = 93;
$numero[8] = 74;
$numero[9] = 22;
$numero[10] =36;

if($valor == $numero){
print ("Numero: " .$numero);
}
else{
print ("Número não Identificado");
}
?>