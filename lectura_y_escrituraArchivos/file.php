<?php 

# Abrir un archivo con nombre archivoPlano.txt en modo lectura.

$fp1 = fopen("archivoPlano.txt","r");

// $fp1 = fopen("https://www.google.com","r");

fclose($fp1);

# Hacemos lo que necesitemos.

// Abrir un archivo y leer todo su contenido.
$archivoLectura    = 'archivoPlano.txt';
$fpLectura         = fopen($archivoLectura, 'r');
$contenidoL  = fread($fpLectura, filesize($archivoLectura));
echo ($contenidoL);
fclose($fpLectura);

// Abrir un archivo y escribir todo su contenido.
$archivoEscritura   = 'archivoPlano.txt';
$nuevo_contenido    = 'Hola soy el nuevo contenido del archivo de texto ^Y^.';
$fpEscritura                 = fopen($archivoEscritura, 'w');
/**  Otra alternativa a fwrite()
 * $fp = fputs($archivoEscritura, 'w');
*/
fwrite($fpEscritura, $nuevo_contenido, 54); //escribirá solo los primeros 4 bytes: Hola
$fpEscritura = fopen($archivoEscritura, 'r');
$contenidoNuevo = fread($fpEscritura, filesize($archivoEscritura));
echo ($contenidoNuevo);
fclose($fpEscritura);

// Puntero de archivo
$archivoPuntero    = 'archivoPlano.txt';
$contenidoP         = '1234567890'; //Es el contenido del archivo de texto
$fp                = fopen($archivoPuntero, 'r');
echo ftell($fp); //Imprime 0
fseek($fp, 10); //Coloca el puntero en el byte 10
echo ftell($fp);
?>