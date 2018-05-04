<?php

class Login {
	private $User;
	private $Password;
	public  $Id_usuario;


	public function Validar (){

		$this->User= htmlspecialchars($_POST['User']);
		$this->Password= htmlspecialchars($_POST['Password']);

		$query="SELECT*FROM usuario INNER JOIN administrador on usuario.Cod_usuario = administrador.Cod_usuario WHERE Nombre_usuario='$this->User'";
		$resultado=Conexion::conectar->query($query);
		while($row=mysqli_fetch_assoc($resultado)){
			if($row['Cod_usuario']==$row['Cod_usuario']){
			if($this->User==$row['Nombre_usuario']){	
			if(password_verify($this->Password,$row['Password'])){
				session_start();
				$_SESSION['Administrador']=$this->User;
				header("location: Administrador.php");
				exit();
			}else{
				echo "la contreaseña no coincide";
				exit();
			}
		}
	}
}
	$query="SELECT*FROM usuario  WHERE Nombre_usuario='$this->User'";
		$resultado=$this->conexion->query($query);
		while($row=mysqli_fetch_assoc($resultado)){
			if($row['Cod_usuario']==$row['Cod_usuario']){
			if($this->User==$row['Nombre_usuario']){	
			if(password_verify($this->Password,$row['Password'])){
				session_start();
				$_SESSION['Usuario']=$this->User;
				header("location: usuario.php");
			
			}else{
				echo "la contreaseña no coincide";
				exit();
			}
		}
	}
	}//fin del while
	echo "el usuario no exite";
}	//fin de la funciontion validar
}//fin de la clase
$validar=new Login;
$validar->Validar();
?>