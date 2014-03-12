<?php

include_once("../include/connection.php");

$dni = $_SESSION["dni"];  

$regs = mysql_query("SELECT * FROM 16pf5 WHERE dni='$dni'");
$rregs= mysql_fetch_array($regs);

?>