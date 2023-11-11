<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>ingresa tu edad</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Ingresa tu edad</h1>
<?php include 'menu.php';?>
<br/><br/>
<form action="" method="get">
    <label> Nombre :</label>
    <input type="text" name="nombre"><br><br>

    <label> Apellido :</label>
    <input type="text" name="apellido"><br><br>

    <label> Edad </label>
    <input type="number" name="edad"><br><br>

    <input type="submit" name="enviar" value="Enviar datos"><br><br>

</form>
<br>
<?php
if (isset($_GET['edad']))
{
    $edad = $_GET['edad'];
    if ($edad <> "" )
    {

        if($edad < 18)
        {
            echo $edad . '  Años, No es mayor de edad';
    
        }
        else
        {
            echo $edad . ' Años, Es mayor de edad';
        }
    }

}
?>
</body>

</html>

