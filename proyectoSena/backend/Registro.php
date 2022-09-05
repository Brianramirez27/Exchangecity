
<?php

if(isset($_POST)){
     /* si existe post se hace la conexion ala base de datos*/
     include_once "/wamp64/www/exchangecity/proyectoSena/funciones/conexionDB.php";
     // se guardan los valores que recibimos  en variables para despues comprobarlos

     $nombre= isset ($_POST["nombre"]) ? $_POST["nombre"]:false;
     $apellido= isset ($_POST["apellido"]) ? $_POST["apellido"]:false;
     $correo=  isset( $_POST["correo"]) ? $_POST["correo"]:false;
     $contraseña= isset ($_POST["password"]) ? $_POST["password"]: false;
     $opcion= isset ($_POST["RegistroOpcion"]) ? $_POST["RegistroOpcion"]:false;

     /* se crea un array para guardar los errores de validacion de datos */

     /* se validan los datos de los nombres y apellidos */
     if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[*][.][_]/",$nombre)){
          $nombre=$nombre;

     }else{
          $error["nombre"]="Nombre incorrecto";
     }
     if(!empty($apellido) && !is_numeric($apellido) && !preg_match("/[*][_][.]/",$apellido)){
          $apellido=$apellido;

     }else{
          $error["apellido"]="apellido incorrecto";
     }

     //se validad que el correo no exista en la base de datos  con una consulta 
     $consulta_email="SELECT * FROM usuario WHERE usu_correo='$correo'";
     $guardado_email= mysqli_query ($db,$consulta_email);
     $email_existente=mysqli_fetch_assoc($guardado_email);

     //se valida el correo  cuando ya tengamos la consulta de si hay algun correo igual o no hay
     if(!isset($email_existente)){
          if(!empty($correo) && filter_var($correo,FILTER_VALIDATE_EMAIL)){
          $correo=$correo;
          }else{
               $error["correo"]="correo vacio";
          }
     }else{
          $error["correo"]="el correo ya esta registrado";
     }
     /*validacion de la password */
     if(!empty($contraseña)){
          $contraseña=$contraseña;
     }else{
          $error["password"] = "la contraseña esta vacia";
     }

}
?>
