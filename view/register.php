<!DOCTYPE html>
<html lan = "es">
    <head>
        <title> Amanology - Registro </title>
        <link rel = "icon" type = "image/png" href = "../img/Mini.png" />
        <link rel = "stylesheet" href = "../css/style_Register.css" />
        <link rel = "stylesheet" href = "../css/index.css" />
    </head>
    <body>
    <img class = "Register_Title" src = "../img/Logo.png" alt = "Logo_Amanology"> 
        
        <div class = "Register_Box">
            <p class = "Box-Title"> Crear Cuenta </p>
            <!-- Empieza el campo de Registro -->
            <form action = "../controlador/configReg.php" method = "POST">
                
                <label class = "Text_Register"> 
                    <p> Nombre: </p> 
                    <input class = "Input_Register" type = "text" name = "Name" /> 
                </label>

                <label class = "Text_Register"> 
                    <p> Apellido: </p> 
                    <input class = "Input_Register" type = "text" name = "LastName" />
                </label>

                <label class = "Text_Register"> 
                    <p> Correo Electronico: </p> 
                    <input class = "Input_Register" type = "email" name = "Email" />
                </label>

                <label class = "Text_Register"> 
                    <p> Contraseña: </p> 
                    <input class = "Input_Register" type = "password" name = "Pass" />
                </label>

                <label class = "Text_Register"> 
                    <p> Confirmar Contraseña: </p> 
                    <input class = "Input_Register" type = "password" name = "ConfirmPass" />
                </label>

                <!-- Espacio de los Mensajes de Error y Advertencia -->
                <div class = "Register_Messages">
                    <?php require_once '../messages.php';?>
                </div>
                
                <!-- Botón para confirmar el registro -->
                <p> <input class = "Button_Register" type = "submit" value = "Crea tu cuenta en Amanology" /> </p>
            </form>

            <!-- Se puede devolver al Login -->
            <div align = "center">
                <p> ¿Ya tienes una cuenta?  <a href = "login.php">Inicia Sesión</a></p>
            </div>
            
        </div>
        <div class = "Under_Bar"> 
            <p class = "Under_Text"> Este proyecto está protegido por derechos de autor adjunto a PLiS Team </p>
        </div>

    </body>
</html>