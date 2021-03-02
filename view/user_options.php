<!DOCTYPE html>
<html lang = es>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Amanology - Tu Cuenta </title>
        <link rel = "icon" type = "image/png" href = "../img/Mini.png" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../css/style_User.css" rel="stylesheet" media="screen">
        <link href="../css/index.css" rel="stylesheet" media="screen">
    </head>
    <body>
    
        <?php include 'navBar.php'; ?>

        <!-- Crea un Botón que lleva a los Pedidos -->
        <div align = "center">
            <button class = "Button_Options" name = "Option_1" onclick = "location = 'misCompras.php'"> <p> <img class = "img" src = "../img/Pedidos.png" alt = "Pedidos"> Compras </p> </button>
        </div>

        <!-- Crea un Botón que lleva a la Seguridad -->
        <div align = "center">
            <button class = "Button_Options" name = "Option_2" onclick = "location = 'user_security.php'"> <p> <img class = "img" src = "../img/Seguridad.png" alt = "Pedidos"> Seguridad </p> </button>
        </div>

        <!------------------------------- Barra Inferior -------------------------------->
        <!--                      Muestra los derechos protegidos                      -->
        <!------------------------------------------------------------------------------->
        <?php include 'footer.php'?>

    </body>
</html>