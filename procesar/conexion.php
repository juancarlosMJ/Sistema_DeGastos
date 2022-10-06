<?php 
function conexion(){
    $servidor = 'localhost';
    $usuario = 'root';
    $password = '';
    $bd= 'sistema_gastos';
    $puerto=3306;

    $conexion = mysqli_connect(
        $servidor,
        $usuario,
        $password,
        $bd,
        $puerto
    );
    return$conexion;
}