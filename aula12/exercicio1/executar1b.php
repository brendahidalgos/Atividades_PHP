<?php
$numeros = range (1,51);
$num = array_rand ($numeros, 50);
arsort ($num, SORT_NUMERIC);

foreach ($num as $num)
echo $num." - ";
?>