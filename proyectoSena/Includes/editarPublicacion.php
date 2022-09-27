<?php 
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/header.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/menulateral.php";
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/masFunciones.php";

?>
 

 <!--contenido de la pagina o aside-->
  <section id="container">
    <div class="titulo">
      <h1>Editar Publicacion</h1>
    </div>
    <section>
        <?php $detallesPublicacion=ConsultarDescripcionPublicacion($db,$_REQUEST["pub_codigo"]);
            $infoPublicacion=mysqli_fetch_assoc($detallesPublicacion);
        ?>
    <form class="publicarProductos" action="/exchangecity/PROYECTOSENA/backend/publicacionEditar.php?pub_codigo=<?php echo $_REQUEST["pub_codigo"];?>" enctype="multipart/form-data" method="POST">
                <label for="tituloPublicacionv">titulo</label>
                <input  class="inputPublicar inputLogin" type="text" name="tituloPublicacion" value="<?php echo $infoPublicacion["pub_titulo"] ?>">
                <label for="descripcion">Descripcion de la Publicacion</label>
                <textarea class="inputPublicar inputLogin" name="descripcion" ><?php echo $infoPublicacion["pub_descripcion"]?></textarea>
                <label for="intereses">intereses de intercambio</label>
                <textarea class="inputPublicar inputLogin" name="intereses"><?php echo $infoPublicacion["pub_intereses"]?></textarea>
                <?php $categorias=ConsultarCategoria($db) ?>
                <label for="categoriaId">Categorias</label>
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
                <div class="conten_img_editar">
                <div class="archivo_img">
                <label class="label"  for="fotoPrincipal">Foto Principal</label>
                <input class="img inputPublicar inputLogin" type="file" id="fotoPrincipal">
                <img class="img_editar" src="data:image/JPG;base64,<?php echo base64_encode($infoPublicacion["pub_img_general"]);?>" />
                </div>
                <div class="archivo_img">
                <label  class="label" for="imagen1">Imagen 1</label>
                <input class="img inputPublicar inputLogin" type="file" id="imagen1">
                <img class="img_editar" src="data:image/JPG;base64,<?php echo base64_encode($infoPublicacion["pub_img1"]);?>" />
                </div>
                <div class="archivo_img">
                <label class="label"  for="imagen2">Imagen 2</label>
                <input class="img inputPublicar inputLogin" type="file" id="imagen2">
                <img class="img_editar" src="data:image/JPG;base64,<?php echo base64_encode($infoPublicacion["pub_img2"]);?>" />
                </div>
                <div class="archivo_img">
                <label class="label"  for="imagen3">Imagen 3</label>
                <input class="img inputPublicar inputLogin" type="file" id="imagen3">
                <img class="img_editar" src="data:image/JPG;base64,<?php echo base64_encode($infoPublicacion["pub_img3"]);?>" />
                </div>
                <div class="archivo_img">
                <label class="img label"  for="imagen4">Imagen 4</label>
                <input class="img inputPublicar inputLogin" type="file" id="imagen4">
                <img class="img_editar" src="data:image/JPG;base64,<?php echo base64_encode($infoPublicacion["pub_img4"]);?>" />
                </div>
            
                </div>
                <input  class="buttomProducto actualizarDatos" type="submit" value="Actualizar Publicacion">
                <a class="" href="#">Eliminar Publicacion</a>
            </form>
  <?php include_once "/wamp64/www/Exchangecity/proyectoSena/Includes/acount.php"?>
    </section>
  </section>

  



  <!--limpiamos los flotados del aside -->
  <div style="clear: both"></div>

 
  <?php 
  include_once "/wamp64/www/exchangecity/proyectoSena/Includes/footer.php"
  ?>