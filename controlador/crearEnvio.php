<?php
    include 'conexion.php';
    

    if(isset($_POST['guardar'])){

        $departamento = $_POST['Depar'];
        $nombre = $_POST['Name']; 
        $city = $_POST['City'];
        $direccion = $_POST['direccion_Envio'];
        $telefono = $_POST['Telefono'];
        $detalles = $_POST['Detalles'];
        $id = (int)$_POST['ID'];
        $subtotal = $_POST['total'];
        $fechaActual = date('d-m-Y');
        $insertarDatos = "INSERT INTO compras VALUES (null,'$id', '$fechaActual','$subtotal','$departamento','$nombre','$city','$direccion','$telefono','$detalles')";
        $ejecutarInsertar = mysqli_query($enlace,$insertarDatos);
   
        if(!$ejecutarInsertar){
           echo "<script>alert('ERROR EN LA INSERCION DE DATOS');</script>";
        } else {
            header("Location: ../view/ConfirmacionCompra.php");
            return;
        }
    }
?>