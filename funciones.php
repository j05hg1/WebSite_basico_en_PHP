<?php

/**
 * Crea una conexión a la base de datos
 * 
 * @return PDO
 */
function conectar()
{
    $db = require 'db.php';

    return $db;
}

/**
 * Regresa el error en caso de existir
 * 
 * @return string|false
 */
function mostrar_error()
{
    if (!isset($_SESSION["error"])) {
        return false;
    }

    $error = $_SESSION["error"];
    unset($_SESSION["error"]);

    $html = sprintf('<div class="alert alert-danger">%s</div>', $error);

    return $html;
}

/**
 * Regresa el mensaje de exito guardado
 * 
 * @return string|false
 */
function mostrar_mensaje()
{
    // Si no hay un mensaje, regresamos falso para que no se imprima nada
    if (!isset($_SESSION["exito"])) {
        return false;
    }

    $mensaje = $_SESSION["exito"];
    unset($_SESSION["exito"]);

    $html = sprintf('<div class="alert alert-success">%s</div>', $mensaje);

    return $html;
}

// INSERT INTO `equipos` (`id`, `gamertag`, `nombre`, `email`, `juego`, `miembros`, `url`, `color`, `creado`) VALUES (NULL, 'Moxtrip', 'John Doe', 'jslocal@locahost.com', 'Valorant', '5', '', 'ebebeb', current_timestamp());