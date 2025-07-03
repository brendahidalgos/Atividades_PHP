<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>
<body bgcolor="#A9A9A9">
<center>
<!--menu-->
<nav id="menu"><!-- nav funciona como menu de navegação-->
<ul type="disc">
<li><a href="index.html"> Inicio</a></li>
</ul>
</nav><br>
<br><table height="50%" width="50%" cellspacing="5px" cellpadding="10" bgcolor="white" >
<td colspan="5"><img src="nome.jpg" width="1200" height="400"></td>
	 <tr>
	<td colspan="4"><center>
	<?php

$escolha = $_POST['escolha'];

switch ($escolha) {
	case 'cadastrar':
		?>
		<html>
		<h2>Cadastrar Fornecedor</h2>
		</html>
		<?php
		break;
	case 'deletar':
		?>
		<html>
		<h2>Deletar Fornecedor</h2>
		</html>
		<?php
		break;
	case 'consultar':
		?>
		<html>
		<h2>Consultar Fornecedor</h2>
		</html>
		<?php
		break;

	default:
		print "Opção invalida";
		break;
}
?>
	</td>
	<tr>
	</table>

</center></body>
</html>