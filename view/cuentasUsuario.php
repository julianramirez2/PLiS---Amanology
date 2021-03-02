<?php 
    session_start();

    include '../controlador/conexion.php';

    $correo = $_SESSION['usuario'];
    $res = mysqli_query($enlace,"SELECT IDUser FROM users WHERE Email='$correo'");
    $consulta = mysqli_fetch_array($res);
    $idUser = $consulta[0];
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Amanology - Mis Compras</title>
        <link rel = "icon" type = "image/png" href = "../img/Mini.png" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../css/compra.css" rel="stylesheet" media="screen">
        <link href="../css/index.css" rel="stylesheet" media="screen">
    </head>

    <body>
        <?php include 'navBarA.php'; ?>
        
        <?php 
            $res2 = mysqli_query($enlace,"SELECT * FROM users");
            while($consulta = mysqli_fetch_array($res2)){
                $id = $consulta['IDUser'];
                $name = $consulta['Name'];
                $LastName = $consulta['LastName'];
                $Email = $consulta['Email'];
        ?>

        <div class="contenedorPadre">
            <div class="row">
                <div class="col-sm text-title border-right">
                    <h5 class="detalle">DETALLE DE USUARIOS</h5>
                </div>
                <div class="col-sm border-right informacion">
                    <p class = "title"> ID: </p>
                    <p class = "align"> <?php echo $id?> </p>
                </div>
                <div class="col-sm border-right informacion">
                    <p class = "title"> Nombre: </p>
                    <p class = "align"><?php echo $name?> </p>
                </div>
                <div class="col-sm border-right informacion">
                    <p class = "title"> Apellido: </p>
                    <p class = "align"><?php echo $LastName?> </p>
                </div>
                <div class="col-sm border-right informacion">
                    <p class = "title"> Email: </p>
                    <p class = "align"> <?php echo $Email;?> </p>
                </div>
                <div class="col-sm border-right informacion">
                <a href="../funcionalidades/editarUsuario.php?id=<?php echo $id?>" class="btn btn-success" style="margin-top:15px; margin-left:40px;">Editar información</a>
                </div>
            </div>
        </div>       
        
        <?php }?>
        
        <?php include 'footer.php'?>
                
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>