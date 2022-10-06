<?php
    require_once "../conexion.php";
    require_once "../metodosCrud.php";

    
    $cantidad=$_POST['txtcantidad'];
    $concepto=$_POST['txtconcepto'];
    
    $datos=array(
        $cantidad,
        $concepto
    );

    $obj= new metodos();
    if ($obj->insertarDatos($datos)==1){
        header("location:../inicio.php");
    }else {
        echo "fallo";
    }

?>