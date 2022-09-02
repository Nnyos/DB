<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="animate-css/animate.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/9acc805954.js" crossorigin="anonymous"></script>
<?php
include "conexion.php";

    if(@$_POST['Eliminar']=="Eliminar"){
        if (@$_POST['elimi']!=""){
           $eliminar=mysqli_query($conexion, "DELETE FROM Registro WHERE id=".$_POST['elimi'] ." ");
      if($eliminar){
         header("location:consulta.php");
      } else{
         echo"Error en eliminar datos!!!!";
      }
        } else{
           echo "seleccione un registro para eliminar";
        }
      }
      
  
    if (@$_POST['Editar'] == "Editar"){         
        if (@$_POST['edit'] != ""){

        $editar = mysqli_query($conexion, "SELECT * FROM Registro WHERE id = '".$_POST['edit']."'");

        $resultado = mysqli_num_rows($editar);
        $datos_editar = mysqli_fetch_array($editar);

        if ($resultado > 0 ){
            ?>
            <div class="container"> 
            <h2>Datos personales</h2>
            <form action="guardar_editar.php" method="POST">
                <table class="table table-bordered">
                    <input type="hidden" name="code" value="<?php echo $datos_editar['id'];?>">
                    <tr>
                        <td>Cedula:</td>
                        <td><input type="text" name="cedulae" value="<?php echo $datos_editar['cedula'];?>"></td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td><input type="text" name="nombree" value="<?php echo $datos_editar['nombre'];?>"></td>
                    </tr>
                    <tr>
                        <td>Apellido:</td>
                        <td><input type="text" name="apellidoe" value="<?php echo $datos_editar['apellido'];?>"></td>
                    </tr>
                    <tr>
                        <td>Direccion:</td>
                        <td><input type="text" name="direccione" value="<?php echo $datos_editar['direccion'];?>"></td>
                    </tr>
                    <tr>
                        <td>Telefono:</td>
                        <td><input type="text" name="telefonoe" value="<?php echo $datos_editar['telefono'];?>"></td>
                    </tr>
                    <tr>
                        <td>Edad:</td>
                        <td><input type="text" name="edade" value="<?php echo $datos_editar['edad'];?>"></td>
                    </tr>
                    <tr>
                        <td>Fecha:</td>
                        <td><input type="date" name="fecha_nacimientoe" value="<?php echo $datos_editar['fecha_nacimiento'];?>"></td>
                    </tr>
                </table>
                <input type="submit" value="Guardar" class="sub">
                <input type="reset" value="Borrar">
                <!-- <button><a href="consulta.php" class="none">Consultar</a></button> -->
            </form>
            </div>
            <?php
        }
        else{
            echo("No se encuatra el registro");
        } 
    }
    else {
        echo ("Selecione un registro para editar");
    }
 }
    ?>