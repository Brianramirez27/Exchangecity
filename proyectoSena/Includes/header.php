<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/exchangecity/PROYECTOSENA/css/index.css">
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
   
    <form class="login" action="/exchangecity/PROYECTOSENA/backend/login.php" method="post">
        <h3>Iniciar Seccion</h3> 
        <label class="labelLogin" for="correo">Correo</label>
        <input  class="inputLogin" type="email" name="correo">
        <label class="labelLogin" for="pasword">Contraseña</label>
        <input class="inputLogin" type="password" name="password">
        <input type="submit" value="Iniciar Secion">
    </form>
    <form  class="registro login"action="/exchangecity/PROYECTOSENA/backend/Registro.php" method="post">
   
      <h3>Registro</h3>
      <?php echo isset($_SESSION["error"]["registro_fallo"]) ? "<div>".$_SESSION["error"]["registro_fallo"]."</div>":"";?>
      <?php echo isset($_SESSION["registro_completo"]) ? "<div>".$_SESSION["error"]["registro_completo"]."</div>":"";?>
     
      <label class="labelregistro labelLogin" for="nombre">Nombre</label>
      <input  class="inputregistro inputLogin" type="text" name="nombre">
      <?php echo isset($_SESSION["error"]["nombre"]) ? "<div>".$_SESSION["error"]["nombre"]."</div>":"";?>
      
      <label class="labelregistro labelLogin" for="apellido">Apellido</label>
      <input class="inputregistro inputLogin" type="text" name="apellido">
      <?php echo isset($_SESSION["error"]["apellido"]) ? "<div>".$_SESSION["error"]["apellido"]."</div>":"";?>

      <label class="labelregistro labelLogin" for="Correo">Correo</label>
      <input class="inputregistro inputLogin" type="email" name="correo">
      <?php echo isset($_SESSION["error"]["correo"]) ? "<div>".$_SESSION["error"]["correo"]."</div>":"";?>

      <label  class="labelregistro labelLogin" for="pasword">Contraseña</label>
      <input  class="inputregistro inputLogin"  type="password" name="password">
      <?php echo isset($_SESSION["error"]["contraseña"]) ? "<div>".$_SESSION["error"]["contraseña"]."</div>":"";?>

      <label  class="labelregistro labelLogin" for="RegiistroOpcion">Tipo de registro</label>
      <select  class="RegistroOpcion inputLogin"  name ="RegistroOpcion">
        <option>Usuario</option>
        <option>Administrador</option>
      </select>

      <input class="RegistroCodigo inputLogin"  type="number" name="RegistroCodigo" placeholder="Codigo de administrador">
      <?php echo isset($_SESSION["error"]["codigo"]) ? "<div>".$_SESSION["error"]["codigo"]."</div>":"";?>
      <input  type="submit" value="Registrar">

    </form>
    
  </div> 
  <script src="/exchangecity/PROYECTOSENA/js/index.js"></script>
  <?php 
      unset($_SESSION["error"]);
  ?>
  <!-- <?php //echo isset($_SESSION["error"]["nombre"]) ? "<div>".$_SESSION["error"]["nombre"]."</div>":"";?> -->