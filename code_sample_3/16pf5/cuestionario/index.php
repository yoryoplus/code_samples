<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>16pf5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    <link href="../../estilos.css" rel="stylesheet" type="text/css" />
    
    <script src="valida_form.js" type="text/javascript" charset="utf-8"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) ---------------------------->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) ---------------------------->    
</head>

<? include("include/preguntas.php");?>
<? include("include/valores.php");?>

<body>
<h1 align="center">16pf5</h1>

<div id="instrucciones">

    <p><strong>INSTRUCCIONES </strong></p>
    <p>A continuaci&oacute;n encontrar&aacute; una serie de frases que permitir&aacute;n conocer sus actitudes  e intereses, En general, no existen contestaciones correctas o incorrectas, porque las personas tienen distintos intereses y ven las cosas desde distintos puntos  de vista. Conteste con sinceridad:  de esta forma se podr&aacute; conocer mejor su forma de ser. <br>
      Cada frase contiene tres posibles respuestas (A B Y C) y normalmente la alternativa B  viene con un interrogante, para ser se&ntilde;alada cuando no es posible decidirse entre la A y la C. Tras cada  pregunta encontrar&aacute; estas letras para dar sus respuestas, Anote  sus contestaciones tras cada una de las preguntas marcando  el punto correspondiente a la opci&oacute;n elegida. <br>
      Las frases est&aacute;n ordenadas  num&eacute;ricamente: siga  esta numeraci&oacute;n al contestar, Lea atentamente  cada frase y las posibles respuestas: as&iacute; le ser&aacute; m&aacute;s  f&aacute;cil decidirse.&nbsp;</p>
    <p>  Ahora lea los ejemplos que vienen aqu&iacute; debajo para hacer un poco de  pr&aacute;ctica, y piense c&oacute;mo los contestar&iacute;a. </p>
    <table class="table table-bordered table-hover" style="background-color:#DFDFDF" width="51%" border="1" cellpadding="0" cellspacing="0">
      <tr>
        <td width="480" valign="top"><strong><span class="label label-danger">1</span> </strong> Me gusta presenciar una competici&oacute;n deportiva,
          <p><strong>A</strong><strong>. </strong>Verdadero &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>B</strong><strong>.&nbsp; </strong><strong>? &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>C. </strong>Falso </p></td>
      </tr>
      <tr>
        <td width="480" height="78" valign="top"><p><strong><span class="label label-danger">2</span></strong></strong> Prefiero las personas: </p>
          <p><strong>A</strong>. reservadas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>B</strong><strong>.&nbsp; </strong><strong>?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>C.</strong><strong> </strong>que hacen amigos f&aacute;cilmente, </p></td>
      </tr>
      <tr>
        <td width="480" height="75" valign="top"><p><strong><span class="label label-danger">3</span></strong>
            El dinero no hace    la felicidad: </p>
          <p><strong>A</strong><strong>. </strong>Verdadero &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>B</strong><strong>.&nbsp; </strong><strong>? &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>C. </strong>Falso </p></td>
      </tr>
    </table>
</div>

<p>&nbsp;Al contestar tenga en  cuenta lo siguiente: </p>
<ul>
    <li><em><u>No piense  demasiado el contenido de las frases,</u></em> ni emplee mucho tiempo en decidirse, <br>
    Las frases son muy cortas para darle todos los detalles que Vd, quisiera: por ejemplo, se ha puesto 'presenciar una competici&oacute;n deportiva', y tal vez a Vd, le guste m&aacute;s el f&uacute;tbol que el baloncesto: debe contestar pensando en lo que es habitual para Vd, Generalmente se contestan cinco o seis por minuto, y se tarda poco m&aacute;s de media hora para completar todo el Cuadernillo, </li>
    <li><em><u>Evite se&ntilde;alar  la respuesta B </u></em><em><u>(?),</u></em> excepto  cuando le sea imposible decidirse por las  otras <br>
    dos:  lo corriente es que esto  le ocurra  s&oacute;lo en muy pocas frases, </li>
    <li><em><u>Procure no  dejar ninguna cuesti&oacute;n sin contestar,</u></em> Es posible que alguna no tenga nada <br>
    que ver con Vd, (porque no se aplica perfectamente a su caso): intente elegir la <br>
    respuesta que vaya mejor con su modo de ser, Tal vez algunas frases le parezcan muy <br>
    personales: no se preocupe y recuerde que las Hojas de respuestas se guardan como <br>
    documentos  confidenciales y no pueden ser valoradas sin una plantilla especial: por <br>
    otra parte, al obtener los resultados no se consideran las respuestas una a una, sino <br>
    globalmente.</li>
    <li><em><u>Conteste  sinceramente,</u></em> No se&ntilde;ale sus respuestas pensado en lo que  'es bueno' o lo <br>
    que 'interesa' para impresionar al examinador. Adem&aacute;s, el Cuadernillo se desarroll&oacute; <br>
    para ser sensible a respuestas contradictorias, </li>
</ul>
<h3 align="center"><br></h3>

<form role="form" name="form1" method="post" action="" class="form-inline">
  <div class="list-group">
  
  <?php for ($i=1; $i<=170; $i++){ //FOR -----------------------------------------------------?>
  
  <a href="#p<? echo $i?>" style="cursor:default;"class="list-group-item" id="p<? echo $i?>">
    
  <span class="label label-danger"><? echo $i?></span>
    
  <?php echo $p[$i] //* Texto de la pregunta *// ?> 
    
      <div class="form-inline">
      <div class="radio"> 
        <label>
          <input type="radio" name="item<? echo $i?>" id="r1" value="1">
          A) <? echo $v[$i][1] ?>    
        </label>
      </div><br>
      <div class="radio">
        <label >
          <input type="radio" name="item<? echo $i?>" id="r2" value="2">    
          B) <? echo $v[$i][2] ?>
        </label>
      </div><br>
      <div class="radio">
        <label >
          <input type="radio" name="item<? echo $i?>" id="r3" value="3">    
          C) <? echo $v[$i][3] ?>
        </label>
      </div>
  </div>
  </a>
  <br>
<? } //FIN BUBLE FOR ------------------------------------------------------------------?>

<p>
Las cuestiones que vienen a continuación se diseñaron como 
ejercicios de resolución de problemas. En ellas hay una y sólo una 
respuesta correcta. Si no está seguro de cuál es la correcta, elija la 
que crea mejor. Vea un ejemplo aquí debajo: 
</p>
<p><strong>Ejemplo: </strong><br>
‘Toro’ es a ‘ternero’ como ‘caballo’ es a: </p>
<ol type="A">
  <li>potro. </li>
  <li>ternera. </li>
  <li>yegua. </li>
</ol>
<p><em>La  contestación correcta es ‘</em><em>potro ‘</em><em>: </em><em>es </em><em>la cría d</em><em>el c</em><em>a</em><em>ballo como <br>
</em><em>t</em><em>e</em><em>rn</em><em>e</em><em>ro </em><em>es </em><em>l</em><em>a c</em><em>ría </em><em>de</em><em>l to</em><em>r</em><em>o. </em></p>

  <?php for ($i=171; $i<=185; $i++){ //FOR -----------------------------------------------------?>
  
  <a href="#p<? echo $i?>" style="cursor:default;"class="list-group-item" id="p<? echo $i?>">
    
  <span class="label label-danger"><? echo $i?></span>
    
  <? echo $p[$i] //* Texto de la pregunta *// ?> 
    
      <div class="form-inline">
      <div class="radio"> 
        <label>
          <input type="radio" name="item<? echo $i?>" id="r1" value="1"  >
          A) <? echo $v[$i][1] ?>    
        </label>
      </div><br>
      <div class="radio">
        <label >
          <input type="radio" name="item<? echo $i?>" id="r2" value="2"  >    
          B) <? echo $v[$i][2] ?>
        </label>
      </div><br>
      <div class="radio">
        <label >
          <input type="radio" name="item<? echo $i?>" id="r3" value="3">    
          C) <? echo $v[$i][3] ?>
        </label>
      </div>
  </div>
  </a>
  <br>
<? } //FIN BUBLE FOR ------------------------------------------------------------------?>
<BR>
<button type="button" class="btn btn-success btn-lg btn-block" onClick="javascript:Validar();">
	<H3>ENVIAR CUESTIONARIO</H3>
</button>

</form>

<? include("query/consulta_enviar.php"); ?>
</body>
</html>