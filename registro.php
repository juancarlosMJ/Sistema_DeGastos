<?php include "header.php";?>
<html>
    <body>
        <h2>Rigistro de usuario</h2>
        <form action="./procesar/registraUsusrio.php"method="post">
        <input type="text" name="usuario" placeholder="Usuario" class="form-control"  require>
        <br>
        <input type="text" name="password"placeholder="password" class="form-control"  require>
        <br>
        <button class="btn btn-primary">Crea nuevo usuario</button>
        </form>
        <br>
        <a href="./index.php" class="btn btn-success">si ya tienes cuenta entra </a>
    </body>
</html>
<?php include "footer.php";?>