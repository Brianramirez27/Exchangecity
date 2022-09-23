<?php 
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/header.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/menulateral.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/header.php";



?>



 
  <!--contenido de la pagina o aside-->
  <section id="container">
    <div class="titulo">
      <h1>Descricion del producto</h1>
    </div>
    <article>
        <div class="producto">
            <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/computador.jfif" alt="">
        </div>
        <div class="descricion">
            <h2>nombre producto</h2>
            <div class="valoracion">
                <div>
                    <p>valoraccion</p>
                    <span class="material-symbols-outlined">
                        star
                    </span>
                    <p> 3.6</p>
                </div>
                <div>
                    <p>Trasaciones completadas</p>
                    <span class="material-symbols-outlined">
                        sync_alt
                    </span>
                    <p> 3.6</p>
                </div>
                <div>
                    <p>verificado<p>
                    <span class="material-symbols-outlined">
                        done_outline
                    </span>
                    
                </div>
            </div>
            <div class="parrafo">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus perspiciatis optio nisi unde deleniti esse, labore, accusamus officiis dolore velit quo veniam repellat, ex ipsam nobis aspernatur aut praesentium. Eligendi.</p>
            </div>
            <div class=" info">
              <div>
                <h2>Ofreser Intercambio</h2>
              </div>
              <div class="infoButton">
                <button class="buttton whatsapp">Whatsapp</button>
                <button class="buttton facebook">Facebook</button>
                <button class="buttton telegram">Telegram</button>
              </div>
            </div>
        </div>  
    </article>
    <section class="fotos">
        <div class="galeria">
            <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/computador.jfif" alt="">
            <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/celular.jfif" alt="">
            <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/consola.jfif" alt="">
            <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/tableta.jfif" alt="">
            <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/computador.jfif" alt="">
            <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/televisor.jfif" alt="">
        </div>
        <div class="galeriaPrincipal">
            <div class="galeriaInterna">
                <img src="/exchangecity/PROYECTOSENA/imagenes/conteiner/consola.jfif" alt="" id="imagenActiva">
                <button class="btnCerrar">X</button>
                <!-- <button class="btnAtras">&Lt;</button>
                <button class="btnAdelante">&GT;</button> -->
            </div>
        </div>
        <script src="/exchangecity/PROYECTOSENA/js/descricion.js"></script>
    </section>
    </div>
    <section>
     <img src="" alt="">
    </section>
  </section>
  <!--limpiamos los flotados del aside -->
  <div style="clear: both"></div>
 

<?php
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/footer.php";
?>

