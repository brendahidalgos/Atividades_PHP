<?php
$n1 = $_POST ['n1'];
$n2 = $_POST ['n2'];
$n3 = $_POST ['n3'];

if (($n1 < $n2) && ($n1 < $n3)) {
print "<br>Primeiro e Menor numero e: ".$n1 ;
}
if (($n2 < $n1) && ($n2 < $n3)) {
print "<br>Primeiro e Menor numero e: ".$n2;
}
if (($n3 < $n1) && ($n3 < $n2)) {
print "<br>Primeiro e Menor numero e: ".$n3;
}

if(($n2 > $n1) && ($n1 < $n3)) {
print "<br>Segundo e: ".$n2;
} 


If (($n1> $n2) && ($n1 > $n3)) {
print "<br>Terceiro e Maior numero e: ".$n1;
}
If (($n2> $n1) && ($n2 > $n3)) {
print "<br>Terceiro e Maior numero e: ".$n2;
}
If (($n3> $n1) && ($n3 > $n2)) {
print "<br>Terceiro e Maior numero e: ".$n3;
}

if ($n1 == $n2) {
echo "<br>Sem definicao do (> ou <) ou (1, 2 ou 3) numero (Primeiro numero igual ao Segundo) Nao e Valido";
}
if ($n1 == $n3) {
echo "<br>Sem definicao do (> ou <) ou (1, 2 ou 3) numero (Primeiro numero igual ao Terceiro) Nao e Valido";
}
if ($n2 == $n3) {
echo "<br>Sem definicao do (> ou <) ou (1, 2 ou 3) numero (Segundo numero igual ao Terceiro) Nao e Valido";
}
if ($n3 == $n1) {
echo "<br>Sem definicao do (> ou <) ou (1, 2 ou 3) numero (Terceiro numero igual ao Primeiro) Nao e Valido";
}


?>