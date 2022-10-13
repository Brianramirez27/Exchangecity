<?php 
if(isset($_SESSION["usuario"])):?>
<div class="acount">
      <a href="/exchangecity/proyectoSena/Includes/datosusuario.php">Datos Personales</a>
      <a href="/exchangecity/proyectoSena/Includes/publicarProducto.php">Crear Publicacion</a>
      <a href="/exchangecity/proyectoSena/Includes/misPublicaciones.php">Mis publicaciones</a>
      <?php $pubUsu= ConsultarPublicacionesUsuario($db,$_SESSION["login_correcto"]["usu_codigo"]);
        $usuPub=mysqli_fetch_assoc($pubUsu);
        $intercambios_activos=IntercambioUsuarioProveedor($db,$_SESSION["login_correcto"]["usu_codigo"])   
      ?>
      <?php if($usuPub & !isset($intercambios_activos)): ?>
      <a href="/exchangecity/proyectoSena/Includes/intercambio/crearIntercambio.php">Intercambio</a>
      <?php endif;?>
      
      <?php if(isset($_SESSION["intercambio_creado"])): ?>
        <a href="/exchangecity/proyectoSena/Includes/intercambio/2Intercambio.php">Intercambio en procesos</a>
      <?php endif;?>
    </div>
<script src="/exchangecity/PROYECTOSENA/js/acount.js"></script>
<?php endif;?>


<?php 
if(isset($_SESSION["usuario_administrador"])):?>
<div class="acount">
      <a href="/exchangecity/proyectoSena/Includes/administrador/crudUsuarios">Datos Usuarios</a>
      <a href="/exchangecity/proyectoSena/Includes/administrador/crudPublicacion.php">Datos Publicaciones</a>
      <a href="/exchangecity/proyectoSena/Includes/administrador/crudVerificado.php">Verificicacion</a>
      <a href="/exchangecity/proyectoSena/Includes/administrador/crudAdministrador.php">Administradores</a>
    </div>




<script src="/exchangecity/PROYECTOSENA/js/acount.js"></script>
<?php endif;?>