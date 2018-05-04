<?php


	class Registro{

		private $Nombre;
		private $Apellidos;
		private $Tipo_de_identificacion;
		private $N_de_identificacion;
		private $Genero;
		private $Correo;
		private $Direccion;
		private $Ciudad;
		private $Departamentos;
		private $Telefono;
		private $Nombre_usuario;
		private $Password;
		private $Encriptacion;

		public function capturar(){

			
			$this->Nombre = $_POST['Nombre'];
			$this->Apellidos = $_POST['Apellidos'];
			$this->Tipo_de_identificacion = $_POST['Tipo_de_identificacion'];
			$this->N_de_identificacion = $_POST['N_de_identificacion'];
			$this->Genero = $_POST['Genero'];
			$this->Correo = $_POST['Correo'];
			$this->Direccion = $_POST['Direccion'];
			$this->Ciudad = $_POST['Ciudad'];
			$this->Departamentos = $_POST['Departamentos'];
			$this->Telefono = $_POST['Telefono'];
			$this->Nombre_usuario = $_POST['Nombre_usuario'];
			$this->Password = $_POST['Password'];
			$this->Encriptacion;
	
		
				$this->Nombre_imagen = $_FILES['Imagen']['name'];
				$this->Archivo_imagen = $_FILES['Imagen']['tmp_name'];
				$this->Tamaño_imagen = $_FILES['Imagen']['size'];
				$this->Tipo_imagen = $_FILES['Imagen']['type'];

				$this->ruta="imagenes";
				$this->ruta = $this->ruta."/".$this->Nombre_imagen;

				

					if ($this->Tamaño_imagen<=1000000) {
						if($this->Tipo_imagen=="image/jpeg"||$this->Tipo_imagen=="image/jpg"||$this->Tipo_imagen=="image/png"){

						move_uploaded_file($this->Archivo_imagen, $this->ruta);
							
						}
						else{
							echo "Excedio el tamaño de la imagen";
						}
                    }
                    ?>