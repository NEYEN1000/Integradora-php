<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Portfolio</title>
</head>
<body class="pagina">
    <div class="container-fluid">
        <header>
        <nav>
            <?php include_once("navbar.php"); ?>
        </nav>
        </header>
    </div>
    <main>
    <?php
        include_once("Funciones.php");
        if (isset($_POST["enviar"]) && $_POST["nombreUs"] != "" && $_POST["emailUs"] != "" && $_POST["passUs"] != "") {
           echo "Formulario enviado.<br>";
            $nombreUsuario = $_POST["nombreUs"];
            $emailUsuario = $_POST["emailUs"];
            $passUs = ($_POST["passUs"]);
            echo signin($nombreUsuario, $emailUsuario, $passUs);
        } else {
         

        ?>
         
        <h1 class="text-center text-custsm"><br> INICIÁ SESIÓN </br></h1>
        <div class="container p-5">
            <form action="Secreto.php" method="POST">
                <div class="mb-3">
                  <label class=form-label>Nombre</label>
                  <input type="text" class="form-control" name="nombreUs">
                </div>
                <div class="mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control"  name="emailUs">
                </div>
                <div class="mb-3">
                  <label class="form-label">Contraseña</label>
                  <input type="password" name="passUs"  class="form-control">
                </div>
                <button type="submit" class="btn btn-primary" name="enviar">Enviar datos</button>
            </form>
        </div>
         
        <?php
        }
        ?>
    </main>
    <div class="container-fluid">
      <footer class="text-center">  
        <?php include_once ("footer.php"); ?>  
      </footer>
    </div>

</body>
</html>
