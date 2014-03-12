<?php session_start();?>
<!DOCTYPE html>
    <html>
    <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    <script src="valida_form.js" type="text/javascript" charset="utf-8"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) ---------------------------->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) ---------------------------->    
</head>
<? include("preguntas.php");?>
<? include("valores.php");?>
<style>
.radiosb{
	margin-left:65px;
	}
</style>

<body style="padding:50px; width:1100px; margin:25px auto; border:1px solid #666">


<p>GRACIAS POR RELLENAR EL CUESTIONARIO. TUS CONTESTACIONES HAN SIDO ENVIADAS. </p>
</body>
</html>