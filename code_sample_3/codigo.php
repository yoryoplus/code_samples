<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Codigo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    <link href="estilos.css" rel="stylesheet" type="text/css" />

</head>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="324" border="0" align="center" cellpadding="6" cellspacing="2" style="color:#FFF" bgcolor="#800000">
    <tr align="center" bordercolor="#000000" bgcolor="#9A4B16" style="border:thin; color:#CCC text-align:center">
      <td height="53"><strong>Introduce el c&oacute;digo que te han proporcionado</strong></td>
    </tr>
    <tr>
      <td align="center">C&oacute;digo
      <input type="text" name="codigo" id="codigo" />      </td>
    </tr>
    <tr align="center">
      <td height="51" align="center">
        <input style="background-color:#C8CCDF" type="submit" name="Enviar" id="Enviar" value="Validar código"/>
        
       
<?php include("include/code_verification.php");?>
        </p></td>
    </tr>
  </table>
</form>
</body>
</html>