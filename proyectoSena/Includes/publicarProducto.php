<?php 
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/header.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/menulateral.php";

?>
 
 <link rel="stylesheet" href="/exchangecity/proyectoSena/css/publicarProductos.css">
 <!--contenido de la pagina o aside-->
  <section id="container">
    
    <section>
    <div class="titulo">
            <h1>Publicar Producto</h1>
        </div>
        <section>
        <form class="publicarProductos" action="/exchangecity/PROYECTOSENA/backend/productoPublicar"  method="POST">
                <label for="nombreProducto">Nombre Producto</label>
                <input type="text" name="nombreProducto">
                <label for="descripcion">Descripcion del producto</label>
                <textarea name="descripcion"></textarea>
                <label for="estado"> Estado del producto</label>
                <select name="estado">
                    <option>Nuevo</option>
                    <option>usuado</option>
                </select>
                <label for="fotoPrincipal">Foto Principal</label>
                <input type="file" name="fotoPrincipal">
                <label for="masFotos">Mas Fotos Del Producto</label>
                <input type="file" name="fotoPrincipal">
                <input  class="buttomProducto" type="submit" value="Publicar">
            </form>
            
    </section>
  </section>
  <!--limpiamos los flotados del aside -->
  <div style="clear: both"></div>

 
  <?php 
  include_once "/wamp64/www/exchangecity/proyectoSena/Includes/footer.php"
  
  ?>