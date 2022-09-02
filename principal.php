<?php
    include "conexion.php";
        session_start();
            if (!isset($_SESSION['valor1'])){
                 header("Location:index.php");
                exit();
    }
    else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
    <script src="https://kit.fontawesome.com/9acc805954.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <title>index</title>
</head>
    <body>  
        <div class="container"> 
            <table class="total">
                <tr>
                    <td>
                    <h2>Datos personales</h2>
                    </td>
                    <td class="user">
                        <?php
                            echo  $_SESSION['usuario'];
                        ?>
                       <button><a href="salir.php">Salir</a></button>
                    </td>
                </tr>
            </table>
    
        <form action="guardar.php" method="POST" enctype="multipart/form-data">
            <table class="table table-bordered">
                <tr>
                    <td>Cedula:</td>
                    <td><input type="text" name="cedula"></td>
                </tr>
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><input type="text" name="apellido"></td>
                </tr>
                <tr>
                    <td>Direccion:</td>
                    <td><input type="text" name="direccion"></td>
                </tr>
                <tr>
                    <td>Telefono:</td>
                    <td><input type="text" name="telefono"></td>
                </tr>
                <tr>
                    <td>Edad:</td>
                    <td><input type="text" name="edad"></td>
                </tr>
                <tr>
                    <td>Fecha:</td>
                    <td><input type="date" name="fecha_nacimiento"></td>
                </tr>
                <tr>
                    <td>Foto</td>
                    <td> <input type="file" name="file" > </td>
                </tr>
            </table>
            <input type="submit" value="Guardar" class="sub">
            <input type="reset" value="Borrar">
            <button><a href="consulta.php" class="none">Consultar</a></button>
        </form>
        </div>
    </body>
</html>
<?php
}
?>