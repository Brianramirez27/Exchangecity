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
      <a href="/exchangecity/proyectoSena/Includes/administrador/crudUsuarios">Datos Usuarios</a>
      <a href="/exchangecity/proyectoSena/Includes/administrador/crudPublicacion.php">Datos Publicaciones</a>
      <a href="/exchangecity/proyectoSena/Includes/administrador/crudVerificado.php">Verificicacion</a>
      <a href="/exchangecity/proyectoSena/Includes/administrador/crudAdministrador.php">Administradores</a>


     
    </div>
<script src="/exchangecity/PROYECTOSENA/js/acount.js"></script>
<?php endif;?>