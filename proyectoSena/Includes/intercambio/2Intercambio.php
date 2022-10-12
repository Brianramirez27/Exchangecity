<?php
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/header.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/menulateral.php";
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/masFunciones.php";

?>

<section id="container">
  <div class="titulo">
    <h1>Segundo Intercambio</h1>
  </div>
  <section>
    <form class="publicarProductos" action="/exchangecity/PROYECTOSENA/backend/intercambio/crearIntercambio.php" enctype="multipart/form-data" method="POST">
      <label class="label" for="imagen1">Imagen 1</label>
      <input class="img inputPublicar inputLogin" type="file" name="imagen1">
      <input class=" buttomProducto actualizarDatos" type="submit" value="Enviar">
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
?>