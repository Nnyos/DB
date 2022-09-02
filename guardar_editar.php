<?php
include "conexion.php";
if($_POST['code']!=""){
    echo $_POST['code'];
    $guardar_edicion=mysqli_query($conexion,"UPDATE Registro SET 
    cedula='".$_POST['cedulae']."',
    nombre='".$_POST['nombree']."',
    apellido='".$_POST['direccione']."', 
    telefono='".$_POST['telefonoe']."',
    edad='".$_POST['edade']."',
    fecha_nacimiento='".$_POST['fecha_nacimientoe']."'WHERE id='".$_POST['code']."'");
     
      if($guardar_edicion){
       header("location:consulta.php");
      } else{
        echo "Error en Actualizar los registros";
      }
}

?>