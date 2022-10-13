<?php
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/header.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/menulateral.php";
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/masFunciones.php";
$inter=$_REQUEST["int_codigo"];
?>

<section id="container">
  <div class="titulo">
    <h1>Segundo Intercambio</h1>
  </div>
  <h2 class="eliminado" ><?php echo isset($_SESSION["intercambio_creado_mensaje"]) ?$_SESSION["intercambio_creado_mensaje"]:"";?></h2>
  <section>
    <form class="publicarProductos" action="/exchangecity/PROYECTOSENA/backend/intercambio/intercambioDirec.php" enctype="multipart/form-data" method="POST">
      <label class="label" for="imagen1Dirreccion">Direccion de usuario implicado</label>
      <input class="img inputPublicar inputLogin" type="file" name="imagen1Dirreccion">
      <input class=" buttomProducto actualizarDatos" type="submit" value="Enviar">
      <a  href="/exchangecity/proyectoSena/Includes/datosusuario.php?inte_codigo=<?php echo $inter?>" class="Eliminar actualizarDatos">eliminar</a>  
        
    </form>


    <?php include_once "/wamp64/www/Exchangecity/proyectoSena/Includes/acount.php" ?>
  </section>
</section>
<!--limpiamos los flotados del aside -->
<div style="clear: both"></div>


<?php
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/footer.php"
?>

<?php
  unset($_SESSION["usuario_not_existe"]);
  unset($_SESSION["propietario_not_existe"]);
  unset($_SESSION["intercambio_creado_mensaje"]);
?>