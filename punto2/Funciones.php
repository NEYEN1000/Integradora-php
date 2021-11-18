<?php
function signin($nombreUsuario, $emailUsuario, $passUs) {
    $validoUs = "ariel";
    $emailValido = "aolmosariel@gmail.com";
    $passValida = "holamundo";
    if ($nombreUsuario == $validoUs && $emailUsuario == $emailValido && $passUs == $passValida) {
        header('Location:accesoconfirmado.php');
    
    }
    else{
          header('Location:accesodenegado.php');
        
       
       
    }
}

?>