<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Acceso</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    <link href="css/estilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <p>Si eres un NUEVO USUARIO, reg&iacute;stratre <a href="codigo.php" target="_blank">aqu&iacute;</a></p>
    <form name="form1" method="post" action="">
          <p>Si ya est&aacute;s registrado introduce tu DNI:</p>
          <p>DNI 
            <label>
              <input type="text" name="dni" id="dni">
            </label>
          </p>
          <p>
            <input type="submit" name="Comenzar" id="Comenzar" value="Comenzar">
          </p>
    </form>
    
    <?php include("include/dni_verification.php");?>
</body>
</html>