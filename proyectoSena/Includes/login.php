<?php 
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/header.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/menulateral.php";

?>
 

 <!--contenido de la pagina o aside-->
  <section id="container">
    
  <form class="login" action="/exchangecity/PROYECTOSENA/backend/login.php" method="post">
       <h3>Iniciar Seccion</h3> 
       <label class="labelLogin" for="correo">Correo</label>
       <input  class="inputLogin" type="email" name="correo">
       <?php echo isset($_SESSION["login_erroneo"])  ? "<div>" . $_SESSION["login_erroneo"] . "</div>":"";    ?>
       <label class="labelLogin" for="pasword">Contraseña</label>
       <input class="inputLogin" type="password" name="password">
       <?php echo isset($_SESSION["password"])  ? "<div>". $_SESSION["password"] ."</div>":"";  ?>
       <?php echo isset($_SESSION["contrasena_erronea"])  ? "<div>". $_SESSION["contrasena_erronea"] ."</div>":"";  ?>
     

       <input type="submit" value="Iniciar Secion">
   </form>
  </section>
  <!--limpiamos los flotados del aside -->
  <div style="clear: both"></div>

 ;
  <?php 
  include_once "/wamp64/www/exchangecity/proyectoSena/Includes/footer.php"
  
  ?>