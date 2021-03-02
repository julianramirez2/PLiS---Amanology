<?php 
    session_start();
    $arreglo = $_SESSION['carrito'];
    for($i=0;$i<count($arreglo);$i++){
        if($arreglo[$i]['Id']!=$_POST['id']){
            $arregloNuevo[] = array(
                'Id' => $arreglo[$i]['Id'],
                'Nombre' => $arreglo[$i]['Nombre'],
                'Precio' => $arreglo[$i]['Precio'],
                'Cantidad' => $arreglo[$i]['Cantidad']
            );
        }
    }

    if(isset($arregloNuevo)){
        $_SESSION['carrito']=$arregloNuevo;
    }else{
        //registro a eliminar es el unico que habia
        unset($_SESSION['carrito']);
    }
    echo "Eliminado";
?>