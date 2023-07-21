<?php 

//Iniciamos session
session_start();

//Prevenimos el ingreso a la página de perfil si no es un usuario verificado
if(!isset($_SESSION["verificado"]) || $_SESSION["verificado"] == false):
    header('Location: login.php');
endif;

//Mensaje de bienvenida
echo '<p>Bienvenido a tu perfil de usuario</p>';
echo '<a href="logout.php">Cerrar sesión</a>';

?>