<?php
$n = $_POST ['n'];
$s = $_POST ['s'];

if (($n <> "admin") && ($s <> "admin1234")) {
	echo "Login ou Senha Incorreto";
}
else {
	echo "Conectado com Sucesso";
}
?>