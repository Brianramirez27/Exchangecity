<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exchangecity/PROYECTOSENA/css/index.css">
    <link rel="stylesheet" href="/exchangecity/PROYECTOSENA/css/publicarProductos.css">
    <link rel="stylesheet" href="/exchangecity/PROYECTOSENA/css/editarPublicacion.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Contenido</title>
</head>

<body>
    <!--header-->
    <header id="header">
        <div class="logo">
            <a href="/PROYECTOSENA/index.php">
                <span class="material-symbols-outlined iconoLogo">
                    compare_arrows
                </span>
            </a>
            <h1>Exchange City</h1>
        </div>
        <div class="iniciarSeccion">
            <input class="buscador" type="text" value="Buscar" />
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
            <input class="inputLogin" type="email" name="correo">

            <label class="labelLogin" for="pasword">Contraseña</label>
            <input class="inputLogin" type="password" name="pasword">

            <input type="submit" value="Iniciar Secion">
        </div>
        <div class="registro login">
            <h3>Registro</h3>
            <label class="labelLogin" for="nombre">nombre</label>
            <input class="inputLogin" type="text" name="nombre">

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
        <div class="tituloPublicados">
            <h1>Productos Publicados</h1>
        </div>
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
        <form class="publicarProductos" action="/PROYECTOSENA/backend/publicacionEditar.php" method="POST">
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
        <script src="/PROYECTOSENA/js/editarPublicacion.js"></script>
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