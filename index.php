<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP 2023</title>

    <style>
        body {
            margin: 0px;
            padding: 20px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        label {
            display: inline;
            font-size: 14px;
            margin-bottom: 5px;
        }
        input, select, textarea {
            display: block;
            margin-bottom: 10px;
            padding: 5px;
        }
        input[type="submit"],
        input[type="reset"]{
            padding: 5px 10px;
            border: 0px;
            cursor: pointer;
            border-radius: 3px;
            display: inline;
            margin-bottom: 0px;
        }
        input[type="submit"]{
            background: #4cd137;
            color: white;
        }
        input[type="submit"]:hover{
            background: #44bd32;
        }
        input[type="reset"]{
            background: #e84118;
            color: white;
        }
        input[type="reset"]:hover{
            background: #c23616;
            color: white;
        }
        form{
            width: 250px;
            border: 1px solid #ebebeb;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <!-- <h1>Prueba</h1> -->
    <h3>Registro de equipo</h3>
    <form action="proccess.php" method="GET">
        <label for="id">ID de usuario (invisible)</label>
        <input type="hidden" id="id" name="id" value="001"><br>

        <label for="gamertag">GamerTag:</label>
        <input type="text" id="gamertag" name="gamertag"><br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="email">Correo electronico:</label>
        <input type="email" id="email" name="email"><br>

        <label for="juego">Selecciona un juego:</label>
        <select name="juego" id="juego">
            <option value="Valorant">Valorant</option>
            <option value="LoL">League of Legends</option>
            <option value="WZ2">Warzone 2</option>
            <option value="Overwatch2">OverWatch 2</option>
        </select><br>

        <label for="miembros">Número de miembros:</label>
        <input type="range" id="miembros" name="miembros" min="1" max="6" value="1"><br>
        
        <label for="url">Red Social:</label>
        <input type="url" id="url" name="url"><br>

        <label for="color">Color del Equipo:</label>
        <input type="color" id="color" name="color"><br>

        <input type="submit" name="submit" value="Registrarse">
        <input type="reset" name="reset" value="Reiniciar"><br>

    </form>
</body>
</html>