<?php 
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/header.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/menulateral.php";

?>

  

 <!--contenido de la pagina o aside-->
  <section id="container">
  <div class="titulo">
            <h1>Productos Publicados</h1>
        </div>
    <section>
        <div class="productoPublicado ">
            <div class="carsBottom">
                <div class="cars">
                    <h3>Categoria</h3>
                    <img src="/PROYECTOSENA/imagenes/conteiner/televisor.jfif" alt="">
                    <div class="conterCars">
                    <a href="/PROYECTOSENA/paginas/descricion.html"><h2>producto</h2></a>
                    <p>especificacion del producto</p>
                    </div>
                </div>
                <button class="editar">Editar</button>
            </div>
        </div>    
        <form class="editarPublicacion publicarProductos" action="/PROYECTOSENA/backend/publicacionEditar.php" method="POST">
            <div class="tituloPublicar">
                <h1>Actualiazar Producto</h1>
                <p class="cerrarPublicarProductos">x</p>
            </div>
           
            <label for="nombreProducto">Nombre Producto</label>
            <input type="text" name="nombreProducto">
            <label for="descripcion">Descicion del producto</label>
            <textarea name="descripcion"></textarea>
            <label for="esatdo"> Estado del producto</label>
            <select name="estado">
                <option>Nuevo</option>
                <option>usuado</option>
            </select>
            <label for="fotoPrincipal">Foto Principal</label>
            <input type="file" name="fotoPrincipal">
            <label for="masFotos">Mas Fotos Del Producto</label>
            <input type="file" name="fotoPrincipal">
            <input  class="buttomProducto" type="submit" value="editar">
            <input  class="buttomProducto" type="submit" value="Eliminar Publicacion">
        </form>
        <script src="/exchangecity/PROYECTOSENA/js/editarPublicacion.js"></script>
        <?php include_once "/wamp64/www/Exchangecity/proyectoSena/Includes/acount.php" ?>
    </section>
  </section>
  <!--limpiamos los flotados del aside -->
  <div style="clear: both"></div>

 
  <?php 
  include_once "/wamp64/www/exchangecity/proyectoSena/Includes/footer.php"
  
  ?>