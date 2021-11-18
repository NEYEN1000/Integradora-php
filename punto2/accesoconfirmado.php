<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integradora OLMOS ARIEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
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
        <div class="container">
            <div class="row">
                <div class="col-12 my-3">
                    <h1>¡Bienvenido al sistema!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-primary" role="alert">
                        Ingresaste correctamente tus datos!
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="index.php" class="btn btn-primary float-end">Salir</a>
                </div>
            </div>
        </div>
   
    </main>
    <div class="container-fluid">
        <footer class="text-center">
            <?php include_once ("footer.php"); ?>
        </footer>
    </div>
</body>
</html>