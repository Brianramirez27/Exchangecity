<?php 
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/header.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/menulateral.php";

?>
  <!--contenido de la pagina o aside-->
  <section id="container">
   
    <form  class="registro login"action="/exchangecity/PROYECTOSENA/backend/Registro.php" method="POST">
    
    <h3>Registro</h3>
    <?php echo isset($_SESSION["error"]["registro_fallo"]) ? "<div>".$_SESSION["error"]["registro_fallo"]."</div>":"";?>
    <?php echo isset($_SESSION["registro_completo"]) ? "<div>".$_SESSION["registro_completo"]."</div>":"";?>
    
    <label class="labelregistro labelLogin" for="nombre">Nombre</label>
    <input  class="inputregistro inputLogin" type="text" name="nombre">
    <?php echo isset($_SESSION["error"]["nombre"]) ? "<div>".$_SESSION["error"]["nombre"]."</div>":"";?>
    
    <label class="labelregistro labelLogin" for="apellido">Apellido</label>
    <input class="inputregistro inputLogin" type="text" name="apellido">
    <?php echo isset($_SESSION["error"]["apellido"]) ? "<div>".$_SESSION["error"]["apellido"]."</div>":"";?>

    <label class="labelregistro labelLogin" for="Correo">Correo</label>
    <input class="inputregistro inputLogin" type="email" name="correo">
    <?php echo isset($_SESSION["error"]["correo"]) ? "<div>".$_SESSION["error"]["correo"]."</div>":"";?>

    <label  class="labelregistro labelLogin" for="pasword">Contraseña</label>
    <input  class="inputregistro inputLogin"  type="password" name="password">

    <label  class="labelregistro labelLogin" for="RegiistroOpcion">Tipo de registro</label>
    <select  class="RegistroOpcion inputLogin"  name ="RegistroOpcion">
        <option>Usuario</option>
        <option>Administrador</option>
    </select>

    <input class="RegistroCodigo inputLogin"  type="number" name="RegistroCodigo" placeholder="Codigo de administrador">
    <?php echo isset($_SESSION["error"]["codigo"]) ? "<div>".$_SESSION["error"]["codigo"]."</div>":"";?>
    <input  type="submit" value="Registrar">

    </form>
  </div>
   <script src="/exchangecity/PROYECTOSENA/js/index.js"></script> 
  </section>
  
  <!--limpiamos los flotados del aside -->
  <div style="clear: both"></div>
   
 
   <?php 
  include_once "/wamp64/www/exchangecity/proyectoSena/Includes/footer.php"
  
  ?>