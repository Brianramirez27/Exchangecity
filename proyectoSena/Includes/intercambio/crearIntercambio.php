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
  <h2 class="eliminado" ><?php echo isset($_SESSION["intercambio_creado"]) ?$_SESSION["intercambio_creado"]:"";?></h2>
  <h2 class="eliminado" ><?php echo isset($_SESSION["intercambio_not_creado"]) ?$_SESSION["intercambio_not_creado"]:"";?></h2>
  <section>
    <form class="publicarProductos" action="/exchangecity/PROYECTOSENA/backend/intercambio/crearIntercambio.php" enctype="multipart/form-data" method="POST">
      <label class="label" for="cod_propietario">codigo Propietario Publicacion</label>
      <input class="img inputPublicar inputLogin" type="text" name="cod_propietario" >
      <?php echo isset($_SESSION["propietario_not_existe"]) ? $_SESSION["propietario_not_existe"]:""; ?>
      <label class="label" for="cod_usuario">codigo usuario Implicado</label>
      <input class="img inputPublicar inputLogin" type="text" name="cod_usuario">
      <?php echo isset($_SESSION["usuario_not_existe"]) ? $_SESSION["usuario_not_existe"]:""; ?>
      <?php echo isset($_SESSION["errorImagen"]) ?$_SESSION["errorImagen"]:""; ?>
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

<?php
  unset($_SESSION["usuario_not_existe"]);
  unset($_SESSION["propietario_not_existe"]);
?>