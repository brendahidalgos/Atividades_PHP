<?php

$nums = array(10,20,30,40,50);
$dobro = array();

$cont=0;

while($cont <= 4)
{
	$dobro[$cont] = $nums[$cont]*2;
	$cont++;
}

var_dump($nums);
var_dump($dobro);

?>