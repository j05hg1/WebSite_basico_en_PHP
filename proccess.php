<?php 
require_once "config.php";

//Nuestros procesos...
if (!isset($_POST["gamertag"])) {
    $_SESSION["error"] = "Acceso no autorizado.";
    header("Location: index.php?error=true"); //Si no hay datos, volvemos a la página principal (index)
    die;
}

$_SESSION["exito"] = "Este es un mensaje de éxito.";
header("Location: index.php"); //Si no hay datos, volvemos a la página principal (index)
die;

/* echo '<h1>Estamos recibiendo lo siguiente:</h1>';
echo '<pre>';
print_r($_REQUEST);
echo '</prev>';

// Con metodo GET
// echo '<h3>Ingresando a los datos: </h3>';
// echo $_GET['gamertag'].'<br>';
// echo $_GET['nombre'].'<br>';
// echo $_GET['miembros'].'<br>';
// echo $_GET['color'].'<br>';

// Con metodo POST
echo '<h3>Ingresando a los datos: </h3>';
echo $_POST['gamertag'].'<br>';
echo $_POST['nombre'].'<br>';
echo $_POST['miembros'].'<br>';
echo $_POST['color'].'<br>'; */