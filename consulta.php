<?php
include "conexion.php";
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
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="animate-css/animate.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/9acc805954.js" crossorigin="anonymous"></script>
    <title>Consulta</title>
</head>
<body>
    <div class="container2">
    <?php
        $mostrar = mysqli_query($conexion, "SELECT * FROM Registro");
    ?>
    <form action="eliminar.php" method="POST">
    <table class="table table-bordered border-primary">
        <tr class="enca">
            <td>Número</td>
            <td>Cedula</td>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Direccion</td>
            <td>Telefono</td>
            <td>Edad</td>
            <td>Fecha de Nacimiento</td>
            <td>Foto</td>
            <td>Accion</td>
            
        </tr>
    <?php
    $i = 1;
        while ($datos = mysqli_fetch_array($mostrar)){
            
            echo "<tr> 
                <td>".$i."</td>
                <td>".$datos['cedula']."</td>
                <td>".$datos['nombre']."</td>
                <td>".$datos['apellido']."</td>
                <td>".$datos['direccion']."</td>
                <td>".$datos['telefono']."</td>
                <td>".$datos['edad']."</td>
                <td>".$datos['fecha_nacimiento']."</td>
                ";
                if($datos['foto'] == ""){
                    echo "<td><img src='fotos/defecto.jpg' width='50' height='50'></td>";
                }else{
                   echo "<td><img src = ".$datos['foto']." width = '50' height = '50'></td>";
                }
            echo "<td><input type='checkbox' name='elimi' value=".$datos['id']." >
                &nbsp;<i class='fa-solid fa-trash'></i> <br>
                
                <input type='checkbox' name='edit' value=".$datos['id']." >
                &nbsp;<i class='fa-solid fa-pen'></i>
                </td> 
            </tr>";
            $i++;
        }
    ?>
    </table>
    <input type="submit" name="Eliminar" value="Eliminar"/>
    <input type="submit" name="Editar" value="Editar"/>
    <button class="btn btn-primary"> <a href="index.php" class="none">Regresar</a> </button>
        </form>
    </div>
</body>
</html>
<?php
}
?>