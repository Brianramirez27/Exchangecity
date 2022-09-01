<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/exchangecity/PROYECTOSENA/css/index.css">
   <link rel="stylesheet" href="/exchangecity/PROYECTOSENA/css/datosusuario.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <title>Contenido</title>
</head>

<body>
  <!--header-->
  <header id="header" >
    <div class="logo">
      <a href="/PROYECTOSENA/index.php">
        <span class="material-symbols-outlined iconoLogo">
          compare_arrows
        </span>
      </a>
      <h1>Exhange City</h1>
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
      <input class="inputLogin" type="password" name="pasword">

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
      <input  type="submit" value="Registrar">
    </div>
    
    <div class="registro">
      
    </div>
  </div> 
  <script src="/PROYECTOSENA/js/index.js"></script>
  <!-- Menu lateral -->
  <nav id="menu">
    <div class="icono">
      <a class="menuObjeto" href="/PROYECTOSENA/index.php">
        <img class="menuIcono" src="/PROYECTOSENA/imagenes/Navegacion/svg/house.svg" alt="inicio.svg">
        <span>Inicio</span>
      </a>
    </div>
    <div class="icono">
      <a class="menuObjeto" href="televisores.php">
        <img class="menuIcono" src="/PROYECTOSENA/imagenes/Navegacion/svg/tv.svg" alt="televisores.svg">
        <span>TV</span>
      </a>
    </div>
    <div class="icono">
      <a class="menuObjeto" href="movil.php">
        <img class="menuIcono" src="/PROYECTOSENA/imagenes/Navegacion/svg/smartphone.svg" alt="movil.svg">
        <span>Movil</span>
      </a>
    </div>
    <div class="icono">
      <a class="menuObjeto" href="computadoras.php">
        <img class="menuIcono" src="/PROYECTOSENA/imagenes/Navegacion/svg/pc.svg" alt="computadoras.svg">
        <span>PC</span>
      </a>
    </div>
    <div class="icono">
      <a class="menuObjeto" href="consolas.php">
        <img class="menuIcono" src="/PROYECTOSENA/imagenes/Navegacion/svg/console-controller.svg" alt="consolas.svg">
        <span> Consolas</span>
      </a>
    </div>
  </nav>
  <!--contenido de la pagina o aside-->
  <section id="container">
    <div class="titulo">
        <h1>Perfil de los datos</h1>
    </div>
    <div class="datosConjunto">
        <div class="datos">
            <div class="datoImagen">
                <img src="/proyectoSena/imagenes/datosusuario/images.jfif" alt="foto"> 
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Ea in corporis, beatae iure a quia ullam maxime, non provident placeat saepe. 
                    Voluptas ad nobis tempora</p>
            </div>
            <div class="datosGenerales">  
              <div class="datosPersonales">
                <h1>Datos personales</h1>
                <p class="datosPreguntas">Nombres:</p>
                <p class="datosRespuesta" >brayan mauricio</p>
                <p class="datosPreguntas">Apellidos:</p>
                <p class="datosRespuesta">ramirez dat</p>
                <P class="datosPreguntas">Correo Electronico</P>
                <p>dfhdshdsf@sdfsf.com</p>
              </div>  
              <div class="datosPagina">
                <h1>historial de la pagina</h1>
                <p class="datosPreguntas">transacciones realizadas:</p>
                <p>5 transacciones realizadas</p>
                <p class="datosPreguntas">No Verificado/Verificado</p>
                <p class="datosRespuesta"> Verificado </p>
              </div>
              <div class="datosContacto">
                <h1>Datos contacto</h1>
                <p class="datosPreguntas" >ubicacion:</p>
                <p class="datosRespuesta">colombia,bogota</p>
                <p class="datosPreguntas" > Medios de contacto:</p>
                <p>whatsapp</p>
                <p>Telegram</p>
                <p>Facebook</p>
              </div>
        </div>
    </div>
    
  </section>
  <!--limpiamos los flotados del aside -->
  <div style="clear: both"></div>
  <!--footer o contacto  -->
  <footer id="footer">
    <h1>Contacto</h1>
    <div class="imgContac">
      <a>
        <img src="/PROYECTOSENA/imagenes/footer/whatsapp-logo-variant-svgrepo-com.svg" alt="no sale imgen" />
      </a>
      <a>
        <img src="/PROYECTOSENA/imagenes/footer/envelope.svg" alt="no sale imgen" />
      </a>
      <a>
        <img src="/PROYECTOSENA/imagenes/footer/position-marker.svg" alt="no sale imagen" />
      </a href="">
      <a href="mailto:brayanramirez4546@gmail.com">
        <img src="/PROYECTOSENA/imagenes/footer/vibrating-smartphone.svg" alt="no sale imagen" />
      </a>
    </div>
    <div class="copy">
      &copy; exchance city 2022
    </div>
  </footer>
</body>
</html>