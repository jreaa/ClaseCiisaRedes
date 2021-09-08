<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimepleLogin</title>
    
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

    <!--Login Simple-->

    <main>
        <div class="container">
            <div class="row mt-2">
                <div class="col-md-6">
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="contraseña">Contraseña</label>
                            <input type="password" name="contraseña" class="form-control">
                        </div>

                        <button name="btn" type="submit" class="btn btn-success">
                            Enviar 
                        </button>
                    </form>
                </div>

                <div class="col-md-6">

                    <?php if(isset($_SESSION['nombre'])){ ?> 
                        <div class="alert alert-warning">
                            <?php echo $_SESSION['nombre']; ?>

                            <?php session_destroy(); ?>
                        </div>
                    <?php } ?>

                    <?php if(isset($_SESSION['contraseña'])){ ?> 
                        <div class="alert alert-warning">
                            <?php echo $_SESSION['contraseña']; ?>
                            <?php session_destroy(); ?>
                        </div>
                    <?php } ?>
                    <?php if(isset($_SESSION['bienvenido'])){ ?> 
                        <div class="alert alert-success">
                            <?php echo $_SESSION['bienvenido']; ?>
                            <?php session_destroy(); ?>
                        </div>
                    <?php } ?>
                    

                </div>
            </div>
        </div>
    </main>
   
    
</body>
</html>