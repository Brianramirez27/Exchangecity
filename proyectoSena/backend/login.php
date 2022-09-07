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

       $verifi_password=$datos_usuario["usu_password"];
       var_dump($datos_usuario);
        if(!empty($contraseña)){
            echo "campo diligenciado";
        
            if( $verifi_password==$contraseña){

                $_SESSION["login_correcto"]=$datos_usuario;

                }else{
                    $_SESSION["contrasena_erronea"]="contraseña incorrecta o campo vacio";
                }
        }else{
            
         echo   $_SESSION["campo_vacio"]="contraseña vacia";

        }    
    }else{
       $_SESSION["login_erroneo"]="correo no registrado o campo vacio";
   }

 
    

   


}
  
?>
