<<<<<<< HEAD
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Wamp Shop</title>
<link rel="stylesheet" type="text/css" href="view/css/Consola_index.css"/>
<link rel="stylesheet" type="text/css" href="css/Consola_adap.css"/>
	<link rel="shortcut icon" type="image/ png" href="img/zapato.png">
<!--COD//solocar un slaider en pagina princiapal ::COD//insertar icono de pagina principal::COD//cambiar diseño de la barra de busqueda::COD//Hacer que la barra de busqueda funcione//Correccion de la base de datos-->
<?php
session_start();
	if(isset($_SESSION['Usuario'])){
	header('location: usuario.php');
	}else if(isset($_SESSION['Administrador'])){
		header('location: Administrador.php');
	}
?>

</head>
<body>
<div class="contact"></div>
	<!--DIV QUE CONTIENE TODA LA PAGINA-->

	<div class="Contenedor" >
	
		<div class="cabezera" id="calabaza">
	<?php
	require_once('view/modelo/Header_index.php');
	?>
				<!--botones de logion y registro-->
			<div class="botones"> 
					<input type="button" class="carrito"><input type="button" class="like">
			 </div> 
		
				
		
		<!--MENU PRINCIPAL EN FORMA DE ACORDION-->
	
		<div class="contenedor_menu">
				<div class="despligue_menu"><input type="button" class="boton_Desplig"><p class"menu_des">Menu</p></div>
				<ul class="menu">
					<li><a href="" class="catego"> Categorias </a>
					<ul><li><a href="index.php?Buscar=zapatillas"> Tennis </a></li>
					<li><a href="index.php?Buscar=Chaquetas"> Chaquetas </a></li>
					<li><a href="index.php?Buscar=Sudaderas"> Sudaderas</a></li>
					<li><a href="index.php?Buscar=Accesorios"> Accesorios </a></li>
					 </ul></li>
					<li><a href=""> Marcas </a>
					<ul><li><a href="index.php?Buscar=Adidas"> Adidas </a></li>
					<li><a href="index.php?Buscar=Pumas"> Pumas </a></li>
					<li><a href="index.php?Buscar=Nike"> Nike </a></li>					
					</ul></li>
					<li><a href=""> Promociones </a>
					<ul><li><a href=""> Tendencias</a></li>
					<li><a href=""> Novedades </a></li>
					<li><a href=""> Descuentos </a></li>
					</ul></li>
					<li><a href=""> Acerca de </a></li>
					<li><a href=""> Contacto </a></li>
					<li><a href="" id="ultimo"> Ayuda </a></li>
				</ul>	
			</div>
		</div>
		
			
	<div id="login" >
			<h1 class="cerrar">X</h1>
	<h1 class="titulo">Iniciar Sesion</h1>
	 <!--IMAGEN LOGO-->
	 
	<form action="Logear.php" method="post">
		
		<input type="text" name="User" class="campo campo1" placeholder="Usuario" required><br>
		<input type="Password" name="Password" class="campo campo2" placeholder="Contraseña" ><br>
		<input type="checkbox" name="autorizacion" class="auto" value="ok">Mantener sesion abierta
		<input type="Submit" name="enviar" class="boton" id="validar" value="Iniciar Sesion">
		<center><a href="" class="olvide">¿Olvide  Mi Contraseña?</a></center>
	</form>
	</div>
	
	</div>
	<div id="alert">
		
	</div>
	<div class="alert">
	<p class="xerrar">x</p>
		<h1>Bienvenido a wampshop</h1>
	<p>Si deseas añadir a la lista de deseos o al carrito de compras un producto 
 		te envitamos a iniciar sesion o registrarte</p>
		 	
	<ul>
		
		<li><a href="" id="iniciar">iniciar Sesion</a></li>
		<li><a href="" id="registrar">Registrar</a></li>
		</ul>
	</div>
	
		<div class="Opciones">
<div class="nav">
	<ul>
		<li><a href="#" id="P3"> Paso 3</a></li>
		<li><a href="#" id="P2"> Paso 2</a></li>
		<li><a href="#" class="fin" id="P1"> Paso 1</a></li>
	</ul>
</div>	
</div>     
<div id="content">
			<!-- DATOS BASICOS. PRIMER CONTENEDOR-->
			<div class="paso1" id="Primer">
			<!--CONTENEDOR DE DATOS BASICOS-->
				<div class="titulo2"> 
					<h1>Datos basicos</h1>
					<p class="exit">x</p>
				</div>
					<div class="formp1">
					<form action="Guardar.php" method="post" enctype="multipart/form-data">
				<div class="nombre"><label> Nombre :</label>
				<input class="Campo1" type="text" name="Nombre" id="nombre" placeholder="Nombre" required maxlength="30"a></div>
				
				<div class="nombre"><label> Apellidos :</label>
				<input class="Campo1" type="text" name="Apellidos" id="apellidos" placeholder="Apellidos" required maxlength="30">
				</div>
				<br>
				<div class="tipo"><label> Tipo de identificacion: </label>
				<select name="Tipo_de_identificacion" class="Campo3" id="tipo" required> 
				<option> Seleccione una opcion</option>
				<option> Cedula de ciudadania </option>
				<option> Cedula extranjera </option>
				<option> Tarjeta de identidad </option>
				<option> NIUP </option>
				</select></div>
				<div class="nombre"><label> Genero </label>
				<select name="Genero" class="Campo1" id="genero" required>
					<option>Seleccione una opcion</option>
					<option>F</option>
					<option>M</option>
				</select>
				</div>									
				<div class="nombre"><label> Numero de identificacion: </label>
				<input class="Campo1" type="text" name="N_de_identificacion" id="numero" placeholder="Identificacion" maxlength="15" minlength="5" required maxlength="10"></div>
				
				<div class="seguir">
					<ul>
						<li><a id="regresar" href="index.php">REGRESAR</a></li>
						<li><a id="siguiente" href="#"> SIGUIENTE </a></li>
					</ul>
				</div>
			</div>
			</div> <!-- FIN DEL CONTENEDOR PASO 1-->

			
				<!-- CONTENEDOR PASO 2-->
				<div class="Paso2" id="Segundo">
					<div class="titulo2">
					<p class="exit">x</p>
						<h1>Datos de envio</h1>
					</div>
						
				<div class="nombre"><label>Correo: </label>
				<input class="Campo1" type="text" id="Correo" name="Correo" placeholder="Correo" required></div>
				
				<div class="nombre"><label> Telefono: </label>
				<input class="Campo1" type="text" id="telefono" name="Telefono" placeholder="Telefono" required></div>
				<br>
				<div class="tipo"><label> Direccion: </label>
				<input class="Campo3" type="text" id="direccion" name="Direccion" placeholder="Direccion" required></div>
			
				<div class="nombre"><label> Departamento: </label>
				<input class="Campo1" type="text" id="Departamentos" name="Departamentos" placeholder="Departamento" required></div>
			
				<div class="nombre"><label> Ciudad: </label>
				<input class="Campo1" type="text" id="ciudad" name="Ciudad" placeholder="Ciudad" required></div> 
				
				<div class="seguir">
					<ul>
						<li><a id="atras2" href="#"> ATRAS </a></li>
						<li><a id="siguiente2" href="#"> SIGUIENTE </a></li>
			
					</ul>
				</div>
			
				</div> <!--FIN DEL CONTENEDOR PASO 2-->

					<!-- CONTENEDOR PASO 3-->
					<div class="Paso3" id="Tercera">
						<div class="titulo2">
						<p class="exit">x</p>
							<h1>Cuenta</h1>
						</div>
						<div class="formp3" >
					<div class="dato_usuario">
					<div class="nombre"><label>Nombre de usuario:</label>
					<input class="Campo1" type="text" id="username" name="Nombre_usuario" placeholder="Nombre usuario"></div>
					

					<div class="nombre"><label> Contraseña:</label>
					<input class="Campo1" type="Password" id="Password" name="Password" placeholder="Contraseña" required=""></div>
		


					<div class="nombre"><label> Confirmacion: </label>
					<input class="Campo1" type="Password" id="Confirmacion" name="Confirmacion" placeholder="Confirmacion contraseña" required>
					</div>
				</div>


					<div class="labelC"><label>Foto de perfil</label></div>
					<div class="foto">
						<img src="imagenes/usuario.png"  id="img">
						
					</div>
					<div id="EFoto">
						<input type="file" id="documento" class="examinar" name="Imagen"><p class="para">Subir</p>
					</div>
					<div id="bot2">
					<center>
					<input type="button" id="regresar3" name="REGRESAR" value="REGRESAR">
					<input type="submit" id="aceptar" name="ENVIAR" value="ENVIAR">
					<center>
				</div>
					
					</div> <!-- FIN DEL CONTENEDOR PASO3-->

					</div>
		</form>
	</div> <!--FIN DEL CONTENEDOR PRINCIPAL-->
	<div id="alert"></div>
	<div id="alert2"></div>
</div>
<?php
require_once('view/modelo/Footer_index.php');
?>
	
	
		
</body>
</html>
=======
<<!DOCTYPE html>
>>>>>>> origin
