<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilo2.css">
    <title>Document</title>
</head>
<body>
    <form action="inicioSesion.php" method="post">
        <input type="text" name="info2" value="<?php $_POST ?>" hidden>
        <input type="text" name="pag" value="3" hidden>
        <?php
                // guardo cada uno de los datos en un input hidden para concatenarlos
                // con el siguiente post
                foreach($_POST as $value) {
                    
                    if(gettype($value) == 'array') {
                        foreach($value as $v) {
                            echo '<input type="hidden" name="info_1[]" value="'. $v. '">';
                        }
                    }
                    echo '<input type="hidden" name="info_2[]" value="'. $value. '">';
                }
                ?>
        <div id= contenedor>       
            <div id="cajaCentral">
                <h3>seleccione las areas de interes:</h3>
                <div>
                    <input type="checkbox" name="opts[]" value="BasilicaSagradaFamilia">
                    <label>Basílica de la Sagrada Familia</label>
                </div>
                <div>
                    <input type="checkbox" name="opts[]" value="AlcazarSevilla">
                    <label>Real Alcázar de Sevilla</label>
                </div>
                <div>
                    <input type="checkbox" name="opts[]" value="CatedralMallorca">
                    <label>Catedral de Mallorca</label>
                </div>
                <div>
                    <input type="checkbox" name="opts[]" value="Alcazaba">
                    <label>Alcazaba</label>
                </div>
                <div>
                    <input type="checkbox" name="opts[]" value="CascoAntiguoBenidorm">
                    <label>El Casco Antiguo de Benidorm</label>
                </div><br>
                <input type="submit" value="submit">
            </div>
        </div> 
        
    </form>
</body>
</html>