<?php 
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/header.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/menulateral.php";

?>
 

 <!--contenido de la pagina o aside-->
  <section id="container">
    
    <section>
    <div class="titulo">
            <h1>Publicar Producto</h1>
        </div>
        <section>
        <form class="publicarProductos" action="/exchangecity/PROYECTOSENA/backend/productoPublicar.php"  method="POST">
                <label for="tituloPublicacionv">Titulo Publicacion</label>
                <input  class="inputPublicar inputLogin" type="text" name="tituloPublicacion">
                <label for="descripcion">Descripcion de la Publicacion</label>
                <textarea class="inputPublicar inputLogin" name="descripcion"></textarea>
                <label for="estado"> Estado del producto</label>
                <select name="estado">
                    <option>Nuevo</option>
                    <option>usuado</option>
                </select>
                <label for="fotoPrincipal">Foto Principal</label>
                <input class="inputPublicar inputLogin" type="file" name="fotoPrincipal">
                <label for="masFotos">Mas Fotos De la Publicacion</label>
                <input class="inputPublicar inputLogin" type="file" name="masFotos">
                <input  class="buttomProducto" type="submit" value="Publicar">
            </form>
            <?php include_once "/wamp64/www/Exchangecity/proyectoSena/Includes/acount.php" ?> 
    </section>
  </section>
  <!--limpiamos los flotados del aside -->
  <div style="clear: both"></div>

 
  <?php 
  include_once "/wamp64/www/exchangecity/proyectoSena/Includes/footer.php"
  
  ?>