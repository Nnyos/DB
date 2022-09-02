<?php
    include "conexion.php";

    $usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario ='".$_POST['usuario']."' and password ='".$_POST['password']."'");

    $datos  = mysqli_num_rows($usuario);
    $resultado = mysqli_fetch_assoc($usuario);

    if ($datos > 0 ){
        session_start();
        $_SESSION['valor1']="activo";
        $_SESSION['usuario']=$resultado['usuario'];
        header("Location:principal.php");
    } else{
        echo "Usuario no registrado";
    }
?>