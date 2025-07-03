<?php
$numero = array (0,1,2,3,4,5,6,7,8,9,10);
for( $x = 0; $x <= 10; $x++)
{
	if($x %2 == 0){
	print $numero[$x].",";
}
}
for ($x = 10; $x >= 0; $x--)
{
	if($x %2 != 0){
	print $numero[$x].",";
}
}
?>