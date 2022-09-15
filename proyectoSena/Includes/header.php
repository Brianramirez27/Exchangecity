
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/exchangecity/PROYECTOSENA/css/index.css">
  <link rel="stylesheet" href="/exchangecity/PROYECTOSENA/css/login.css">
  <link rel="stylesheet" href="/exchangecity/PROYECTOSENA/css/registro.css">
  <link rel="stylesheet" href="/exchangecity/proyectoSena/css//datosusuario.css">
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
      <?php  if(isset($_SESSION["login_correcto"])):?>
          <div>
              <h3>Bienvenido <?php echo $_SESSION["login_correcto"]["usu_nombre"] ." ".$_SESSION["login_correcto"]["usu_apellido"]?></h3>
          </div>
      <?php endif; ?>

      <?php if(!isset($_SESSION["login_correcto"])): ?> 
        <div class="registro_iniciar">
          <a class="inicioSesion" href="/exchangecity/proyectoSena/Includes/login.php">Login</a>
          <a  class="registroUsuario" href="/exchangecity/proyectoSena/Includes/registro.php">Registrarse</a>
        </div>
      <?php endif; ?>
    </div>
  </header>

  
  
  <?php 
  /*sesisones del registro */
      unset($_SESSION["error"]);
      unset($_SESSION["registro_completo"]);
      unset($_SESSION["registro_fallo"]);

  /*sesiones del login */
      unset($_SESSION["login_erroneo"]);
      unset($_SESSION["contrasena_erronea"]);
      unset($_SESSION["password"]);
      //unset($_SESSION["login_correcto"]);
  ?>



