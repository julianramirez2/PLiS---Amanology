<?php
    include 'conexion.php';
    

    if(isset($_POST['agregar'])){
		echo "hola";
		$nombre = $_POST['nombre']; 
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$insertarDatos = "INSERT INTO productos VALUES (NULL, '$nombre','$precio','$descripcion')";
		

		$ejecutarInsertar = mysqli_query($enlace,$insertarDatos);

			if(!$ejecutarInsertar){
				echo "<script>alert('ERROR EN LA INSERCION DE DATOS');</script>";
			}else{
				header("Location: ../view/tienda_admin.php");
        		return;
			}

    }
?>