<?php
    include 'conexion.php';
    $enlace = mysqli_connect($servidor, $usuario,$password,$baseDeDatos);

    if(isset($_POST['agregar'])){
		
		$nombre = $_POST['nombre']; 
		$apellido = $_POST['apellido'];
        $Email = $_POST['email'];
        $id = $_POST['id'];
		$insertarDatos = "UPDATE users SET Name='$nombre', LastName='$apellido', Email='$Email' WHERE IDUser='$id'";
		

		$ejecutarInsertar = mysqli_query($enlace,$insertarDatos);

			if(!$ejecutarInsertar){
                echo "<script>alert('ERROR EN LA INSERCION DE DATOS');</script>";
			}else{
				header("Location: ../view/cuentasUsuario.php");
        		return;
			}

    }
?>