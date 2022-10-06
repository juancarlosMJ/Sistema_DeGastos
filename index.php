<?php include "header.php"; ?>
     <!-- Sign In Form -->
     <form action="./procesar/logear.php" method="POST">
                    <div class="form-floating mb-2">
                    <label for="nombre">Nombre De Usuario</label>
                    <input type="text" name="usuario" class="form-control" placeholder="Usuario" require>
                    
                    </div>
                    <div class="form-floating mb-2">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Password" require >
                    
                    </div>
                    <div class="d-grid">
                <button class="btn btn-primary">Entrar</button>
                <a href="./registro.php" class="btn btn-danger">Registro</a>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
<?php include "footer.php"; ?>

