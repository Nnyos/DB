<?php
session_start();
session_destroy();
    if (isset($_SESSION['valor1'])){
    header("Location:index.php");
    }else
    {
    echo "Error en cerrar session!!";
        }
?>