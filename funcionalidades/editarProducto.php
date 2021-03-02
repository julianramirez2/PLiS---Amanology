<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "icon" type = "image/png" href = "../img/Mini.png" />
    <title>Amanology - Editar Producto </title>

    <!-- CSS de Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/index.css" rel="stylesheet" media="screen">

  </head>
  
  <body>
    <div class="row bg-succes align-items-center vh-100">      
      <div class="col sm-4 bg-white">

        <form class="text-center border border-light p-5" method="POST" action="../controlador/editarProd.php">

          <p class="h4 mb-4">EDITAR INFORMACIÓN DEL PRODUCTO</p>

          <!-- Conexión con la BD para consultar la información del producto-->
          <?php 
           include '../controlador/conexion.php';
           $enlace = mysqli_connect($servidor, $usuario,$password,$baseDeDatos);
           $resultados = mysqli_query($enlace,"SELECT * FROM productos WHERE ID=".$_GET['id']);
           while($consulta = mysqli_fetch_array($resultados)){
          ?>
        
          <!-- Inputs con la información-->
          <input type="text" name="nombre" class="form-control mb-4" placeholder="<?php echo $consulta['Nombre']?>">
      
          <input type="text" name="descripcion" class="form-control mb-4" placeholder="<?php echo $consulta['Descripcion']?>">

          <input type="number" name="precio" class="form-control mb-4" placeholder="<?php echo $consulta['Precio']?>">

          <input class="form-control mr-sm-2" type="hidden" placeholder="" aria-label="Search" name="id" value="<?php echo $_GET['id']?>" >

          <button class="btn btn-info btn-block my-4" name="agregar" type="submit">EDITAR INFORMACIÓN</button>
        

          <?php } ?>

        </form>

      </div>
    </div>

    <div class = "Under_Bar"> 
      <p class = "Under_Text"> Este proyecto está protegido por derechos de autor adjunto a PLiS Team </p>
    </div>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>