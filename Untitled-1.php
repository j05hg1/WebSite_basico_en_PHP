<?php 
try {    
    $conexion = require 'db.php'; 
    //SQL a base de datos tabla productos
    $sentencia = $conexion->prepare("SELECT * FROM productos");
    $sentencia->execute();
    
    // Muestra si trae datos de la tabla productos
    $resultados = $sentencia->fetchAll();
    // print_r($resultados);

    // Mostrar resultados
    if (empty($resultados)) {
        echo "No hay productos en la base de datos.";
    } else {
        foreach ($resultados as $producto) {
            echo sprintf("<h1>%s</h1>", $producto["nombre"]);
            echo sprintf("<p>$%s</p>", $producto["precio"]);
            echo $producto["oferta"] == 1 ? "En Oferta" : "No en Oferta" ;
            echo sprintf("<p><b>%s</b></p>", date('d-M-Y H:i', strtotime($producto["creado"])));
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>