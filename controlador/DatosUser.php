<?php
    session_start();

    include 'conexion.php';
    $email = $_SESSION['usuario'];
    $res = mysqli_query($enlace,"SELECT * FROM users WHERE Email='$email'");
    while($consulta = mysqli_fetch_array($res)){
        $id = $consulta['IDUser'];
        $name = $consulta['Name'];
        $lastname = $consulta['LastName'];
        $pass = $consulta['Pass'];
    }

    if(isset($_POST['cambiar'])){

        $name = $_POST['Name']; 
        $lastname = $_POST['LastName'];
        $email = $_POST['Email'];
        $pass = $_POST['Pass'];
        $CambiarDatos = "UPDATE users SET Name = '$name', LastName = '$lastname', Email = '$email', Pass = '$pass' WHERE IDUser = '$id'";
        $ejecutarCambio = mysqli_query($enlace,$CambiarDatos);

        if(!$ejecutarCambio){
            echo "<script>alert('ERROR EN LA INSERCION DE DATOS');</script>";
        } else {
            header("Location: ../view/ConfirmacionActualiza.php");
        }
    }

    if(isset($_POST['eliminar'])){

        $EliminarDatos = "DELETE FROM users WHERE IDUser = '$id'";
        $ejecutarInsertar = mysqli_query($enlace,$EliminarDatos);

        if(!$ejecutarInsertar){
            echo "<script>alert('ERROR ELIMINANDO SU CUENTA');</script>";
        } else {
            header("Location: ../view/login.php");
        }
    }
?>