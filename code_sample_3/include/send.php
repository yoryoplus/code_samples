<?php
include_once("connection.php");

foreach ($_POST as  $key => $value ){ 
	$form[$key] = $value;
}

$codigo = $_SESSION["codigo"];

$tipo = mysql_query("SELECT test FROM codigos WHERE codigo='$codigo'");
$rtipo = mysql_fetch_array($tipo);

if ($rtipo[0]=="selec-ext")
	$tipo="alumno externo";
if ($rtipo[0]=="selec-uam")
	$tipo="alumno uam";


if (isset($form[aps])){ 
	mysql_query("INSERT INTO usuario_seleccion (aps,dni,edad,genero,estudios,profesion,tipo) 
									 VALUES ('$form[aps]','$form[dni]','$form[edad]','$form[genero]','$form[estudios]','$form[profesion]','$tipo')");
	echo '<script>document.location = "acceso.php"</script>';
	exit();	
}
?>