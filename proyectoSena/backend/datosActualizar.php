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

    echo $nombre= $_FILES["imagenPerfil"]["name"];
    echo $tipo= $_FILES["imagenPerfil"]["type"];
    echo  $tamaño=$_FILES["imagenPerfil"]["size"];
    $carpeta= '/wamp64/www/Exchangecity/proyectoSena/imagenes/publicaciones/';
    move_uploaded_file($_FILES["imagenPerfil"]["tmp_name"] ,$carpeta . $nombre);
    
 
?>

