<?php
require_once "config.php";

//Nuestros procesos...
if (!isset($_POST["id"])) {
    $_SESSION["error"] = "Acceso no autorizado.";
    header("Location: index.php?error=true"); //Si no hay datos, volvemos a la página principal (index)
    die;
}

// Información que se insertará
$_POST = array_map('trim', $_POST);

$id = $_POST["id"];
$gamertag = $_POST["gamertag"];
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$juego = $_POST["juego"];
$miembros = $_POST["miembros"];
$url = $_POST["url"];
$color = $_POST["color"];

try {

    // Validar el gamertag
    if (strlen($gamertag) < 5) { //si el gamertag es menor a 5 caracteres se lanzara la exception
        throw new Exception("Tu GamerTag no es válido.");
    }

    // Validar el email del usuario
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Ingresa un correo electrónico válido.");
    }

    // Nueva conexión a la base de datos;
    $db = conectar();
    // Usamos placeholders para los valores
    $sql = "UPDATE equipos 
    SET 
    gamertag = :gamertag,
    nombre = :nombre,
    email = :email,
    juego = :juego,
    miembros = :miembros,
    url = :url,
    color = :color
    WHERE 
    id = :id";

    $sentencia = $db->prepare($sql);
    // Bind de cada columna con su valor
    $sentencia->bindParam("id", $id);
    $sentencia->bindParam("gamertag", $gamertag);
    $sentencia->bindParam("nombre", $nombre);
    $sentencia->bindParam("email", $email);
    $sentencia->bindParam("juego", $juego);
    $sentencia->bindParam("miembros", $miembros);
    $sentencia->bindParam("url", $url);
    $sentencia->bindParam("color", $color);
    $sentencia->execute();

    // Para obtener el ID del registro insertado
    // $id_equipo = $db->lastInsertId();

    // Cierra la conexión a la db
    $db = null;

    $_SESSION["exito"] = sprintf("Se actualizó con éxito tu equipo con ID %s.", $id);
    header(sprintf("Location: equipoedit.php?id=%s", $id));
    die;
} catch (Exception $e) {
    $_SESSION["error"] = $e->getMessage();
    header(sprintf("Location: equipoedit.php?id=%s&error=true", $id));
    die;
}
