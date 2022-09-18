<?php 
/* funcion para consultar ciudades */
function ConsultarCiudades($db){
    $sql="SELECT * FROM ciudad ";

    if($datosCiudad=mysqli_query($db,$sql)){
        
    }else{
        echo mysqli_error($db);
    }
    return $datosCiudad;
}



?>

