<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Ingresa tus datos</h1>
    <?php include 'menu.php'; ?>
    <br /><br />
    <form name= "impresion.php" method="post" action="impresion.php">
        <label> Nombre</label>
        <input type="text" name="nombre" required><br><br>
        <label>Apellido</label>
        <input type="texto" name="apellido" required><br><br>
        <label>Cédula</label>
        <input type="number" name="cedula" required><br><br>
        <br><br>
        <input type="submit" name="Submit" value="Enviar">
    </form>

</body>

</html>