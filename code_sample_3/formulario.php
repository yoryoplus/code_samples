<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Hoja corrección</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    <link href="css/estilos.css" rel="stylesheet" type="text/css" />
    <script src="valida_form.js" type="text/javascript" charset="utf-8"></script>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="324" border="0" align="center" cellpadding="6" cellspacing="2" style="color:#FFF" bgcolor="#800000">
    <tr align="center" bordercolor="#000000" bgcolor="#9A4B16" style="border:thin; color:#CCC text-align:center">
      <td height="53" colspan="2"><strong>Registro nuevo usuario</strong></td>
    </tr>
    <tr >
      <td width="142" align="right">Apellidos y nombre</td>
      <td width="152" nowrap="nowrap"><input type="text" name="aps" id="nick5" /></td>
    </tr>
    <tr >
      <td align="right">DNI</td>
      <td nowrap="nowrap"><input type="text" name="dni" id="nick6" /></td>
    </tr>
    <tr >
      <td align="right">Edad</td>
      <td nowrap="nowrap"><input type="text" name="edad" id="nick3" /></td>
    </tr>
    <tr >
      <td align="right">G&eacute;nero</td>
      <td nowrap="nowrap"><input type="text" name="genero" id="nick" /></td>
    </tr>
    <tr>
      <td align="right">Estudios</td>
      <td nowrap="nowrap">
      <select name="estudios">
        <option value="Primaria">Primaria</option>
        <option value="Secundaria">Secundaria</option>
        <option value="Bachillerato">Bachillerato</option>
        <option value="Form. Profesional">Form. Profesional</option>
        <option value="Licenciatura/grado">Licenciatura/grado</option>
        <option value="Selecciona" selected>Selecciona...</option>
      </select>
      </td>
    </tr>
    <tr>
      <td align="right">Profesi&oacute;n</td>
      <td nowrap="nowrap"><input type="text" name="profesion" id="nick7" /></td>
    </tr>
    <tr align="center">
      <td height="51" colspan="2" align="center">
        <input style="background-color:#C8CCDF" type="button" name="Enviar datos" id="Enviar datos" value="ENVIAR DATOS" onClick="valida_form()"/>       

        </p></td>
    </tr>
  </table>
</form>

       
<?php include("send.php");?>
</body>
</html>