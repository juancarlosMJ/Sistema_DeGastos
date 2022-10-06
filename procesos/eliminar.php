<?php
require_once "../conexion.php";
require_once "../metodosCrud.php";
$id=$_GET['id'];
$obj= new metodos();
if ($obj->eliminarDatos($id)==1) {
    header("location:../inicio.php");
}else {
    echo "fallo";
}

?>