<meta charset="utf-8">
<center>
<?php
/*******************************************/
$escolha = $_POST ['escolha'];
	switch ($escolha) {
	case 'cliente':
		?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>
<body bgcolor="#A9A9A9">
<center>
<!--menu-->
<nav id="menu"> <!-- nav funciona como menu de navegação-->
<h1>Menu Principal</h1>
<ul type="disc">
<li><a href="index.html"> Home </a></li>
<li><a href="sobre.html"> Sobre </a></li>
</ul>
</nav><br>
<br><table height="50%" width="50%" cellspacing="5px" cellpadding="10" bgcolor="white" >
<td colspan="5"><img src="nome.jpg" width="1200" height="400"></td>
	 <tr>
	 <td colspan="4">
		<!--formulario php-->
	<form method="POST" action="formcliente.php"><center>
	<fieldset  style="width:150px;height:100px;border:1px solid #d5d5d5;">
<p><input type="radio" name="escolha" value="cadastrar"> Cadastrar</p>
<p><input type="radio" name="escolha" value="deletar"> Deletar</p>
<p><input type="radio" name="escolha" value="consultar"> Consultar</p>
<p><input type="submit" value="OK"></p>
</form></fieldset>
	</form>
	</td>
	<tr>
	</table></body>
</html>

<?php
/*******************************************/
	break;
	case 'funcionario':
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>
<body bgcolor="#A9A9A9">
<center>
<!--menu-->
<nav id="menu"> <!-- nav funciona como menu de navegação-->
<h1>Menu Principal</h1>
<ul type="disc">
<li><a href="index.html"> Home </a></li>
<li><a href="sobre.html"> Sobre </a></li>
</ul>
</nav><br>
<br><table height="50%" width="50%" cellspacing="5px" cellpadding="10" bgcolor="white" >
<td colspan="5"><img src="nome.jpg" width="1200" height="400"></td>
	 <tr>
	 <td colspan="4">
		<!--formulario php-->
	<form method="POST" action="formfuncionario.php"><center>
	<fieldset  style="width:150px;height:100px;border:1px solid #d5d5d5;">
<p><input type="radio" name="escolha" value="cadastrar"> Cadastrar</p>
<p><input type="radio" name="escolha" value="deletar"> Deletar</p>
<p><input type="radio" name="escolha" value="consultar"> Consultar</p>
<p><input type="submit" value="OK"></p>
</form></fieldset>
	</form>
	</td>
	<tr>
	</table></body>
</html>
<?php
/********************************************/
	break;	
	case 'fornecedor':
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>
<body bgcolor="#A9A9A9">
<center>
<!--menu-->
<nav id="menu"> <!-- nav funciona como menu de navegação-->
<h1>Menu Principal</h1>
<ul type="disc">
<li><a href="index.html"> Home </a></li>
<li><a href="sobre.html"> Sobre </a></li>
</ul>
</nav><br>
<br><table height="50%" width="50%" cellspacing="5px" cellpadding="10" bgcolor="white" >
<td colspan="5"><img src="nome.jpg" width="1200" height="400"></td>
	 <tr>
	 <td colspan="4">
		<!--formulario php-->
	<form method="POST" action="formfornecedor.php"><center>
	<fieldset  style="width:150px;height:100px;border:1px solid #d5d5d5;">
<p><input type="radio" name="escolha" value="cadastrar"> Cadastrar</p>
<p><input type="radio" name="escolha" value="deletar"> Deletar</p>
<p><input type="radio" name="escolha" value="consultar"> Consultar</p>
<p><input type="submit" value="OK"></p>
</form></fieldset>
	</form>
	</td>
	<tr>
	</table></body>
</html>
	</body>
</html>
<?php
/*********************************************/
	break;
	case 'produto':
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>
<body bgcolor="#A9A9A9">
<center>
<!--menu-->
<nav id="menu"> <!-- nav funciona como menu de navegação-->
<h1>Menu Principal</h1>
<ul type="disc">
<li><a href="index.html"> Home </a></li>
<li><a href="sobre.html"> Sobre </a></li>
</ul>
</nav><br>
<br><table height="50%" width="50%" cellspacing="5px" cellpadding="10" bgcolor="white" >
<td colspan="5"><img src="nome.jpg" width="1200" height="400"></td>
	 <tr>
	 <td colspan="4">
		<!--formulario php-->
	<form method="POST" action="formproduto.php"><center>
	<fieldset  style="width:150px;height:100px;border:1px solid #d5d5d5;">
<p><input type="radio" name="escolha" value="cadastrar"> Cadastrar</p>
<p><input type="radio" name="escolha" value="deletar"> Deletar</p>
<p><input type="radio" name="escolha" value="consultar"> Consultar</p>
<p><input type="submit" value="OK" ></p>
</form></fieldset>
	</td>
	<tr>
	</table></body>
</html>

<?php
/*********************************************/
	break;
	case 'usuario':
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="estilo.css"/>
</head>
<body bgcolor="#A9A9A9">
<center>
<!--menu-->
<nav id="menu"> <!-- nav funciona como menu de navegação-->
<h1>Menu Principal</h1>
<ul type="disc">
<li><a href="index.html"> Home </a></li>
<li><a href="sobre.html"> Sobre </a></li>
</ul>
</nav><br>
<br><table height="50%" width="50%" cellspacing="5px" cellpadding="10" bgcolor="white" >
<td colspan="5"><img src="nome.jpg" width="1200" height="400"></td>
	 <tr>
	 <td colspan="4">
		<!--formulario php-->
	<form method="POST" action="formusuario.php"><center>
	<fieldset  style="width:150px;height:100px;border:1px solid #d5d5d5;">
<p><input type="radio" name="escolha" value="cadastrar"> Cadastrar</p>
<p><input type="radio" name="escolha" value="deletar"> Deletar</p>
<p><input type="radio" name="escolha" value="consultar"> Consultar</p>
<p><input type="submit" value="OK" ></p>
</form></fieldset>
	</td>
	<tr>
	</table></body>
</html>
<?php
/*********************************************/
	break;
	default:
		# code...
		break;
}
?>