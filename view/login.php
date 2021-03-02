<!DOCTYPE html>
<html lan = "es">
    <head>
        <title> Amanology - Login </title>
        <link rel = "icon" type = "image/png" href = "../img/Mini.png" />
        <link rel = "stylesheet" href = "../css/index.css" />
        <link rel = "stylesheet" href = "../css/style_Login.css" />
    </head>

    <body>
        <img class = "Login_Title" src = "../img/Logo.png" alt = "Logo_Amanology">
        <div class = "Login_Box">
            <p class = "Box-Title"> Iniciar Sesión </p>
            <!-- Empieza el campo de Ingreso -->
            <form action = "../controlador/configLog.php" method = "POST">

                <label class = "Text_Login"> 
                    <p> Correo Electronico: </p> 
                    <input class = "Input_Login" type = "email" name = "Email" required/> 
                </label>

                <label class = "Text_Login"> 
                    <p> Contraseña: </p> 
                    <input class = "Input_Login" type = "password" name = "Pass" required/> 
                </label>

                <div class = "Login_Messages">
                    <?php require_once '../messages.php';?>
                </div>

                <p> <input class = "Button_Input_Login" type = "submit" value = "Iniciar Sesión" /> </p>
            </form>

            <p class = "New_User"> ¿Eres nuevo en Amanology? </p>
            <p> <input class = "Button-Go-Register" type = "button"  value = "Crea tu cuenta de Amanology" onclick = "location.href = 'register.php'"/> </p>

        </div>

        <div class = "Under_Bar"> 
            <p class = "Under_Text"> Este proyecto está protegido por derechos de autor adjunto a PLiS Team </p>
        </div>

    </body>
</html>