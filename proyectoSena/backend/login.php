<?php
  if(isset($_POST)){
    /* si existe post se hace la conexion ala base de datos*/
    include_once "/wamp64/www/exchangecity/proyectoSena/funciones/conexionDB.php";
    /* se crean variables para poder validar los datos  */
    $correo=  isset( $_POST["correo"]) ? $_POST["correo"]:false;
     $contraseña = isset($_POST["password"]) ? $_POST["password"]:false;

    /* se  crea un array para guardar los errores*/
    $error=array();
    
   
    $consulta_email="SELECT * FROM usuario WHERE usu_correo='$correo'";
     $guardar_email = mysqli_query($db,$consulta_email);
     $email_existente=mysqli_fetch_assoc($guardar_email);

    
     
    



     
     

   
    //var_dump($email_exitente);

   if(isset($email_existente)){
        echo "existe";
             
    }else{
        echo "no existe";
   }

}
  
?>
