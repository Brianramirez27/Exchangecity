<?php 
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/header.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/menulateral.php";
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/masFunciones.php";

?>

  

 <!--contenido de la pagina o aside-->
  <section id="container">
  <div class="titulo">
            <h1>Editar Publicaciones</h1>
        </div>
    <section>
        <?php  $datosPublicacion=ConsultarPublicacionesUsuario($db,$_SESSION["login_correcto"]["usu_codigo"]); ?>
        <?php  while($publicacionUsuario=mysqli_fetch_assoc($datosPublicacion)):?>
            <?php $categoriaPublicacion=ConsultarCategoriaPublicacion($db,$publicacionUsuario["FK_cat_codigo_pc"]) ;
                $nombreCategoria=mysqli_fetch_assoc($categoriaPublicacion); 
            ?>
                <div class="carsBottom">
                    <div class="cars">
                        <h3><?php echo $nombreCategoria["cat_tipo"];?></h3>
                        <img src="data:image/JPG;base64,<?php echo base64_encode($publicacionUsuario["pub_img_general"]);?>" />
                        <div class="conterCars">
                        <a href="/PROYECTOSENA/paginas/descricion.html"><h2>producto</h2></a>
                        <p><?php echo substr($publicacionUsuario["pub_descripcion"],0,30)."...";?></p>
                        <?php  $estadoPublicacion=ConsultarEstadoPublicacion($db,$publicacionUsuario["FK_est_codigo_pe"]);
                            $nombreEstado=mysqli_fetch_assoc($estadoPublicacion);
                        ?>
                        <p class="estado"><?php echo $nombreEstado["est_nombre"];?></p>
                        </div>
                    </div>
                    <button class="editar">Editar</button>
                </div>
         
                <form class="editarPublicacion  publicarProductos" action="/PROYECTOSENA/backend/publicacionEditar.php" method="POST">
                    <div class="tituloPublicar"> 
                        <h1>Actualiazar Producto</h1>
                        <p class="cerrarPublicarProductos">x</p>
                    </div>
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
                <label  class="label" for="imagen1">Imagen 1</label>
                <input class="inputPublicar inputLogin" type="file" id="imagen1">
                <label for="imagen2">Imagen 2</label>
                <input class="inputPublicar inputLogin" type="file" name="imagen2">
                <label for="imagen3">Imagen 3</label>
                <input class="inputPublicar inputLogin" type="file" name="imagen3">
                <label for="imagen4">Imagen 4</label>
                <input class="inputPublicar inputLogin" type="file" name="imagen4">
                <input  class="buttomProducto actualizarDatos" type="submit" value="Publicar">
                </form>
        <?php endwhile; ?> 
        <script src="/exchangecity/PROYECTOSENA/js/editarPublicacion.js"></script>
        <?php include_once "/wamp64/www/Exchangecity/proyectoSena/Includes/acount.php" ?>
    </section>
  </section>
  <!--limpiamos los flotados del aside -->
  <div style="clear: both"></div>

 
  <?php 
  include_once "/wamp64/www/exchangecity/proyectoSena/Includes/footer.php"
  
  ?>
