<?php require_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP 2023</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >

    <!-- <style>
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
    </style> -->
</head>
<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <?php echo mostrar_error(); ?>
                <?php echo mostrar_mensaje(); ?>
                <div class="card">
                    <!-- <h1>Prueba</h1> -->
                    <h3 class="card-header border-bottom-0">Registro de equipo</h3>
                    <div class="card-body">

                        <!-- <form action="proccess.php" method="GET"> -->
                        <form action="proccess.php" method="POST">
                            <!-- <div class="mb-3">
                                <label class="form-label" for="id">ID de usuario (invisible)</label>
                                <input class="form-control" type="hidden" id="id" name="id" value="001">
                            </div> -->
    
                            <div class="mb-3">
                                <label class="form-label" for="gamertag">GamerTag:</label>
                                <input class="form-control" type="text" id="gamertag" name="gamertag">
                            </div>
    
                            <div class="mb-3">                            
                                <label class="form-label" for="nombre">Nombre:</label>
                                <input class="form-control" type="text" id="nombre" name="nombre">
                            </div>
                            
                            <div class="mb-3">                            
                                <label class="form-label" for="email">Correo electronico:</label>
                                <input class="form-control" type="email" id="email" name="email">
                            </div>
    
                            <div class="mb-3">                            
                                <label class="form-label" for="juego">Selecciona un juego:</label>
                                <select class="form-select" name="juego" id="juego">
                                    <?php foreach (cargar_juegos() as $juego): ?>
                                        <option value="<?php echo $juego[0]; ?>"><?php echo $juego[1]; ?></option>                                        
                                    <?php endforeach ?>
                                </select>
                            </div>
    
                            <div class="mb-3">                            
                                <label class="form-label" for="miembros">Número de miembros:</label>
                                <input class="form-range" type="range" id="miembros" name="miembros" min="1" max="6" value="1">
                            </div>
                            
                            <div class="mb-3">                            
                                <label class="form-label" for="url">Red Social:</label>
                                <input class="form-control" type="url" id="url" name="url">
                            </div>
    
                            <div class="mb-3">                            
                                <label class="form-label" for="color">Color del Equipo:</label>
                                <input class="form-control" type="color" id="color" name="color">
                            </div>
    
                            <button class="btn btn-success" type="submit">Registrarse</button>
                            <button class="btn btn-danger" type="reset">Cancelar</button>                    
                        </form>    
                    </div>
                    <div class="card-footer">
                        <a href="equipos.php" class="btn btn-primary btn-sm">Ver equipos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>