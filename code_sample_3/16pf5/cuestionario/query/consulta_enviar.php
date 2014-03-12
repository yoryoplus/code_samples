<?php
include_once("../../../include/connection.php");
$table = "16pf5";

for ($i=1; $i<=185; $i++){		
   		$item[$i] = $_POST["item$i"];				
	}
	
/**/ include("trans_pd.php");     /**/
/**/ include("factor_aq_in.php"); /**/
/**/ include("decatipos.php");    /**/
	
$dni = $_SESSION["dni"];  

$qtipo = mysql_query("SELECT tipo FROM usuario_seleccion WHERE dni='$dni'"); //tipo de alumno
$rtipo = mysql_fetch_array($qtipo);

$regs = mysql_query("SELECT * FROM usuario_seleccion WHERE dni='$dni'");
$row_regs= mysql_fetch_array($regs);

//--------------CONSULTA--------------------------------------------------

$sql = "INSERT INTO $table
(aps,dni,edad,genero,estudios,A,B,C,E,F,G,H,I,L,M,N,O,Q1,Q2,Q3,Q4,MI,fIN,AQ,dA,dB,dC,dE,dF,dG,dH,dI,dL,dM,dN,dO,dQ1,dQ2,dQ3,dQ4,dMI,dIN,dAQ,creat,electo,efectivo,tecnico";
for ($i=1; $i<=185; $i++){
	$sql.= ",r".$i;
}
$sql .= ")";


$sql .= "VALUES('$row_regs[aps]','$row_regs[dni]','$row_regs[edad]','$row_regs[genero]','$row_regs[estudios]','$A','$B','$C','$E','$F','$G','$H','$I','$L','$M','$N','$O','$Q1','$Q2','$Q3','$Q4','$MI','$fIN','$AQ','$dA','$dB','$dC','$dE','$dF','$dG','$dH','$dI','$dL','$dM','$dN','$dO','$dQ1','$dQ2','$dQ3','$dQ4','$dMI','$dIN','$dAQ','$creat','$electo','$efectivo','$tecnico'";
for ($i=1; $i<=185; $i++){
	$sql .= ",'$nitem[$i]'";
}
$sql .= ")";

//------------------------------------------------------------------------

if (isset($item[1])){ //Tiene q contestar como mínimo a la primera para no enviar vacío.
	mysql_query($sql);		
	mysql_close();
	if($rtipo[0]=="alumno externo"){
		echo '<script>document.location = "fin.php"</script>';
		}
	else 
		echo '<script>document.location = "../hoja_correccion.php"</script>';
}

?>



