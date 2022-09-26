<?php
    include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php";
    $id=$_SESSION["login_correcto"]["usu_codigo"];
    $imgCedula= isset ($_FILES["imagenCedula"]["tmp_name"]) ? $_FILES["imagenCedula"]["tmp_name"]:false;
    $imgDirreccion= isset ($_FILES["imagenDirreccion"]["tmp_name"]) ? $_FILES["imagenDirreccion"]["tmp_name"]:false;
     var_dump($imgCedula);

    if($imgCedula && $imgDirreccion){
       
        $tamaño_img= $_FILES["imagenCedula"]["size"];
        $tamaño_img1= $_FILES["imagenDirreccion"]["size"];

        $leer_imgCedula= fopen($imgCedula,"r");
        $leer_imgDirreccion= fopen($imgDirreccion,"r");

        $convercion=$imgC=fread($leer_imgCedula,$tamaño_img);
        $convercion=$imgD=fread($leer_imgDirreccion,$tamaño_img1);

        $add_verificacion="INSERT INTO datos_verificado VALUES('$id','$imgCedula','$imgDirreccion')";

       if (mysqli_query($db,$add_verificacion)){
          echo "se inserto en la base de datos";
          header("location:/exchangecity/proyectosena/includes/datosusuario.php");
       }else{
         echo "mensaje: " .mysqli_error($db);
       }

       

    }else{
        echo "no entro ";
        $_SESSION["errorImagenes"]="no se pudieron insertar las imagenes";
    }

    

        
    
?>

