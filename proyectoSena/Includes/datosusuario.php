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
    <section>
    <form action="">
      <div class="datosConjunto">
          <div class="datos">
              <div class="datoImagen">
                  <img src="/exchangecity/proyectoSena/imagenes/conteiner/ciudad.jpg" alt="foto"> 
                  <input type="file" placeholder="Foto de perfil">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed adipisci veritatis rerum consequuntur quibusdam magnam quaerat dolore possimus ex nihil architecto, corporis, labore molestias odio fugiat itaque rem, voluptas sit.</p>
              </div>
              <div class="datosGenerales">  
                <div class="datosPersonales">
                  <h1>Datos personales</h1>
                  <label class="labelDatos datosPreguntas">Nombres:</label>
                  <input class="inputDatos inputLogin"  value="<?php echo $_SESSION["login_correcto"]["usu_nombre"] ?>"></input>
                  <label class="labelDatos  datosPreguntas">Apellidos:</label>
                  <input class="inputDatos inputLogin" value="<?php echo $_SESSION["login_correcto"]["usu_apellido"] ?>"></input>
                  <label class="labelDatos  datosPreguntas">Correo Electronico</label>
                  <input class="inputDatos inputLogin" value="<?php echo $_SESSION["login_correcto"]["usu_correo"] ?>"></input>
                  <label class="labelDatos  datosPreguntas">Documento</label>
                  <input class="inputDatos inputLogin"  value="<?php echo $_SESSION["login_correcto"]["usu_documento"] ?>"></input>

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
                  <label class="labelDatos  datosPreguntas" >Ubicacion</label>
                  <!-- funcion creada para consultar la ciudades y sus opciones -->
                  <?php $ciudades=ConsultarCiudades($db); ?> 
                  <select class="inputDatos inputLogin"  value="<?php $_SESSION["login_correcto"]["FK_ciu_codigo_uc"]?>" >   
                  <?php while($ciudad=mysqli_fetch_assoc($ciudades)): ?>
                    <?php if($_SESSION["login_correcto"]["FK_ciu_codigo_uc"]==$ciudad["ciu_codigo"]):?>
                            <option selected="selected"  value="<?php $_SESSION["login_correcto"]["FK_ciu_codigo_uc"]?>"><?php echo  $ciudad["ciu_nombre"] ?></option>
                            <?php else:?>
                            <option ><?php echo $ciudad["ciu_nombre"]?></option> 
                    <?php endif; ?>    
                  <?php endwhile;?>               
                  </select>

                  <label class="labelDatos  datosPreguntas">whatsapp</label>  
                  <input class="inputDatos inputLogin" type="text" value="<?php echo $_SESSION["login_correcto"]["usu_contacto"] ?>"> 
                  <label class="labelDatos  datosPreguntas">red social</label> 
                  <input class="inputDatos inputLogin" type="text" value="<?php echo $_SESSION["login_correcto"]["usu_red_social"] ?>">
                  
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
 