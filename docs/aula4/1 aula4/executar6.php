<?php
$n =$_POST ['n'];
if ($n == 0)
{
	echo "NULO";
}
elseif ($n < 0)
{
	echo "NEGATIVO";
}
else 
{
	echo "POSITIVO";
}

?>