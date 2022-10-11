<?php
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/header.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/menulateral.php";
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/masFunciones.php";

?>


<!--contenido de la pagina o aside-->
<section id="container">
  <div class="titulo">
    <h1>Crear Intercambio</h1>
  </div>
  <section>
    <form class="publicarProductos" action="/exchangecity/PROYECTOSENA/backend/intercambio/crearIntercambio.php" enctype="multipart/form-data" method="POST">
      <label class="label" for="cod_propietario">codigo Propietario Publicacion</label>
      <input class="img inputPublicar inputLogin" type="text" name="cod_propietario" >
      <label class="label" for="cod_usuario">codigo usuario Implicado</label>
      <input class="img inputPublicar inputLogin" type="text" name="cod_usuario">
      <label class="label" for="imagen1">Imagen 1</label>
      <input class="img inputPublicar inputLogin" type="file" name="imagen1">
      <label class="label" for="imagen2">Imagen 2</label>
      <input class="img inputPublicar inputLogin" type="file" name="imagen2">
      <label class="label" for="imagen3">Imagen 3</label>
      <input class="img inputPublicar inputLogin" type="file" name="imagen3">
      <label class="img label" for="imagen4">Imagen 4</label>
      <input class="img inputPublicar inputLogin" type="file" name="imagen4">
      <input class=" buttomProducto actualizarDatos" type="submit" value="Crear Intercambio">
    </form>


    <?php include_once "/wamp64/www/Exchangecity/proyectoSena/Includes/acount.php" ?>
  </section>
</section>
<!--limpiamos los flotados del aside -->
<div style="clear: both"></div>


<?php
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/footer.php"
?>