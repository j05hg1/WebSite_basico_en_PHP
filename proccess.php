<?php 
//Nuestros procesos...

echo '<h1>Estamos recibiendo lo siguiente:</h1>';
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
echo $_POST['color'].'<br>';