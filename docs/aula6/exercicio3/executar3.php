<meta charset="utf-8"/>
<?php
$n1 =$_POST ['n1'];
$n2 =$_POST ['n2'];
$soma = $n1+$n2;
$media = (($n1 + $n2)/2);
	if (($n1 >=0)&&($n2>=0))
{
	print "O Primeiro Número é ".$n1;
	print "<br>O Segundo Número é ".$n2;

	if ($media >= 6){
	print "<br> A média é: ".$media;
	print"<br>Aprovado!";}

	if (($n1>=0) && ($n2 >=0)){
	print "<br>A soma é: ".$soma;}

	if ($media < 6){
	print "<br>A média é: ".$media;
	print"<br>Reprovado!";}
}
else {
	print "<br>***Número Invalido***";
}
?>