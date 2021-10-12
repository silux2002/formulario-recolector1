<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilo1.css">
    <title>Document</title>
</head>
<body>
    <div id="contenedor">
        <div id="cajaCentral">
            <form action="inicioSesion.php" method="post">
                <input type="text" name="pag" value="2" hidden>
                <?php
                // guardo cada uno de los datos en un input hidden para concatenarlos
                // con el siguiente post
                foreach($_POST as $value) {
                    echo '<input type="hidden" name="info_1[]" value="'. $value. '">';
                }
                ?>
                <label for="nombre">Nombre</label><br>
                <input type="text" id="nombre" name="nombre"><br>
                <label for="apellido">Apellido</label><br>
                <input type="text" id="apellido" name="apellido"><br>
                <label for="email">Correo Electronico</label><br>
                <input type="email" id="email" name="email" pattern=".+@gmail\.com" size="30" required><br>
                <input type="submit" value="submit"> 
            </form>
        </div>
    </div>
</body>
</html>