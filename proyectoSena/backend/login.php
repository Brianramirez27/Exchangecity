<?php
  if(isset($_POST)){
    /* si existe post se hace la conexion ala base de datos*/
    include_once "/wamp64/www/exchangecity/proyectoSena/funciones/conexionDB.php";
    /* se crean variables para poder validar los datos  */
    $correo=  isset( $_POST["correo"]) ? $_POST["correo"]:false;
     $contraseña = isset($_POST["password"]) ? $_POST["password"]:false;

    /* se  crea un array para guardar los errores*/
    $error=array();
    
   /*se crea la consulta para verificar si el  correo  existe*/
    $consulta_email="SELECT * FROM usuario WHERE usu_correo='$correo'";
     $guardar_email = mysqli_query($db,$consulta_email);
     $datos_usuario=mysqli_fetch_assoc($guardar_email);

   /*si el correo existe entramos a verificar la password */
   if(isset($datos_usuario)){

       $verifi_password=password_verify($contraseña, $datos_usuario["usu_password"]);
       
    
    /*verificamos que la coontraseña que ingreso este guardada */
        if( $contraseña==$verifi_password){

            $_SESSION["login_correcto"]=$datos_usuario;

        }else{
            $_SESSION["contrasena_erronea"]="contraseña incorrecta ";
        }

    }else{
       $_SESSION["login_erroneo"]="correo no registrado o campo vacio";
   }
   /*se comprueba que el campo contraseña que no sea vacio */
   if(!empty($contraseña)){
    $contraseña=$contraseña;
    }else{
        $_SESSION["password"] = "la contraseña esta vacia";
    }
    
}

header("location: /exchangecity/proyectoSena/includes/login.php");

  
?>
