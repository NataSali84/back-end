<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha de cumpleaños</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Datos de Usuario</h1>
    <?php include 'menu.php'; ?>
    <br /><br />
    <form action="" method="post">
        <label> Fecha tu cumpleaños:</label>
        <input type="date" name="fecha" required><br><br>
        <input type="submit" name="enviar" value="Enviar datos"><br><br>
    </form>

    <?php
      if (isset($_POST['enviar']) && isset($_POST['fecha'])) 
      {
            $fecha_nacimiento = $_POST["fecha"];

            function obtener_edad_segun_fecha($fecha_nacimiento)
            {
                $nacimiento = new DateTime($fecha_nacimiento);
                $ahora = new DateTime(date("Y-m-d"));
                $diferencia = $ahora->diff($nacimiento);
                return $diferencia->format("%y");
            }
            if (obtener_edad_segun_fecha($fecha_nacimiento) < 18) 
            {
                print("Su edad es " . obtener_edad_segun_fecha($fecha_nacimiento) . " años, por lo tanto: No es mayor de edad");
            } else {
                print("Su edad es " . obtener_edad_segun_fecha($fecha_nacimiento) . " años, por tanto: Es mayor de edad");
            }
      }
    ?>

</body>

</html>