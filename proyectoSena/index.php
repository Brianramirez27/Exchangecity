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
    
      <div class="cars">
          <h3>Categoria</h3>
          <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/televisor.jfif" alt="">
          <div class="conterCars">
            <a href="/PROYECTOSENA/paginas/descricion.php"><h2>producto</h2></a>
            <p>especificacion del producto</p>
          </div>
      </div>
      <div class="cars">
          <h3>Categoria</h3>
          <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/televisor.jfif" alt="">
          <div class="conterCars">
            <a href="/PROYECTOSENA/paginas/descricion.php"><h2>producto</h2></a>
            <p>especificacion del producto</p>
          </div>
      </div>
      <div class="cars">
          <h3>Categoria</h3>
          <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/televisor.jfif" alt="">
          <div class="conterCars">
            <a href="/PROYECTOSENA/paginas/descricion.php"><h2>producto</h2></a>
            <p>especificacion del producto</p>
          </div>
      </div>
      <div class="cars">
          <h3>Categoria</h3>
          <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/televisor.jfif" alt="">
          <div class="conterCars">
            <a href="/PROYECTOSENA/paginas/descricion.php"><h2>producto</h2></a>
            <p>especificacion del producto</p>
          </div>
      </div>
      <div class="cars">
          <h3>Categoria</h3>
          <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/televisor.jfif" alt="">
          <div class="conterCars">
            <a href="/PROYECTOSENA/paginas/descricion.php"><h2>producto</h2></a>
            <p>especificacion del producto</p>
          </div>
      </div>
      <div class="cars">
          <h3>Categoria</h3>
          <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/televisor.jfif" alt="">
          <div class="conterCars">
            <a href="/PROYECTOSENA/paginas/descricion.php"><h2>producto</h2></a>
            <p>especificacion del producto</p>
          </div>
      </div>
      <div class="cars">
          <h3>Categoria</h3>
          <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/televisor.jfif" alt="">
          <div class="conterCars">
            <a href="/PROYECTOSENA/paginas/descricion.php"><h2>producto</h2></a>
            <p>especificacion del producto</p>
          </div>
      </div>
      <div class="cars">
          <h3>Categoria</h3>
          <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/televisor.jfif" alt="">
          <div class="conterCars">
            <a href="/PROYECTOSENA/paginas/descricion.php"><h2>producto</h2></a>
            <p>especificacion del producto</p>
          </div>
      </div>
      <div class="cars">
          <h3>Categoria</h3>
          <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/televisor.jfif" alt="">
          <div class="conterCars">
            <a href="/PROYECTOSENA/paginas/descricion.php"><h2>producto</h2></a>
            <p>especificacion del producto</p>
          </div>
      </div>
      <div class="cars">
          <h3>Categoria</h3>
          <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/televisor.jfif" alt="">
          <div class="conterCars">
            <a href="/PROYECTOSENA/paginas/descricion.php"><h2>producto</h2></a>
            <p>especificacion del producto</p>
          </div>
      </div>
      <div class="cars">
          <h3>Categoria</h3>
          <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/televisor.jfif" alt="">
          <div class="conterCars">
            <a href="/PROYECTOSENA/paginas/descricion.php"><h2>producto</h2></a>
            <p>especificacion del producto</p>
          </div>
      </div>
      <div class="cars">
          <h3>Categoria</h3>
          <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/televisor.jfif" alt="">
          <div class="conterCars">
            <a href="/PROYECTOSENA/paginas/descricion.php"><h2>producto</h2></a>
            <p>especificacion del producto</p>
          </div>
      </div>
      <div class="cars">
          <h3>Categoria</h3>
          <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/televisor.jfif" alt="">
          <div class="conterCars">
            <a href="/PROYECTOSENA/paginas/descricion.php"><h2>producto</h2></a>
            <p>especificacion del producto</p>
          </div>
      </div>
      <div class="cars">
          <h3>Categoria</h3>
          <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/televisor.jfif" alt="">
          <div class="conterCars">
            <a href="/PROYECTOSENA/paginas/descricion.php"><h2>producto</h2></a>
            <p>especificacion del producto</p>
          </div>
      </div>
      
      <?php  isset($_SESSION["error"]["nombre"]) ? "<div class='prueba'>".$_SESSION["error"]["nombre"]."</div>":"";?>
      <!-- paginacion -->
      <div class="contenidoPaginacion">
        <div class="paginas">
          <a class="pagi index" href="/PROYECTOSENA/index.php">Pagina Inicio ...</a>
          <a class="pagi" href="/PROYECTOSENA/paginacion/paginacion1.php">1</a>
          <a class="pagi" href="/PROYECTOSENA/paginacion/paginacion2.php">2</a>
          <a class="pagi" href="/PROYECTOSENA/paginacion/paginacion3.php">3</a>
          <a class="pagi" href="/PROYECTOSENA/paginacion/paginacion4.php">4</a>
          <a class="pagi"href="/PROYECTOSENA/paginacion/paginacion5.php">5</a>
      </div>
    </div>
    </section>
  </section>
  <!--limpiamos los flotados del aside -->
  <div style="clear: both"></div>

 ;
  <?php 
  include_once "/wamp64/www/exchangecity/proyectoSena/Includes/footer.php"
  
  ?>