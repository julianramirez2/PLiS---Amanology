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
        <?php include 'navBar.php'; ?>
        
        <?php 
            $res2 = mysqli_query($enlace,"SELECT * FROM compras WHERE IDUserC='$idUser'");
            while($consulta = mysqli_fetch_array($res2)){
                $id = $consulta['IDUserC'];
                $fecha = $consulta['Fecha'];
                $subtotal = $consulta['Subtotal'];
                $depart = $consulta['Depar'];
                $city = $consulta['City'];
                $direccion = $consulta['direccion_Envio'];
                $telefono = $consulta['Telefono'];
                $detalles = $consulta['Detalles'];
        ?>

        <div class="contenedorPadre">
            <div class="row">
                <div class="col-sm text-title border-right">
                    <h5 class="detalle">DETALLE DE COMPRA</h5>
                </div>
                <div class="col-sm border-right informacion">
                    <p class = "title"> Fecha: </p>
                    <p class = "align"> <?php echo $fecha?> </p>
                </div>
                <div class="col-sm border-right informacion">
                    <p class = "title"> Departamento: </p>
                    <p class = "align"><?php echo $depart?> </p>
                </div>
                <div class="col-sm border-right informacion">
                    <p class = "title"> Ciudad: </p>
                    <p class = "align"><?php echo $city?> </p>
                </div>
                <div class="col-sm border-right informacion">
                    <p class = "title"> Direccion: </p>
                    <p class = "align"> <?php echo $direccion?> </p>
                </div>
                <div class="col-sm border-right informacion">
                   <p class = "title"> Nro.Telefono: </p>
                   <p class = "align"> <?php echo $telefono?> </p>
                </div>
                <div class="col-sm border-right informacion">
                    <p class = "title"> Precio: </p>
                    <p class = "align">  $<?php echo $subtotal?> COP </p>
                </div>
                <div class="col-sm informacion">
                    <p class = "title"> Detalles: </p>
                    <p class = "align"> <?php echo $detalles?> </p>
                </div>
            </div>
        </div>       
        
        <?php }?>
        
        <?php include 'footer.php'?> 
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>