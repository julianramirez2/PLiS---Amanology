<?php
    include '../controlador/DatosUser.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Amanology - Seguridad </title>
        <link rel = "icon" type = "image/png" href = "../img/Mini.png" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../css/index.css" rel="stylesheet" media="screen">
        <link href="../css/Seguridad.css" rel="stylesheet" media="screen">
    </head>

    <body>
    
        <?php include 'navBar.php'; ?>

        <div class = "Box_Form">
            <p class = "Box-Title"> Tus Datos Personales </p>
            <!-- Crea formulario de crear -->
            <form action = "../controlador/DatosUser.php" method = "POST">

                <label class = "Text_Form">
                    <p> Nombre: </p>
                    <input class = "Input_Form" name = "Name" type = "text" value="<?php echo $name?>" required>
                </label>

                <label class = "Text_Form">
                    <p> Apellido: </p>
                    <input class = "Input_Form" name = "LastName" type = "text" value="<?php echo $lastname ?>" required>
                </label>

                <label class = "Text_Form">
                    <p> Correo: </p>
                    <input class = "Input_Form" name = "Email" type = "text" value="<?php echo $email; ?>" required>
                </label>

                <label class = "Text_Form">
                    <p> Contraseña: </p>
                    <input class = "Input_Form" name = "Pass" type = "text" value="<?php echo $pass; ?>" required>
                </label>

                <input class = "Input_Form" name = "ID" type = "hidden" value = "<?php echo $id ?>" required>
                
                <!-- Botón que guarda los datos en la BD -->
                <p> <input class = "Button-Security" type = "submit" name="cambiar" value = "Actualizar tus datos en Amanology" /> </p>

                <p class = "New_User"> ¿Deseas eliminar tu cuenta? </p>
                <p> <input class = "Button-Delete" type = "submit" name = "eliminar" value = "Eliminar tu cuenta de Amanology"/> </p>
            </form>
        </div>

        <?php include 'footer.php'?>

    </body>
</html>