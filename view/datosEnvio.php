<?php
  session_start();
  $total = $_GET['total'];

  include '../controlador/conexion.php';
  $correo = $_SESSION['usuario'];
  $res = mysqli_query($enlace,"SELECT * FROM users WHERE Email='$correo'");
  while($consulta = mysqli_fetch_array($res)){
    $id = $consulta['IDUser'];
    $nombre = $consulta['Name'];
    $apellido = $consulta['LastName'];
  }
  //echo $id;
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amanology - Datos de Envio</title>
    <link rel = "icon" type = "image/png" href = "../img/Mini.png" />
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/index.css" rel="stylesheet" media="screen">
    <link href="../css/datosEnvio.css" rel="stylesheet" media="screen">
  </head>

  <body>

    <?php include 'navBar.php'; ?>
   

    <div class = "Box_Form">
      <p class = "Box-Title"> Agregue sus datos para Continuar </p>
      <!-- Crea formulario de crear -->
      <form action = "../controlador/crearEnvio.php" method = "POST">
    
        <label class = "Text_Form">
          <p> Departamento / Región: </p>
          <input class = "Input_Form" name = "Depar" type="text" list="region" />
          <!-- Lista de opciones -->
          <datalist id = "region">
            <option>Amazonas</option>
            <option>Antioquia</option>
            <option>Aracua</option>
            <option>Atlántico</option>
            <option>Bolívar</option>
            <option>Boyacá</option>
            <option>Caldas</option>
            <option>Caquetá</option>
            <option>Casanare</option>
            <option>Cauca</option>
            <option>Cesar</option>
            <option>Chocó</option>
            <option>Córdoba</option>
            <option>Cundimarca</option>
            <option>Guainía</option>
            <option>Guaviare</option>
            <option>Huila</option>
            <option>La Guajira</option>
            <option>Magdalena</option>
            <option>Meta</option>
            <option>Nariño</option>
            <option>Norte de Santander</option>
            <option>Putumayo</option>
            <option>Quindío</option>
            <option>Risaralda</option>
            <option>San Andrés y Providencia</option>
            <option>Santander</option>
            <option>Sucre</option>
            <option>Tolima</option>
            <option>Valle del Cauca</option>
            <option>Vaupés</option>
            <option>Vichada</option>
          </datalist>
        </label>

        <label class = "Text_Form">
          <p> Nombre Completo: </p>
          <input class = "Input_Form" name = "Name" type = "text" value="<?php echo $nombre ?> <?php echo $apellido ?>" required/>
        </label>

        <label class = "Text_Form">
          <p> Ciudad: </p>
          <input class = "Input_Form" name = "City" type = "text"" required/>
        </label> 

        <label class = "Text_Form">
          <p> Dirección: </p>
          <input class = "Input_Form" name = "direccion_Envio" type = "address" required/>
        </label> 

        <label class = "Text_Form">
          <p> Número de Telefono: </p>
          <input class = "Input_Form" name = "Telefono" type = "tel" required/>
        </label>

        <label class = "Text_Form">
          <p> Info. Adicional: </p>
          <input class = "Input_Form" name = "Detalles" type = "address" required placeholder="Información adicional sobre el envío"/>
        </label>               

        <input class = "Input_Form" name = "ID" type = "hidden" value = "<?php echo $id ?>" required/>
        <input class = "Input_Form" name = "total" type = "hidden" value = "<?php echo $total ?>" required/>

        <!-- Botón que guarda los datos en la BD -->
        <p> <input class = "Button-Send" type = "submit" name="guardar" value = "Confirmar Compra"/> </p>
      </form>

      <h2> Asegúrese de que la dirección esté correcta </h1>
     
    </div>

    <?php include 'footer.php'?>
  </body>
</html>