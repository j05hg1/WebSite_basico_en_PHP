<?php 

//Iniciamos la sesión
session_start();
$_SESSION["token"] = "abc123$_.1344xSWy";

//Imprimir contenido de session
echo $_SESSION["token"];

//Comprobamos si existe
if(isset($_SESSION["token"])):
    echo 'El token de la sesión es: '. $_SESSION["token"];
else:
    echo 'No existe la variable de sesión que buscas.';
endif;

//Modificar contenido de session
$_SESSION['token'] ='nuevotokenmuycool123$_';

//Borrar variable
unset ($_SESSION ['token']);

//Destruir la sesión
session_destroy() ;

echo $_SESSION["token"];

?>