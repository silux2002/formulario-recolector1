<?php


if( $_POST['pag'] == '1' ) {
    if($_POST['contra1'] == $_POST['contra2'] && strlen($_POST['contra1']) > 0 && strlen($_POST['contra2']) > 0){
        include "pagina-2.php";
    }else{
        echo "<script>alert('La contraseña no concuerda con la anterior o esta vacia');</script>";
        include "pagina-1.html";
    }
   
} else if( $_POST['pag'] == '2' ) {
  
  
    include "pagina-3.php";

} else if($_POST['pag'] == '3') {
    
    include "pagina_resultados.php";
    
}
