<?php
    include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php";
?>
<?php 
$imagen1= isset($_FILES["imagen1Dirreccion"]["tmp_name"]) ? $_FILES["imagen2Dirreccion"]["tmp_name"]:false;
$imagen2 = isset($_FILES["imagen2Dirreccion"]["tmp_name"]) ? $_FILES["imagen2Dirreccion"]["tmp_name"]:false;
$error=array();
if($imagen1 && $imagen2 ){
     
    $tamaño_img1= $_FILES["imagen1Dirreccion"]["size"];
    $tamaño_img2= $_FILES["imagen2Dirreccion"]["size"];
   
    // se lee la imagen que inserto el usuario y se guarda en variable
    $leer_imagen1= fopen($imagen1,"r");
    $leer_imagen2= fopen($imagen2,"r");
    
    // se convierte la imagen en bites
    $conversion_img1=fread($leer_imagen1,$tamaño_img1);
    $conversion_img2=fread($leer_imagen2,$tamaño_img2);
   
    //se quitan las barras invertidas para que deje insertar la im
    $conversion_img1=addslashes($conversion_img1);
    $conversion_img2=addslashes($conversion_img2);
    echo "entro";
  
}else{
    $_SESSION["errorImagen"]="por favor lleno todos los campos de imagen";
    $error=+1;
    echo "ERROR";
        
}



if(count($error)==0){
    $sql="INSERT INTO  intercambio	(int_conf_direccion_usu,int_conf_direccion_pro) VALUES ('$conversion_img1','$conversion_img2') ";
    $insert=mysqli_query($db,$sql);
    $datos_direc=mysqli_fetch_assoc($insert);
    if($insert){
        echo "se inserto";
    }else{

    }

}else{

}

?>