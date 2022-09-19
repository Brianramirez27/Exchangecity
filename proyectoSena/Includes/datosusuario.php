<?php
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/header.php";
include_once "/wamp64/www/exchangecity/proyectoSena/Includes/menulateral.php";
include_once "/wamp64/www/exchangecity/proyectoSena/funciones/masFunciones.php";
?>
  <!--contenido de la pagina o aside-->

  <section id="container">
    <div class="titulo">
        <h1>Perfil de los datos</h1>
    </div>
    <section >
    <form class="formDatos"  action="/exchangecity/proyectoSena/backend/datosActualizar.php"  enctype="multipart/form-data" method="POST">
      <div class="datosConjunto">
          <div class="datos">
              <div class="datoImagen">
                  <img src="/exchangecity/proyectoSena/imagenes/conteiner/ciudad.jpg" alt="foto" > 
                  <input type="file" placeholder="Foto de perfil" name="imagenPerfil">
                  <textarea class="datosDes" name="descripcion" id="" cols="30" rows="10">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta placeat hic, natus eius,
                     sint amet esse repellat officiis facilis odit laudantium sed possimus! Minima asperiores voluptatum odio ullam! Minima, sint.</textarea>
                  
              </div>      
              <div class="datosGenerales">  
                <div class="datosPersonales">
                  <h1>Datos personales</h1>
                  <label class="labelDatos datosPreguntas" for="nombre">Nombres:</label>
                  <input class="inputDatos inputLogin" name="nombre"  value="<?php echo $_SESSION["login_correcto"]["usu_nombre"] ?>"></input>
                  <label class="labelDatos  datosPreguntas" for="apellido">Apellidos:</label>
                  <input class="inputDatos inputLogin" name="apellido" value="<?php echo $_SESSION["login_correcto"]["usu_apellido"] ?>"></input>
                  <label class="labelDatos  datosPreguntas" for="correo">Correo Electronico</label>
                  <input class="inputDatos inputLogin" name="correo" value="<?php echo $_SESSION["login_correcto"]["usu_correo"] ?>"></input>
                  <label class="labelDatos  datosPreguntas" for="documento">Documento</label>
                  <input class="inputDatos inputLogin" name="documento" value="<?php echo $_SESSION["login_correcto"]["usu_documento"] ?>"></input>

                </div>  
                <div class="datosPagina">
                  <h1>historial de la pagina</h1>
                  <label class="labelDatos  datosPreguntas">transacciones realizadas:</label>
                  <input class="inputDatos inputLogin" disabled="diseabled" value="5 transacciones realizadas"></input>
                  <label class="labelDatos  datosPreguntas">No Verificado/Verificado</label>
                  <input class="inputDatos inputLogin" disabled="diseabled"  value="Verificado" >  </input>
                </div>
                <div class="datosContacto">
                  <h1>Datos contacto</h1>
                  <label class="labelDatos  datosPreguntas" for="ciudad">Ubicacion</label>
                  <!-- funcion creada para consultar la ciudades y sus opciones -->
                  <?php $ciudades=ConsultarCiudades($db); ?> 
                  <select class="inputDatos inputLogin" name="ciudad" value="<?php $_SESSION["login_correcto"]["FK_ciu_codigo_uc"]?>" >   
                  <?php while($ciudad=mysqli_fetch_assoc($ciudades)): ?>
                    <?php if($_SESSION["login_correcto"]["FK_ciu_codigo_uc"]==$ciudad["ciu_codigo"]):?>
                            <option selected="selected"  value="<?php $_SESSION["login_correcto"]["FK_ciu_codigo_uc"]?>"><?php echo  $ciudad["ciu_nombre"] ?></option>
                            <?php else:?>
                            <option ><?php echo $ciudad["ciu_nombre"]?></option> 
                    <?php endif; ?>    
                  <?php endwhile;?>               
                  </select>

                  <label class="labelDatos  datosPreguntas" name="contacto" >whatsapp</label>  
                  <input class="inputDatos inputLogin" type="text" name="contacto" value="<?php echo $_SESSION["login_correcto"]["usu_contacto"] ?>"> 
                  <label class="labelDatos  datosPreguntas" for="redSocial" >red social</label> 
                  <input class="inputDatos inputLogin" type="text" name="redSocial" value="<?php echo $_SESSION["login_correcto"]["usu_red_social"] ?>">
                  
                </div>
                <div class="actualizarDatos">
                      <input class="actualizarDatos" type="submit" value="Actualizar">  
                </div>      
          </div>
      </div>
    </form>
    <?php include_once "/wamp64/www/Exchangecity/proyectoSena/Includes/acount.php" ?>
    </section>
  </section>
  <?php
  include_once "/wamp64/www/exchangecity/proyectoSena/includes/footer.php";
  ?>
  <!--limpiamos los flotados del aside -->
  <div style="clear: both"></div>
 