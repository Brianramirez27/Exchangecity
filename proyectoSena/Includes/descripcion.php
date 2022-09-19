<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/exchangecity/PROYECTOSENA/css/index.css">
  <link rel="stylesheet" href="/exchangecity/PROYECTOSENA/css/descripcion.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <title>Contenido</title>
</head>

<body>
  <!--header-->
  <header id="header" >
    <div class="logo">
      <a href="/exchangecity/PROYECTOSENA/index.php">
        <span class="material-symbols-outlined iconoLogo">
          compare_arrows
        </span>
      </a>
      <h1>Ecxhange City</h1>
    </div>
    <div class="iniciarSeccion">
      <input class="buscador" type="text" value="Buscar"/>  
      <button class="bottom" href="">
        <span class="material-symbols-outlined iconoLogin ">account_circle</span>
      </button>
    </div>
  </header>
  <!-- inicio de secion o login  -->
  <div class="acount ">
    <div class="login">
      <h3>Iniciar Secion</h3>
      <label class="labelLogin" for="Correo">Correo</label>
      <input  class="inputLogin" type="email" name="correo">

      <label class="labelLogin" for="pasword">Contraseña</label>
      <input  class="inputLogin" type="password" name="pasword">

      <input type="submit" value="Iniciar Secion">
    </div>
    <div class="registro login">
      <h3>Registro</h3>
      <label class="labelLogin" for="nombre">nombre</label>
      <input  class="inputLogin" type="text" name="nombre">

      <label class="labelLogin" for="apellido">apellido</label>
      <input class="inputLogin" type="text" name="apellido">

      <label class="labelLogin" for="Correo">correo</label>
      <input class="inputLogin" type="email" name="correo">

      <label class="labelLogin" for="pasword">Contraseña</label>
      <input class="inputLogin" type="password" name="pasword">
      <input type="submit" value="Registrar">
    </div>
    
    <div class="registro">
      
    </div>
  </div> 
  <script src="/exchangecity/PROYECTOSENA/js/index.js"></script>
  <!-- Menu lateral -->
  <nav id="menu">
    <div class="icono">
      <a class="menuObjeto" href="/exchangecity/PROYECTOSENA/index.php">
        <img class="menuIcono" src="/exchangecity/PROYECTOSENA/imagenes/Navegacion/svg/house.svg" alt="inicio.svg">
        <span>Inicio</span>
      </a>
    </div>
    <div class="icono">
      <a class="menuObjeto" href="televisores.php">
        <img class="menuIcono" src="/exchangecity/PROYECTOSENA/imagenes/Navegacion/svg/tv.svg" alt="televisores.svg">
        <span>TV</span>
      </a>
    </div>
    <div class="icono">
      <a class="menuObjeto" href="movil.php">
        <img class="menuIcono" src="/exchangecity/PROYECTOSENA/imagenes/Navegacion/svg/smartphone.svg" alt="movil.svg">
        <span>Movil</span>
      </a>
    </div>
    <div class="icono">
      <a class="menuObjeto" href="computadoras.php">
        <img class="menuIcono" src="/exchangecity/PROYECTOSENA/imagenes/Navegacion/svg/pc.svg" alt="computadoras.svg">
        <span>PC</span>
      </a>
    </div>
    <div class="icono">
      <a class="menuObjeto" href="consolas.php">
        <img class="menuIcono" src="/exchangecity/PROYECTOSENA/imagenes/Navegacion/svg/console-controller.svg" alt="consolas.svg">
        <span> Consolas</span>
      </a>
    </div>
  </nav>
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
  <!--footer o contacto  -->
  <footer id="footer">
    <h1>Contacto</h1>
    <div class="imgContac">
      <a>
        <img src="/exchangecity/PROYECTOSENA/imagenes/footer/whatsapp-logo-variant-svgrepo-com.svg" alt="no sale imgen" />
      </a>
      <a>
        <img src="/exchangecity/PROYECTOSENA/imagenes/footer/envelope.svg" alt="no sale imgen" />
      </a>
      <a>
        <img src="/exchangecity/PROYECTOSENA/imagenes/footer/position-marker.svg" alt="no sale imagen" />
      </a href="">
      <a href="mailto:brayanramirez4546@gmail.com">
        <img src="/exchangecity/PROYECTOSENA/imagenes/footer/vibrating-smartphone.svg" alt="no sale imagen" />
      </a>
    </div>
    <div class="copy">
      &copy; exchance city 2022
    </div>
  </footer>
</body>
</html>


