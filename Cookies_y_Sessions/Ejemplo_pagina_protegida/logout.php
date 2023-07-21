<?php 

//Iniciamos session
session_start();

//Destruimos la sesión
unset($_SESSION["verificado"]);  //Elimina el usuario de la variable $_SESSION
session_destroy();

//Redireccionamos
header("Location: login.php");
die;

?>