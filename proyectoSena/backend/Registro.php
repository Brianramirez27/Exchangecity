<?php
if(isset($_POST)){
     /* si existe post se hace la conexion ala base de datos*/
     include_once "/wamp64/www/proyectoSena/funciones/conexionDB.php";
     // se guardan los valores que recibimos  en variables para despues comprobarlos

     $nombre= isset ($_POST["nombre"]) ? $_POST["nombre"]:false;
     $apellido= isset ($_POST["apellido"]) ? $_POST["apellido"]:false;
     $correo=  isset( $_POST["correo"]) ? $_POST["correo"]:false;
     $contraseña= isset ($_POST["password"]) ? $_POST["password"]: false;

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

     /* se validad el correo electronico */




     if(!empty($correo) && filter_var($correo,FILTER_VALIDATE_EMAIL)){
          
     }

     /*validacion de la password */
     if(!empty($contraseña)){
          $contraseña=$contraseña;
     }else{
          $error["password"] = "la contraseña esta vacia";
     }


     /*despues de que las datos fueron validados comprovamos que no halla ningun error */
     if(empty($error)){

     }

}
?>
