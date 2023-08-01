<?php 

// /**
//  * Definicion de que hace la funcion
//  * @param tipo $variable
//  * @param string|array|null|object|class $texto
//  * @return string|bool|array|object|null|void
//  */

// // funcion de ejemplo
// function nombreFuncion(string $nombre)
// {
//     return $nombre;
// }

/**
 * regresa un saludo para saludar a cualquier usuario
 * @return string
 */

 function saludarUsuario()
 {
    return "!Hola vaquero, bienvenido!.";
 }
//llamado 1
$saludo = saludarUsuario();
echo $saludo;
//llamado 2
echo "\n".(saludarUsuario());

/**
 * Regresa un string indicando cuanto dinero fue cobrado
 * 
 * @param float $cantidad
 * @param string $moneda
 * @return void
 */

 function cobrar($cantidad, $moneda = 'COP')
 {
   
 }

?>