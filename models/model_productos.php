<?php

class producto{

public function mostrar_producto(){

    $consulta = "SELECT * FROM producto WHERE Estado = 'Activo' LIMIT 0,8";
    $resultado = $this->conexion->query($consulta);

    while ($row=mysqli_fetch_assoc($resultado)){

        //operaciones matematicas
        $precio = $row['Precio'];
        $porcentaje = $row['Ofertas'];

        if ($porcentaje>0){
            $descuento = $precio * $porcentaje/100;
            $total = $precio - $descuento;
            $total = number_format($total,0,'.','.');
            $precio = number_format($precio,0,'.','.');

        }
        //Se crean los contenedores que llevaran el producto
        echo '<div class="contenedor_pro">';
        //Se crea el contenedor de la imagen del producto
        echo '<div class="Content_img">';	
			echo '<div class="ofertas">
					<p>'.$row['Ofertas'].'%</p>
				</div>';
			echo '<div class="Imagen_producto" >
					<a href="?producto='.$row['Id_prod'].'"><img src="'.$row['Img'].'"></a>
                </div>';
                echo '<div>
					<a href="'.$row['Id_prod'].'" class="manita deseo"></a>
				</div>';
			echo '<div class="carrito_complas">
					<a class="carritos" href="'. $row['Id_prod'].'">Tu Carrito</a>
				</div>
			</div>';
			echo '<div class="Nombreproducto">
					<p class="Nombre">'.$row['Nombre_pro'].'</p>
					<p class="precio">
					<span class="ahorro">Ahora '.$total.' </span>';
			echo '<span  class="antes"> Antes '.$precio.'</span></p>
			</div>
			</div>';

    }//fin while



}// fin funcion




}

?>