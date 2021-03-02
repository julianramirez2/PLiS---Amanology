<?php
    include 'conexion.php';
    $enlace = mysqli_connect($servidor, $usuario,$password,$baseDeDatos);

    if(isset($_POST['agregar'])){
		
		$nombre = $_POST['nombre']; 
		$descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $id = $_POST['id'];
		$insertarDatos = "UPDATE productos SET Nombre='$nombre', Precio='$precio', Descripcion='$descripcion' WHERE ID='$id'";
		

		$ejecutarInsertar = mysqli_query($enlace,$insertarDatos);

			if(!$ejecutarInsertar){
                echo "<script>alert('ERROR EN LA INSERCION DE DATOS');</script>";
			}else{
				header("Location: ../view/tienda_admin.php");
        		return;
			}

    }
?>