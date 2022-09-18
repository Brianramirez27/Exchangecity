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
    <form action="">
      <div class="datosConjunto">
          <div class="datos">
              <div class="datoImagen">
                  <img src="/exchangecity/proyectoSena/imagenes/datosusuario/images.jfif" alt="foto"> 
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                      Ea in corporis, beatae iure a quia ullam maxime, non provident placeat saepe. 
                      Voluptas ad nobis tempora</p>
              </div>
              <div class="datosGenerales">  
                <div class="datosPersonales">
                  <h1>Datos personales</h1>
                  <label class="datosPreguntas">Nombres:</label>
                  <input class="inputLogin"  value="<?php echo $_SESSION["login_correcto"]["usu_nombre"] ?>"></input>
                  <label class="datosPreguntas">Apellidos:</label>
                  <input class="inputLogin" value="<?php echo $_SESSION["login_correcto"]["usu_apellido"] ?>"></input>
                  <label class="datosPreguntas">Correo Electronico</label>
                  <input value="<?php echo $_SESSION["login_correcto"]["usu_correo"] ?>"></input>
                  <label class="datosPreguntas">documento:</label>
                  <input class="datosRespuesta"  value="<?php echo $_SESSION["login_correcto"]["usu_documento"] ?>"></input>

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
                  <label class="datosPreguntas" >ubicacion:</label><br>
                  <!-- funcion creada para consultar la ciudades y sus opciones -->
                  <?php $ciudades=ConsultarCiudades($db); ?> 

                  <select name="" id="" value="<?php $_SESSION["login_correcto"]["FK_ciu_codigo_uc"]?>" >   
                  <?php while($ciudad=mysqli_fetch_assoc($ciudades)): ?>
                    <?php if($_SESSION["login_correcto"]["FK_ciu_codigo_uc"]==$ciudad["ciu_codigo"]):?>
                            <option selected="selected"  value="<?php $_SESSION["login_correcto"]["FK_ciu_codigo_uc"]?>"><?php echo  $ciudad["ciu_nombre"] ?></option>
                            <?php else:?>
                            <option ><?php echo $ciudad["ciu_nombre"]?></option> 
                    <?php endif; ?>    
                  <?php endwhile;?>               
                  </select>
                  <br> <br>

                  <label class="datosPreguntas" > Medios de contacto:</label><br>
                  <label>whatsapp</label> <br> 
                  <input type="text" value="<?php echo $_SESSION["login_correcto"]["usu_contacto"] ?>"> <br>
                  <label>red social</label> <br> 
                  <input type="text" value="<?php echo $_SESSION["login_correcto"]["usu_red_social"] ?>">
                  
                </div>
                      <input type="submit" value="Actualizar">        
          </div>
      </div>
    </form>
    
  </section>
  <?php
  include_once "/wamp64/www/exchangecity/proyectoSena/includes/footer.php";
  ?>
  <!--limpiamos los flotados del aside -->
  <div style="clear: both"></div>
 