<?php
     include_once("/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php");

     $id=$_SESSION["login_correcto"]["usu_codigo"];
     $tituloPub= isset ($_POST["tituloPublicacion"]) ? $_POST["tituloPublicacion"]:false;
     $descripcionPub= isset ($_POST["descripcion"]) ? $_POST["descripcion"]:false;
     $interesesPub= isset ($_POST["intereses"]) ? $_POST["intereses"]:false;
     $categoriaIdPub= isset ($_POST["categoriaId"]) ? $_POST["categoriaId"]:false;
     $estadoPub= isset ($_POST["estado"]) ? $_POST["estado"]:false;
     $fotoPrincipal= isset($_FILES["fotoPrincipal"]["tmp_name"]) ? $_FILES["fotoPrincipal"]["tmp_name"]:false;
     $imagen1= isset($_FILES["imagen1"]["tmp_name"]) ? $_FILES["imagen1"]["tmp_name"]:false;
     $imagen2 = isset($_FILES["imagen2"]["tmp_name"]) ? $_FILES["imagen2"]["tmp_name"]:false;
     $imagen3 = isset($_FILES["imagen3"]["tmp_name"]) ? $_FILES["imagen3"]["tmp_name"]:false;
     $imagen4 = isset($_FILES["imagen4"]["tmp_name"]) ? $_FILES["imagen4"]["tmp_name"]:false;

?>