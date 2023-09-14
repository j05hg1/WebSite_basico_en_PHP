<?php
require_once "config.php";

//Nuestros procesos...
if (!isset($_GET["id"])) {
    $_SESSION["error"] = "Acceso no autorizado.";
    header("Location: index.php?error=true"); //Si no hay datos, volvemos a la página principal (index)
    die;
}

// Información que se eliminará
$id = $_GET["id"];

try {

    $db = conectar();
    $sql = "SELECT * FROM equipos WHERE id = :id LIMIT 1";
    $sentencia = $db->prepare($sql);
    $sentencia->bindParam("id", $id);
    $sentencia->execute();
    $equipos = $sentencia->fetchAll();
    
    // Validar si existe el equipo
    if (empty($equipos)) {
        throw new Exception("No existe el equipo en la base de datos");
    }

    $equipo = $equipos[0];

    // Borrado del registro
    $sql = "DELETE FROM equipos WHERE id = :id";
    $sentencia = $db->prepare($sql);
    $sentencia->bindParam("id", $id);
    $sentencia->execute();

    // Cierra la conexión a la db
    $db = null;

    $_SESSION["exito"] = sprintf("Se borró con éxito el equipo con ID %s.", $id);
    header("Location: equipos.php");
    die;
} catch (Exception $e) {
    $_SESSION["error"] = $e->getMessage();
    header("Location: equipos.php?error=true");
    die;
}
