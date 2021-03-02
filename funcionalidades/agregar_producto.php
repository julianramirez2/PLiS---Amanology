<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "icon" type = "image/png" href = "../img/Mini.png" />
    <title>Amanology - Agregar Producto </title>

    <!-- CSS de Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/index.css" rel="stylesheet" media="screen">

  </head>
  
  <body>
    <div class="row bg-succes align-items-center vh-100">      
      <div class="col sm-4 bg-white">

        <!-- Formulario POST para agregar la información de los productos-->
        <form class="text-center border border-light p-5" method="POST" action="../controlador/agregarProd.php">

          <p class="h4 mb-4">AGREGAR PRODUCTO</p>


          <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre del producto">
      
          <input type="text" name="descripcion" class="form-control mb-4" placeholder="Descripción del producto">

          <input type="number" name="precio" class="form-control mb-4" placeholder="Precio">

          <button class="btn btn-info btn-block my-4" name="agregar" type="submit">AGREGAR PRODUCTO</button>

        </form>

      </div>
    </div>

    <div class = "Under_Bar"> 
      <p class = "Under_Text"> Este proyecto está protegido por derechos de autor adjunto a PLiS Team </p>
    </div>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>