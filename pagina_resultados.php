<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stilo2.css">
    </head>
    <body>
        <div id="contenedorEnd">
            <div id="cajafinal">
                <h1>Hola gente</h1>
                <h3>Info de la página 1</h3>
                <hr>
                <?php
            
                   
                    echo 'El usuario es: ' . $_POST['info_1']['1'] . '<br>';
                    echo 'La contraseña es: ' . $_POST['info_1']['2'];
                    /*array_walk($_POST['info_1'], 'dameInfo');
                    function dameInfo ($valor, $posicion){
                        echo $valor . $posicion . '<br>';
                    }
                    var_dump($_POST['info_1']);*/
                    
                
                ?>
                <h3>Info de la página 2</h3>
                <hr>
                
                <?php
                echo 'nombre del usuario: ' . $_POST['info_2']['2'] . '<br>';
                echo 'apellido del usuario: ' . $_POST['info_2']['3'] . '<br>';
                echo 'correo del usuario: ' . $_POST['info_2']['4'] . '<br>';
                    
                
                ?>
                <h3>Info de la página 3</h3>
                <hr>
                <p>Ha seleccionado:</p>
                <ul>
                <?php
                foreach($_POST['opts'] as $seleccionado) {
                    echo '<li>' . $seleccionado . '</li>';
                }
                ?>
                </ul>
            </div>
        </div>
    </body>
</html>