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
        header('Location: login.php');
        exit;
    }


    // ---------------------------------------//
    //   Confirmación de EMAIL y PASSWORD     //
    // ---------------------------------------//
    $data = $_POST;
    $Email = $data['Email'];
    $Pass = $data['Pass'];

    $consult = "SELECT * FROM users WHERE Email = '$Email' AND Pass = '$Pass'";
    $query = mysqli_query($connection, $consult);

    if (mysqli_num_rows($query) > 0){
        // Lo lleva a la Pagina Principal 
        if($Email=="julianramirez.wm@gmail.com"){
           
            $_SESSION['usuario'] = $Email;
            $_SESSION['id'] = $id;
            header('Location: ../view/tienda_admin.php');
            exit;
        }else{
            
            $_SESSION['usuario'] = $Email;
            $_SESSION['id'] = $id;
            header('Location: ../view/index.php');
            exit;
        }
        
    }

    else {
        // Mensaje de Error
        $_SESSION['messages'][] = 'Email o Contraseña invalida';
        header('Location: ../view/login.php');
        exit;
    }
    $connection->close();
?>