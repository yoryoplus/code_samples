<!DOCTYPE html>
<html id="home" lang="es" dir="ltr">
<head>
	<meta charset=utf-8 />
	<title>Ciencias Sociales. Geografía.</title>
    <meta name="description" content="Web de Ciencias Sociales: Geografía (3º de E.S.O.).">
    <meta name="Keywords" content="educación, geografía, tercero, secundaria">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/form.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/print.css" type="text/css" media="print" />
    <script src="scripts/form.js"></script>
    <script src="scripts/jquery.min.js"></script>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<?php include ("includes/encab_index.php");?>
	<div id="content">
		  <article class="stream">
					<header>
						<h2>Registro de usuario</h2>
					</header>
					<section class="texto">
                        <h3>Formulario de registro de usuario</h3>
                        <form id="loginform" name="loginform"  autocomplete="off" enctype="multipart/form-data" method="post" action="">
                        <ul>
                        	<li>
								<label id="dato1" for="usuario">Usuario</label>
								<input id="dato1" name="usuario" type="text" value="" size="20" tabindex="1" required />
                            </li>
							<li>
								<label id="dato2" for="passw">Contraseña</label>
								<input id="dato2" name="passw" type="text" value="" size="20" tabindex="1" required />
							</li>
							<li>
								<label id="dato3" for="mail">Email</label>
								<input id="dato3" name="mail" type="text" value="" size="20" tabindex="1" required />
							</li>
							<li>
								<label id="dato4" for="name">Nombre</label>
								<input id="dato4" name="nombre" type="text" value="" size="20" tabindex="1" required />
							</li>                            
							<li>
								<label id="dato5" for="1surname">Primer apellido</label>
								<input id="dato5" name="apellido1" type="text" value="" size="20" tabindex="1" required />
							</li>
							<li>
								<label id="dato6" for="2surname">Segundo apellido</label>
								<input id="dato6" name="apellido2" type="text" value="" size="20" tabindex="1" required />
							</li>                            
							<li>
								<label id="dato7" for="age">Edad</label>
								<input id="dato7" name="edad" type="text" value="" size="20" tabindex="1" required />
							</li>                            
							<li>
                            	<label id="dato8" for="genero">Género</label>
								<select name="genero" id="dato8">
									<option value="M">Masculino</option>
                                    <option value="F">Femenino</option>

								</select>
							</li>                            
							<li>
								<label id="dato9" for="centro">Código centro</label>
								<input id="dato9" name="centro" type="text" value="" size="20" tabindex="1" required />
							</li>                            
							<li>
								<label id="dato10" for="curso">Código curso</label>
								<input id="dato10" name="curso" type="text" value="" size="20" tabindex="1" required />
							</li>
							<li>
                            	<label id="dato11" for="condition">Condición</label>
								<select name="condicion" class="espaciado_left" id="dato11">
									<option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>                                 
                                    <option value="E">E</option>                                 
                                    <option value="F">F</option>                                 
                                    <option value="G">G</option>                                 
                                    <option value="H">H</option>
                                  </select>
                            </li> 
                            <li class="buttons">
								<div>
									<input class="input" id="enviar" name="enviar" type="submit" value="Enviar"/>
                                </div>
							</li>                        
						</ul>
					</form>       
                 </section>
			</article>	
</div>
		<?php include ("includes/aside_reg.php");?>
	<?php include ("includes/footer_index.php");?>
<?
$usuario = $_POST['usuario'];
$passw = $_POST['passw'];
$mail = $_POST['mail'];
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$centro = $_POST['centro'];
$curso = $_POST['curso'];
$condicion = $_POST['condicion'];

mysql_connect("localhost","root","12345");
mysql_select_db("cc_sociales");
mysql_query("SET NAMES utf8");

mysql_query("INSERT INTO nuevo_us (usuario,contr,email,nombre,apellido_1,apellido_2,edad,genero,cod_centro,cod_curso,condicion) VALUES ('$usuario','$passw','$mail','$nombre','$apellido1','$apellido2','$edad','$genero','$centro','$curso','$condicion')");
?>
</body>
</html>
