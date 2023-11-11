<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario_2</title>
</head>
<body>
<?php
function BuscarId ($texto){
    require 'database.php';
    $sql = "SELEC * from usuario WHEEW id LIKE '%". $texto. "%';";
    $consulta = mysqli_query($db,$sql);
    return $consulta;
}
function BuscarNombre ($texto){
    require 'database.php';
    $sql = "SELEC * from usuario WHEEW id LIKE '%". $texto. "%';";
    $consulta = mysqli_query($db,$sql);
    return $consulta;
}
function BuscarApellido ($texto){
    require 'database.php';
    $sql = "SELEC * from usuario WHEEW id LIKE '%". $texto. "%';";
    $consulta = mysqli_query($db,$sql);
    return $consulta;
}
function BuscarCedula ($texto){
    require 'database.php';
    $sql = "SELEC * from usuario WHEEW id LIKE '%". $texto. "%';";
    $consulta = mysqli_query($db,$sql);
    return $consulta;
}
?>    
</body>
</html>

