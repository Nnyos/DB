<?php
    include "conexion.php";
    // mostrar si el ya existe nombre de usuario


    function repetir ($user, $conexion){
        $repetir = mysqli_query($conexion, "SELECT * FROM Registro WHERE nombre = '".$user."'");

        if (mysqli_num_rows($repetir) > 0){
            return true;
        }
        else{
            return false;
        }
     }

     // guardar los datos en la base de datos
    if (repetir($_POST['nombre'], 
    $conexion)){
        echo ("El alumno \"" .$_POST['nombre']. "\" ya esta registrado");
    }else{

    //  Guardar la imagen en la carpeta

     $foto = $_FILES['file']['name'];
     $tomar_foto = $_FILES['file']['tmp_name'];
     $carpeta = "fotos/";
     $ruta = $carpeta.$foto;
     move_uploaded_file($tomar_foto, $ruta);

     if($tomar_foto){
        
     }else {
        $ruta = "";
     }

    $guardar = mysqli_query($conexion, "INSERT INTO Registro VALUES(NULL,
     '".$_POST['cedula']."',
     '".$_POST['nombre']."',
     '".$_POST['apellido']."',
     '".$_POST['direccion']."',
     '".$_POST['telefono']."',
     '".$_POST['edad']."',
     '".$_POST['fecha_nacimiento']."',
     '".$ruta."')");

     echo ("Exito al guardar");
    }    
?>