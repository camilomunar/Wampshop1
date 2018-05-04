<?php
require('Conexion.php');

class Proveedor extends Conexion{
    private $Nombre;
	private $Telefono;
	private $Correo;
	private $Direccion;
	private $confirmacion = false;
    
    public function validar(){
        $this->Nombre = $_POST['Nombre'];
		$this->Telefono = $_POST['Telefono'];
		$this->Correo = $_POST['Correo'];
		$this->Direccion = $_POST['Direccion'];
		if (strlen($this->Nombre)<4) {
		 echo "por favor ingrese los datos correctamente";
		}
		else if(is_numeric($this->Telefono)<10) {
			echo "por favor ingrese los datos correctamente";
		}
		else if(!filter_var($this->Correo, FILTER_VALIDATE_EMAIL)){
            echo "por favor ingrese los datos correctamente";
		}
	  else{
	  	$this->confirmacion=true;
	  }
		}

    public function guardar(){
		if ($this->confirmacion){
		$consulta=("INSERT INTO `wampshop`.`proveedor` (`Id_proveedor`, `Nombre`, `Apellido`, `Correo`, `Direccion`, `Telefono`)  VALUES (NULL, '$this->Nombre', 'hola', '$this->Correo','$this->Direccion', '$this->Telefono');");
		$resultado=$this->conexion->query($consulta);
		if($resultado){
			header("location: Administrador.php?dato=prov");
		}

}
	}
public function consultar(){

echo '
<h1 class="title_prov">Proveedores</h1>
<table border>
	<tr>
		
		<th>cod</th>
		<th>Nombre del proveedor</th>
        <th>Telefono</th>
        <th>Correo</th>
        <th>Direccion</th>
             <th>Modificar</th>

	</tr>';

$Consulta = "SELECT * FROM proveedor";
$Resultado=$this->conexion->query($Consulta);
$i=0;
while ($row=mysqli_fetch_assoc($Resultado)){
$i++;
if($i%2==0){
	$color ="color";
}else{
	$color="";
}
echo "<tr class='".$color."'><td>".$row['Id_proveedor']."</td>";
echo "<td>".$row['Nombre']."</td>";
echo "<td>".$row['Telefono']."</td>";
echo "<td>".$row['Correo']."</td>";
echo "<td>".$row['Direccion']."</td>";
echo '<td><div class="hiper1"><a  class="modi" href="'. $row['Id_proveedor'].'"><input type="submit" value="Modificar"></a></td></div></tr>';
}
echo "</table>";
}



public function modificar(){
	$Id_proveedor=$_REQUEST['prod'];
	$query = "SELECT * FROM proveedor WHERE Id_proveedor='$Id_proveedor'" ;
	$this->resultado = $this->conexion->query($query);
	$row = $this->resultado->fetch_assoc();

	echo '<form  method="post" action="Guardar_actualizacion_prov.php">
	
		<div class="emergente">
			   
			 <h1> Modificar Proveedor</h1>
			  <a href="Administrador.php?dato=prov" class="equis dos" id="equis">X</a>
	
	<div class="nombre"><label> Id proveedor:</label>
	 <input type="text" name="Id_proveedor" class="campo1" value="'. $row['Id_proveedor'].'" required/></div>
	<div class="nombre"><label> Nombre proveedor:</label>
	<input type="text" class="campo1" name="Nombre" value="'.$row['Nombre'].'" required=""/></div>
	<div class="for2"><label  > Correo:</label>
	 <input type="text" class="for2" name="Correo" value="'.$row['Correo'].'" required/></div>
	<div class="nombre"><label > Telefono:</label>
		<input type="text" class="campo1" name="Telefono" value="'.$row['Telefono'].'" required/></div>
	<div class="nombre"><label>Dirección:</label>
		<input type="text" name="Direccion" class="campo1" value="'.$row['Direccion'].'" required/></div>
	 <input type="submit" value="Modificar" class="boton">
	 
	
	
	
	</div>
	 </form>';
	

	}
	function validarcambios(){
		$this->Nombre = $_POST['Nombre'];
		$this->Telefono = $_POST['Telefono'];
		$this->Correo = $_POST['Correo'];
		$this->Direccion = $_POST['Direccion'];
		if (strlen($this->Nombre)<4) {
		 echo "por favor ingrese los datos correctamente";
		}
		else if(is_numeric($this->Telefono)<10) {
			echo "por favor ingrese los datos correctamente";
		}
		else if(!filter_var($this->Correo, FILTER_VALIDATE_EMAIL)){
            echo "por favor ingrese los datos correctamente";
		}else{
	  	
		$this->Id_proveedor = $_POST['Id_proveedor'];
   
	   $query=("UPDATE `proveedor` SET `Nombre` = '$this->Nombre', `Correo` = '$this->Correo', `Direccion` = '$this->Direccion',`Telefono` = '$this->Telefono' WHERE `proveedor`.`Id_proveedor` = '$this->Id_proveedor'"); 
  		 $resultado= $this->conexion->query($query);
	   if ($resultado) {
			header("Location: Administrador.php?dato=prov");
		} 
		else{
			echo 'los cambios no se guardaron';
	   }
	
   }
   
	
}
}

$modific = new Proveedor;


?>