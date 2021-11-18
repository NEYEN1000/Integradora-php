<?php
$nombreUsuario = $_POST["nombreUs"];
$emailUsuario = $_POST["emailUs"];
$passUsuario = md5($_POST["passUs"]);
$validoUs = "ariel";
$emailValido = "aolmosariel@gmail.com";
$passValida = "holamundo";
if($nombreUsuario == $validoUs && $emailUsuario == $emailValido && $passUsuario == $passValida) {
    echo "Logueo exitoso ";
}
else{
    echo "Datos invalidos ";
}

?>