<?php
    include_once("/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php");

    // echo $_POST["nombre"];
    // echo $_POST["imagenPerfil"];
    // echo $_POST["descripcion"];
    // echo $_POST["apellido"];
    // echo $_POST["correo"];
    // echo $_POST["documento"];
            // echo $_POST["ciudad"];
            // echo $_POST["contacto"];
            // echo $_POST["redSocial"];

     $nombre= $_FILES["imagenPerfil"]["name"];
     $tipo= $_FILES["imagenPerfil"]["type"];
     $tamaño=$_FILES["imagenPerfil"]["size"];

    $carpeta= '/wamp64/www/Exchangecity/proyectoSena/imagenes/publicaciones/';

    move_uploaded_file($_FILES["imagenPerfil"]["tmp_name"] ,$carpeta . $nombre);

    
    $leer_archivo= fopen($carpeta.$nombre,"r");
    $conversion=fread($leer_archivo,$tamaño);
    $conversion=addslashes($conversion);

    fclose($leer_archivo);

    $id=$_SESSION["login_correcto"]["usu_codigo"];
   


    $sql="UPDATE usuario SET
    usu_img_perfil='$conversion'";

    $insetar=mysqli_query($db,$sql);

    if($insetar){
        echo "se inserto";
    }else{
        echo "no se inserto",mysqli_error($db);
    }









?>

