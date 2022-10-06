
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Sistema DE Gastos!</title>
  </head>
  <body>
    <br>
    <br>
  <?php session_start();
 require_once "conexion.php";
 require_once "metodosCrud.php";
    if(isset($_SESSION['usuario'])){
    ?>
    <center><h2> Bienvenido <br> <?php echo $_SESSION['usuario']?></h2></center>
    <hr>
    

        <?php
        }else{
            header('location:./index.php');
    }
?>
<div class="container">
<center><div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Hola!!:P</h5>
    <p class="card-text"><form action="procesos/insertar.php" method="post" >
        <label for="">cantidad</label>
        <p></p>
        <input type="text" name="txtcantidad">
        <p></p>
        <label for="">concepto</label>
        <p></p>
        <input type="text" name="txtconcepto">
        <p></p>
        <button class="btn btn-success">Agregar</button>
    </form></p>
  </div>
</div>
</center></div>

<br>
<table class="table table-dark">
        <tr>
            <td>cantidad</td>
            <td>concepto o Categoria</td>
            <td>fecha</td>
            <td>Actualizar</td>
            <td>Eliminar</td>
        </tr>
        <?php

        $obj=new metodos();
        $sql="SELECT id,cantidad,concepto,fecha from t_cantidad";
        $datos=$obj->mostrarDatos($sql);

        foreach ($datos as $key){            

?>
        <tr>
            <td><?php echo $key['cantidad'] ?></td>
            <td><?php echo $key['concepto'] ?></td>
            <td><?php echo $key['fecha'] ?></td>
            <td><a href="editar.php?id=<?php echo $key['id'] ?>"class="btn btn-success">Editar</a></td>
            <td><a href="procesos/eliminar.php?id=<?php echo $key['id'] ?>"class="btn btn-info">Eliminar</a></td>
        </tr>
    <?php
    }
    ?>
</div>
    </table>
    <a href="./procesar/logout.php"class="btn btn-danger">salir </a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>