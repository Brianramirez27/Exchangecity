<?php 
if(isset($_SESSION["usuario"])):?>
<div class="acount">
      <a href="/exchangecity/proyectoSena/Includes/datosusuario.php">Datos Personales</a>
      <a href="/exchangecity/proyectoSena/Includes/publicarProducto.php">Crear Publicacion</a>
      <a href="/exchangecity/proyectoSena/Includes/misPublicaciones.php">Mis publicaciones</a>
      <a href="/exchangecity/proyectoSena/Includes/intercambio/crearIntercambio.php">Intercambio</a>
     
    </div>
<script src="/exchangecity/PROYECTOSENA/js/acount.js"></script>
<?php endif;?>

<?php 
if(isset($_SESSION["usuario_administrador"])):?>
<div class="acount">
      <a href="/exchangecity/proyectoSena/Includes/crudUsuarios">Datos Usuarios</a>
      <a href="/exchangecity/proyectoSena/Includes/crudPublicacion.php">Datos Publicaciones</a>
      <a href="/exchangecity/proyectoSena/Includes/crudVerificado.php">Verficicacion</a>
      <a href="/exchangecity/proyectoSena/Includes/crudAdministrador.php">Administradores</a>


     
    </div>
<script src="/exchangecity/PROYECTOSENA/js/acount.js"></script>
<?php endif;?>