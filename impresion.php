<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos a mostrar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Impresión de los datos</h1>
    <?php include 'menu.php'; ?>
    <br /><br />
<?php
    if (isset($_POST['Submit']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['cedula'])) 
    {
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];

    if ($nombre <> "")
    if ($apellido <> "")
    if ($cedula <> "")

    echo 'Nombres:   ' . $nombre;
    echo '<br>';
    echo 'Apellido: ' . $apellido;
    echo '<br>';
    echo 'Cédula:  ' . $cedula;
    echo '<br>';
    }

    ?>
</body>
</html>