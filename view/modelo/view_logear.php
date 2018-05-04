<div id="login" >
			<h1 class="cerrar">X</h1>
	<h1 class="titulo">Iniciar Sesion</h1>
	 <!--IMAGEN LOGO-->
	 
	<form action="controller/controller_logear.php" method="post">
		
		<input type="text" name="User" class="campo campo1" placeholder="Usuario" required><br>
		<input type="Password" name="Password" class="campo campo2" placeholder="Contraseña" ><br>
		<input type="checkbox" name="autorizacion" class="auto" value="ok">Mantener sesion abierta
		<input type="Submit" name="enviar" class="boton" id="validar" value="Iniciar Sesion">
		<center><a href="" class="olvide">¿Olvide  Mi Contraseña?</a></center>
	</form>
	</div>