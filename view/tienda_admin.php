<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amanology - Administracion</title>
    <link rel = "icon" type = "image/png" href = "../img/Mini.png" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/index.css" rel="stylesheet" media="screen">
  </head>
  <body>
    
    <?php include 'navBarA.php'; ?>

    <!-- Ventana de agregar producto fija en todo momento-->
    <div class="container">   
      <div class="card-columns mt-3">
        <div class="card" style="width: 18rem; height:27rem;">
          <img src="../img/agregar.png" class="card-img-top" alt="..." style="width:17.5rem; height:300px;">
          <div class="card-body">
            <h5 class="card-title">AGREGAR PRODUCTO</h5>
            <a href="../funcionalidades/agregar_producto.php" class="btn btn-dark">Agregar</a>
          </div>
        </div>
        
        <!-- Conexión con PHP para consultar los productos de la BD-->
        <?php 
          include '../controlador/conexion.php';
          $enlace = mysqli_connect($servidor, $usuario,$password,$baseDeDatos);
          $resultados = mysqli_query($enlace,"SELECT * FROM productos");
          while($consulta = mysqli_fetch_array($resultados)){
        ?>
                  
        <!-- Card que se va a ir añadiendo por cada producto que exista-->
        <div class="card" style="width: 18rem; height:27rem;">
          <img src="../img/<?php echo $consulta['ID']?>.jpg" class="card-img-top" alt="..." style="width:18rem; height:150px;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $consulta['Nombre']?></h5>
            <p class="card-text"><?php echo $consulta['Descripcion']?></p>
            <p class="card-text"><?php echo $consulta['Precio']?></p>
            <a href="#" class="btn btn-dark">Añadir al carrito</a>
            <a href="../funcionalidades/editarProducto.php?id=<?php echo $consulta['ID']?>" class="btn btn-dark" style="margin-top:20px;">Editar información</a>
          </div>
        </div>
  
        <!-- Cerrar el ciclo de los productos-->
        <?php } ?>
      </div>
    </div>  

    <?php include 'footer.php'?>
                
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>