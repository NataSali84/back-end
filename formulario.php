?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'menu.php'; ?>
    <br /><br />
    <?php
    $db = mysqli_connect('localhost', 'root', 'A.Miguel1982*', 'mi_proyectodb');

    if (!$db) {
        echo "Mal conectado";
    } else {
        echo "Muy bien conectado";
    }
    $sql = "SELECT * FROM usuario";
    $query=mysqli_query($db,$sql);
        ?>

    <div>
        <form action="">
            <h1>Formulario</h1>

            <input type="text" name="Id" placeholder="Id">
            <input type="text" name="Nombre" placeholder="Nombre">
            <input type="text" name="Apellido" placeholder="Apellido">
            <input type="text" name="Cedula" placeholder="Cédula">

            <input type="Submit" value="Agregar usuario">
        </form>
    </div>

    <div>
        <h2>Usuarios</h2>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cédula</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row)
                ?>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>


                <th><a href="">Editar</a></th>
                <th><a href="">Eliminar</a></th>

            </tbody>
        </table>
    </div>

    <?php
    require 'funciones.php';
    if (isset($_POST['id'])) {
        $Datos = BuscarId($_POST['id']);
    }
    if (isset($_POST['nombre'])) {
        $Datos = BuscarNombre($_POST['nombre']);
    }
    if (isset($_POST['apellido'])) {
        $Datos = BuscarApellido($_POST['apellido']);
    }
    if (isset($_POST['cedula'])) {
        $Datos = BuscarCedula($_POST['cedula']);
    }



    function Obtenermi_proyecto()
    {
        try {
            require 'database.php';

            $sql = "SELECT * FROM mi_proyecto";
            $consulta = mysqli_query($db, $sql);


            while ($row = mysqli_fetch_assoc($consulta)) {
                echo "<pre>";
                var_dump($row);
                echo "</pre>";
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    Obtenermi_proyecto();
    ?>

</body>

</html>