<?php
include('../conexion.php');

if(isset($_POST['Guardar'])){


    $nombre = $_POST['nombre'];
    $apellido=$_POST['apellido'];
    $numero=$_POST['numero'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $fecha = $_POST['fecha'];
    $Estado = $_POST['Estado'];
    $descripcion = $_POST['descripcion'];


{
         $query = "INSERT INTO publicaciones(imagen,nombre, apellido, numero,correo,direccion,fecha,Estado,descripcion) values('$imagen','$nombre','$apellido','$numero','$correo','$direccion','$fecha','$Estado','$descripcion')";
         $resultado = mysqli_query($conexion,$query);


         if($resultado){
             
              echo '<script>
              alert("Publicacion Creada con exito");
              window.location= "../Publicaciones.php"
              </script>';
         }else{
            echo '<script>
            alert("Ocurio un error");
            window.location= "../Publicaciones.php"
            </script>';
         }
       }
    }



?>