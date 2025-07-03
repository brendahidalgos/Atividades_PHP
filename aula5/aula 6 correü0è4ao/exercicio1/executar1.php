<meta charset="utf-8">
<?php
$x = $_GET ['x'];
$y = $_GET ['y'];

print "O valor de x é $x";
print "<br>O valor de y é $y<br>";

$z = $x; /*X recebe conteudo de X*/
$x = $y; /*X recebe o valor de Y*/
$y = $z; /*Y recebe o conteudo de Z (antigo x)*/

print "<br>Invertendo:";
print "<br>O valor de x é $x";
print "<br>O valor de y é $y";

?>