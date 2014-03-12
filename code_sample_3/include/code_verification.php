<?php
include_once("connection.php");

mysql_connect("localhost","root","12345");
mysql_select_db("testt");
mysql_query("SET NAMES utf8");

$codigo = $_POST["codigo"];
$_SESSION["codigo"]=$codigo;

$cod_uam = mysql_query("SELECT codigo FROM codigos WHERE test='selec-ext'");
$cod_ext = mysql_query("SELECT codigo FROM codigos WHERE test='selec-uam'");
$rcod_uam = mysql_fetch_array($cod_uam);
$rcod_ext = mysql_fetch_array($cod_ext);


if (isset($codigo)){
	if ($codigo == $rcod_uam[0] || $codigo == $rcod_ext[0]) //Tiene que ser un código concreto de la base de datos. 
	{ 
		echo '<script>document.location = "formulario.php"</script>';
		exit();
		}
	else echo "CODIGO INCORRECTO!";
}
	
?>