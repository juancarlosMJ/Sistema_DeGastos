<?php
require_once "../conexion.php";
require_once "../metodosCrud.php";

$cantidad=$_POST['txtcantidad'];
$concepto=$_POST['txtconcepto'];
$id=$_POST['id'];

$datos=array(
            $cantidad,
            $concepto,
            $id
            );

$obj=new metodos(); 
if($obj->actualizarDatos($datos)==1){
    header("location:../inicio.php");

}else{
    echo"fallo al agregar";
    
}

?>