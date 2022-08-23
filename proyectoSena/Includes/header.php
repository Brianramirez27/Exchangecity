<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/PROYECTOSENA/css/estilos_contenido.css">
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
      <h1>Exchange City</h1>
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
    <form class="login" action="/PROYECTOSENA/backend/login.php" method="post">
        <h3>Iniciar Seccion</h3> 
        <label class="labelLogin" for="correo">Correo</label>
        <input  class="inputLogin" type="email" name="correo">
        <label class="labelLogin" for="pasword">Contraseña</label>
        <input class="inputLogin" type="password" name="password">
        <input type="submit" value="Iniciar Secion">
    </form>
    <form  class="registro login"action="/PROYECTOSENA/backend/loginRegistro.php" method="post">
      <h3>Registro</h3>
      <label class="labelLogin" for="nombre">nombre</label>
      <input  class="inputLogin" type="text" name="nombre">
      
      <label class="labelLogin" for="apellido">apellido</label>
      <input class="inputLogin" type="text" name="apellido">

      <label class="labelLogin" for="Correo">correo</label>
      <input class="inputLogin" type="email" name="correo">

      <label class="labelLogin" for="pasword">Contraseña</label>
      <input class="inputLogin" type="password" name="password">
      <input  type="submit" value="Registrar">
      
    </form>
    <div class="registro">
      
    </div>
  </div> 
  <script src="/PROYECTOSENA/js/index.js"></script>