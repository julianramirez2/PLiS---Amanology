<?php
    // -----------------------//
    //   Conexión a MySQL     //
    // -----------------------//
    session_start();

    // Datos para la conexion
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'amanology';

    // Nace la conexión a la Base de Datos.
    $connection = mysqli_connect($host, $user, $password, $dbname);
    
    if(!$connection){
        // Mensaje de Error
        $_SESSION['messages'][] = "Conexión Fallida: " . mysqli_connect_error();
        header('Location: ../view/register.php');
        exit;
    }

     
    // -------------------------------------//
    //  Comprobación de la Entrada de Datos //
    // -------------------------------------//
    $data = $_POST;

    if(empty($data["Name"]) || empty($data["LastName"]) || empty($data["Email"]) || empty($data["Pass"]) || empty($data["ConfirmPass"])){
        // Mensaje de Solicitud
        $_SESSION['messages'][] = 'Introduce todos los campos requeridos';
        header('Location: ../view/register.php');
        exit;
    }

    else if ($data['Pass'] !== $data['ConfirmPass']){
        // Mensaje de Advertencia
        $_SESSION['messages'][] = 'Las contraseñas no coinciden';
        header('Location: ../view/register.php');
        exit;
    }

    else {
        // Uso de variables para facilitar el uso de datos
        $Name = $data["Name"];
        $LastName = $data["LastName"];
        $Email = $data["Email"];
        $Pass = $data["Pass"];

        // Preparamos la orden SQL
        $consult = "INSERT INTO users (IDUser,Name, LastName, Email, Pass) VALUES (null,'$Name', '$LastName', '$Email', '$Pass')";

        // Ejecuta la orden SQL
        if (mysqli_query($connection, $consult)){
            // Mensaje de Confirmación
            $_SESSION['messages'][] = 'Gracias por registrarte ';
            header('Location: ../view/login.php');
            exit;
        }

        // Verificación de Email
        else {
            // Mensaje de Advertencia
            $_SESSION['messages'][] = 'Ya existe una cuenta con este Email';
            header('Location: ../view/register.php');
            exit;
        }
    }
    // Cierra la conexión con MySQL
    $connection->close();
?>