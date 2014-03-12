<?php
include_once("connection.php");

$dni=$_POST["dni"];
$_SESSION["dni"]=$dni;

$qdni = mysql_query("SELECT dni FROM usuario_seleccion WHERE dni='$dni'");
$rows_dni = mysql_num_rows($qdni); 

if (isset($dni)){
	if ($rows_dni > 0){
		echo '<script>document.location = "cuestionarios.php"</script>';
		exit();	
		}
	else echo "DNI incorrecto, fíjate si todos los dígitos son correctos";
}
	
?>