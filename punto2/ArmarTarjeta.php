<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Integradora OLMOS ARIEL</title>
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
        include_once("funciones.php");
        if (isset($_POST["enviar"]) && $_POST["nombreUsuario"] != "" && $_POST["apellidoUsuario"] != "" && $_POST["profesionUsuario"] != "" && $_POST["descripcionUsuario"] != "") {
            $nombreUsuario = $_POST["nombreUsuario"];
            $apellidoUsuario = $_POST["apellidoUsuario"];
            $profesionUsuario = $_POST["profesionUsuario"];
            $descripcionUsuario = $_POST["descripcionUsuario"];
            echo registro($nombreUsuario, $apellidoUsuario, $profesionUsuario, $descripcionUsuario);
        } else {

        ?>
            <h1 class="text-center text-custsm"><br> REGISTRATE </br></h1>
            <div class="container p-5">
                <form action="tarjeta.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control"name="nombreUsuario">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellido</label>
                        <input type="text" class="form-control"name="apellidoUsuario">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Profesión</label>
                        <input type="text" class="form-control" name="profesionUsuario">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <input type="text" class="form-control" name="descripcionUsuario">
                    </div>
                    <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
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