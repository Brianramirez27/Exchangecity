<?php 
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/header.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/menulateral.php";
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/masFunciones.php";

?>
 

 <!--contenido de la pagina o aside-->
  <section id="container">
    
    <section>
    <div class="titulo">
            <h1>Publicar Producto</h1>
        </div>
        <section>
        <form class="publicarProductos" action="/exchangecity/PROYECTOSENA/backend/productoPublicar.php" enctype="multipart/form-data" method="POST">
                <label for="tituloPublicacionv">Titulo Publicacion</label>
                <?php echo isset ($_SESSION["noVerificado"]) ? $_SESSION["noVerificado"]:""; ?>
                <input  class="inputPublicar inputLogin" type="text" name="tituloPublicacion">
                <label for="descripcion">Descripcion de la Publicacion</label>
                <textarea class="inputPublicar inputLogin" name="descripcion"></textarea>
                <label for="intereses">intereses de intercambio</label>
                <textarea class="inputPublicar inputLogin" name="intereses"></textarea>
                <?php $categorias=ConsultarCategoria($db) ?>
                <label for="categoriaId">Categorias</label>
                <?php echo isset ($_SESSION["error_Categoria"]) ? $_SESSION["error_Categoria"]:""; ?>
                <select name="categoriaId">
                    <option selected="selected" disabled="diseabled" >Seleccionar</option>
                  <?php while($categoria=mysqli_fetch_assoc($categorias)): ?>                   
                    <option><?php echo $categoria["cat_tipo"];?></option>
                    
                    <?php endwhile;?>   
                </select>
                <label for="estado"> Estado del producto</label>
                <?php echo isset ($_SESSION["error_Estado"]) ? $_SESSION["error_Estado"]:""; ?>
                <?php $estados=ConsultarEstado($db);
                 ?>
                <select name="estado">
                <option selected="selected" disabled="diseabled" >Seleccionar</option>
                    <?php while($estado=mysqli_fetch_assoc($estados)):?>
                      <option><?php echo $estado["est_nombre"];?></option> 
                    <?php endwhile; ?>
                </select>
                <label for="fotoPrincipal">Foto Principal</label>
                <?php echo isset ($_SESSION["errorImagen"]) ? $_SESSION["errorImagen"]:""; ?>
                <input class="inputPublicar inputLogin" type="file" name="fotoPrincipal">
                <label for="imagen1">Imagen 1</label>
                <input class="inputPublicar inputLogin" type="file" name="imagen1">
                <label for="imagen2">Imagen 2</label>
                <input class="inputPublicar inputLogin" type="file" name="imagen2">
                <label for="imagen3">Imagen 3</label>
                <input class="inputPublicar inputLogin" type="file" name="imagen3">
                <label for="imagen4">Imagen 4</label>
                <input class="inputPublicar inputLogin" type="file" name="imagen4">
                <input  class="buttomProducto actualizarDatos" type="submit" value="Publicar">
            </form>
            <?php include_once "/wamp64/www/Exchangecity/proyectoSena/Includes/acount.php" ?> 
    </section>
  </section>
 
  <!--limpiamos los flotados del aside -->
  <div style="clear: both"></div>
  
  <?php 
  include_once "/wamp64/www/exchangecity/proyectoSena/Includes/footer.php"
  
  ?>

 
  