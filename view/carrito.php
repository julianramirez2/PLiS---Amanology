<?php
  session_start();
  $total = 0;
  include '../controlador/conexion.php';
  if(isset($_SESSION['carrito'])){
    //Si existe buscamos si ya estaba agregado el producto
    if(isset($_GET['id'])){
      $arreglo=$_SESSION['carrito'];
      $encontro=false;
      $numero = 0;
      for($i = 0; $i<count($arreglo);$i++){
        if($arreglo[$i]['Id']==$_GET['id']){
          $encontro = true;
          $numero = $i;
        }
      }
      if($encontro == true){
        $arreglo[$numero]['Cantidad'] =$arreglo[$numero]['Cantidad']+1;
        $_SESSION['carrito']=$arreglo;
      }else{
        //no estaba el registro
        $nombre ="";
        $precio = "";
        $imagen = "";
        $res = mysqli_query($enlace,"SELECT * FROM productos WHERE id=".$_GET['id']) or die();
        $fila = mysqli_fetch_row($res);

        $nombre = $fila[1];
        $precio = $fila[2];
        $descripcion = $fila[3];
        $arregloNuevo = array(
            'Id'=>$_GET['id'],
            'Nombre'=>$nombre,
            'Precio'=>$precio,
            'Cantidad'=>1,
            'Descripcion'=>$descripcion
        );
        array_push($arreglo,$arregloNuevo);
        $_SESSION['carrito']=$arreglo;
        header("Location: carrito.php");
      }
    }
  } else {
    //creamos variable de sesion
    if(isset($_GET['id'])){
      $nombre ="";
      $precio = "";
      $imagen = "";
      $res = mysqli_query($enlace,"SELECT * FROM productos WHERE id=".$_GET['id']) or die();
      $fila = mysqli_fetch_row($res);
      $nombre = $fila[1];
      $precio = $fila[2];
      $descripcion = $fila[3];
      $arreglo[] = array(
        'Id'=>$_GET['id'],
        'Nombre'=>$nombre,
        'Precio'=>$precio,
        'Cantidad'=>1,
        'Descripcion'=>$descripcion
      );
      $_SESSION['carrito']=$arreglo;
      header("Location: carrito.php");
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amanology - Carrito</title>
    <link rel = "icon" type = "image/png" href = "../img/Mini.png" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/index.css" rel="stylesheet" media="screen">
  </head>
  <body>
    
    <?php include 'navBar.php'; ?>

    <?php 
        
      if(isset($_SESSION['carrito'])){
        $arregloCarrito = $_SESSION['carrito'];
        for($i=0;$i<count($arregloCarrito);$i++){
          $total = $total + ($arregloCarrito[$i]['Precio']*$arregloCarrito[$i]['Cantidad']);
      
    ?>
    
    <div class="container" style="background-color:white; height:100px; padding-top:10px; margin-top:10px;">   
      <div class="card-columns mt-3">
        <tr>
          <td class="product-name">
              <h2 class="h5 text-black"><?php echo $arregloCarrito[$i]['Nombre'] ?></h2>
          </td>

          <td>Precio: <?php echo $arregloCarrito[$i]['Precio'] ?></td>
          <td>
            <div class="input-group mb-3" style="max-width: 120px;">
              <input type="text" class="form-control text-center txtCantidad" data-precio="<?php echo $arregloCarrito[$i]['Precio']; ?>" data-id="<?php echo $arregloCarrito[$i]['Id']; ?>"  value="Cantidad: <?php echo $arregloCarrito[$i]['Cantidad'] ?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" readonly>   
            </div>
          </td>

          <td class="cant<?php echo $arregloCarrito[$i]['Id'] ?>">Subtotal: $<?php echo $arregloCarrito[$i]['Precio']*$arregloCarrito[$i]['Cantidad'] ?></td>
          <td><a href="#" class="btn btn-primary btn-sm btnEliminar" data-id="<?php echo $arregloCarrito[$i]['Id']; ?>">X</a></td>

        </tr>
      </div>
    </div>    
        
    <?php 
      } }
    ?>

    <div class="container" style="background-color:white; height:100px; padding-top:10px; margin-top:10px;">   
      <div class="card-columns mt-3">
        <tr>
          <td class="product-name">
              <h2 class="h5 text-black">SUBTOTAL</h2>
          </td>

          <td>Subtotal de todos los productos</td>
          <td>
            <div class="input-group mb-3" style="max-width: 120px;">
              <input type="text" class="form-control text-center txtCantidad" value="$<?php echo $total ?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" readonly>   
            </div>
          </td>

          <td class=""></td>
          <td><a href="datosEnvio.php?total=<?php echo $total; ?>" class="btn btn-primary btn-sm">IR A PAGAR</a></td>
        </tr>
      </div>
    </div>     


    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".btnEliminar").click(function(event){
          event.preventDefault();
          var id = $(this).data('id');
          var boton = $(this);
          $.ajax({
            method:'POST',
            url:'../controlador/eliminarCarrito.php',
            data:{
              id:id
            }
          }).done(function(respuesta){
            boton.parent('td').parent('tr').remove();   
            location.reload();          
          });
        });
      });
    </script>
    
    <?php include 'footer.php'?>

  </body>
</html>