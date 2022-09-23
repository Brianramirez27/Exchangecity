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
<?php
function ConsultarCategoria($db){
    $sql="SELECT * FROM categoria ";

    if($datosCategoria=mysqli_query($db,$sql)){
        
    }else{
        echo mysqli_error($db);
    }
    return $datosCategoria;
}
?>

<?php
    function  ConsultarDatosVerificado($db){       
       $codigoUsu= $_SESSION["login_correcto"]["usu_codigo"];
       $sql="SELECT * FROM datos_verificado where FK_dat_codigo_du= '$codigoUsu'";
       if($consultaVer=mysqli_query($db,$sql)){
            return $consultaVer;
       }else{
        return false;
        }
    }
?>

<?php
function ConsultarEstado($db){
    $sql="SELECT * FROM estado ";

    if($datosEstado=mysqli_query($db,$sql)){
        
    }else{
        echo mysqli_error($db);
    }
    return $datosEstado;
}
?>

<?php
function ConsultarPublicaciones($db){
    $sql="SELECT * FROM publicacion  ORDER BY  pub_codigo  DESC LIMIT 10";

    if($datosPublicacion=mysqli_query($db,$sql)){
        
    }else{
        echo mysqli_error($db);
    }
    return $datosPublicacion;
}
?>

<?php
// function ConsultarCategoriaPublicacion($db ,$categoriaPublicaion){
//     $sql="SELECT * FROM categoria  WHERE cat_codigo=''$categoriaPublicaion";

//     if($datosCategoriaPubli=mysqli_query($db,$sql)){
        
//     }else{
//         echo mysqli_error($db);
//     }
//     return $datosCategoriaPubli;
// }
// ?>




