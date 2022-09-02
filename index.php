<?php
session_start();
    if (isset($_SESSION['valor1'])){
         header("Location:principal.php");
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
    <title>Document</title>
</head>
<body>
    <form action="verificar.php" method="POST">
        <table>
            <tr>
                <td>
                    Usuario:
                </td>
                <td>
                    <input type="text" name="usuario">
                </td>
            </tr>
            <tr>
                <td>
                    Contraseña:
                </td>
                <td>
                    <input type="password" name="password">
                </td>
        </table>
        <input type="submit" value="Ingresar">
    </form>
</body>
</html>
<?php
}   
?>