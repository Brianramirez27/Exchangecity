<?php 

include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/conexionDB.php";
include_once "/wamp64/www/Exchangecity/proyectoSena/funciones/masFunciones.php";
echo $cod_usuario_implicado= isset($_POST["cod_usuario"]) ?$_POST["cod_usuario"] :false;
$cod_propietario= isset($_POST["cod_propietario"]) ?$_POST["cod_propietario"] :false;
$imagen1= isset($_FILES["imagen1"]["tmp_name"]) ? $_FILES["imagen1"]["tmp_name"]:false;
$imagen2 = isset($_FILES["imagen2"]["tmp_name"]) ? $_FILES["imagen2"]["tmp_name"]:false;
$imagen3 = isset($_FILES["imagen3"]["tmp_name"]) ? $_FILES["imagen3"]["tmp_name"]:false;
$imagen4 = isset($_FILES["imagen4"]["tmp_name"]) ? $_FILES["imagen4"]["tmp_name"]:false;

if($cod_usuario_implicado){
    
    $sql="SELECT * FROM datos_verificado WHERE FK_dat_codigo_du='$cod_usuario_implicado'";
    $existeUsuario=mysqli_query($db,$sql);
    
    if($existeUsuario){
        echo"el usaurio   existe";
    }else{
        echo mysqli_error($db);
        echo"el usaurio  no existe";
        $_SESSION["usuario_not_existe"]="el usuario no esta verificado debe encontrarse registrado";

}
}

// $imagenes=array();
// if($imagen1){
//     $nombre_img= $_FILES["imagen1"]["name"];
//     $tipo_img= $_FILES["imagen1"]["type"];
//     $tamaño_img= $_FILES["imagen1"]["size"];
//     // se lee la imagen que inserto el usuario y se guarda en variable
//         $leer_archivo= fopen($imagen1,"r");
//         // se convierte la imagen en bites
//         $conversion2=fread($leer_archivo,$tamaño_img);
//         //se quitan las barras invertidas para que deje insertar la im
//         $conversion2=addslashes($conversion2);

// $sql1="INSERT INTO Intercambio (int_codigo,int_detalle_intercambio_img,FK_dat_codigo_id_usu,FK_dat_codigo_id_pro)
// values(Null,'$conversion2',)";

// $insertar1=mysqli_query($db,$sql1);
// if($insertar1){
//     $imagenes+=1;
// }else{
//     // $error+=1;
//     echo"".mysqli_error($db);
// }

// }

// if(count($imagenes)>0){
//     echo"se inserto alguna imagen";
// }

// // imagen 2

// if($imagen2){
//     $nombre_img= $_FILES["imagen2"]["name"];
//     $tipo_img= $_FILES["imagen2"]["type"];
//     $tamaño_img= $_FILES["imagen2"]["size"];
//     // se lee la imagen que inserto el usuario y se guarda en variable
//         $leer_archivo= fopen($imagen2,"r");
//         // se convierte la imagen en bites
//         $conversion3=fread($leer_archivo,$tamaño_img);
//         //se quitan las barras invertidas para que deje insertar la im
//         $conversion3=addslashes($conversion3);

// $sql6="UPDATE publicacion SET
// pub_img2='$conversion3'
// WHERE pub_codigo='$pub_codigo'";
// $insertar6=mysqli_query($db,$sql6);
// if($insertar6){

// }else{
//     $error+=1;
//     echo"".mysqli_error($db);
// }
// }

// // imagen3
// if($imagen3){
//     $nombre_img= $_FILES["imagen3"]["name"];
//     $tipo_img= $_FILES["imagen3"]["type"];
//     $tamaño_img= $_FILES["imagen3"]["size"];
//     // se lee la imagen que inserto el usuario y se guarda en variable
//         $leer_archivo= fopen($imagen3,"r");
//         // se convierte la imagen en bites
//         $conversion4=fread($leer_archivo,$tamaño_img);
//         //se quitan las barras invertidas para que deje insertar la im
//         $conversion4=addslashes($conversion4);

// $sql7="UPDATE publicacion SET
// pub_img3='$conversion7'
// WHERE pub_codigo='$pub_codigo'";
// $insertar7=mysqli_query($db,$sql7);
// if($insertar7){

// }else{
//     $error+=1;
//     echo"".mysqli_error($db);
// }
// }
// // imagen 4
// if($imagen4){
//     $nombre_img= $_FILES["imagen4"]["name"];
//     $tipo_img= $_FILES["imagen4"]["type"];
//     $tamaño_img= $_FILES["imagen4"]["size"];
//     // se lee la imagen que inserto el usuario y se guarda en variable
//         $leer_archivo= fopen($imagen4,"r");
//         // se convierte la imagen en bites
//         $conversion5=fread($leer_archivo,$tamaño_img);
//         //se quitan las barras invertidas para que deje insertar la im
//         $conversion5=addslashes($conversion5);

// $sql8="UPDATE publicacion SET
// pub_4='$conversion8'
// WHERE pub_codigo='$pub_codigo'";
// $insertar8=mysqli_query($db,$sql8);
// if($insertar8){

// }else{
//     $error+=1;
//     echo"".mysqli_error($db);
// }
// }


?>