<?php 
//Crear un Cookie con el nombre de usuario
setcookie('username', 'Pancho Doe', time() + 60); //Expirará en 1 minuto

//Cargar el valor de una cookie
$_COOKIE['username']; //Pancho Doe

//Borrar cookie
unset($_COOKIE['username']);
// o también
// setcookie('username', 'Pancho Doe', time() - 1);

?>