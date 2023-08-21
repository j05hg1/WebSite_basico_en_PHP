<?php
// db_curso_php_int

$con = null;

try {
    // Datos para DSN o Data Source Name
    $engine = "mysql";
    $host = "localhost";
    $name = "db_curso_php_int";
    $charset = "utf8";

    // Credenciales de acceso
    $username = "root";
    $password = "";

    // Para recibir excepciones en caso de errores
    $options = 
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    // Nombre de origen de Base de Datos
    // Debe ser motor:host=host;dbname=nombre base de datos;charset=charset
    $dsn = sprintf("%s:host=%s;dbname=%s;charset=%s", $engine, $host, $name, $charset);
    $con = new PDO($dsn, $username, $password, $options);
    // $con = new PDO("mysql:host=localhost;dbname=db_curso_php_int;charset=utf8", $username, $password);
    
    // Para recibir excepciones en caso de errores
    // $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "La conexión se realizó con éxito.";

    //SQL a base de datos tabla productos
    $sentencia = $con->prepare("SELECT * FROM productos");
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

} catch (PDOException $e) {
    echo "Hubo un Error con la conexión: " . $e->getMessage();
}


// try {
//     $dsn = "mysql:host=localhost"; //"127.0.0.1";
//     //$dsn .= ";dbname=" . DBNAME;
//     if (isset($_ENV['MYSQL_PORT']))
//     $dsn .= ":".$_ENV["MYSQL_PORT"];
//     else
//     $dsn.= ":3306";
//     echo("Connecting to database server at ".$dsn."<br>");
//     /* Connect using SSL */
//     $options = array(
//         PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//         PDO::MYSQL_ATTR_SSL_CA       => __DIR__.'/ca-cert.pem',
//         PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8",
//         );
//         try{
//             $con = new PDO($dsn,$DBUSER,$DBPASS);
//             } catch (\PDOException $e) {
//                 die('Connection failed: ' .$e->getMessage());
//                 };
//                 return ($con);
//                 }catch(\PDOException $ex){
//                     print ("Error!: " . $sql . "<br>" . $conn->error);
//                     exit();
//                     }
