<?php
if (!empty($_REQUEST["valor"])) {
	$n = $_REQUEST['valor'];
	for($i=1; $i<=10; $i++) {
		$r = $n * $i;
		echo $n."x".$i."=".$r."<br>";
	}
}
?>