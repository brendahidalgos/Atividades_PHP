<?php
$nota = $_POST ['nota'];

if (($nota < 3) && ($nota >= 0)){
	echo "conceito D";
}
if (($nota >= 3) && ($nota < 5)){
	echo "conceito C";
}
if (($nota >= 5) && ($nota < 8)){
	echo "conceito B";
}
if (($nota >= 8) && ($nota <= 10)){
	echo "conceito A";
}
?>