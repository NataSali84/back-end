<!DOCTYPE html>
<html lang="eS">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <h1>Calculadora</h1>
    <?php include 'menu.php';?>
    <br/><br/>
    <p>Ingresa dos números</p>
            <form method="post" action="calculadora.php">
            <input type="number" name="numero1">
            <select name="opciones">
                <option value="0">Suma</option>
                <option value="1">Resta</option>
                <option value="2">Multiplicación</option>
                <option value="3">División</option>
    </select>
    <input type="number" name="numero2"><br><br>
    <input type="submit" name="Calcular" value="Calcular"><br><br>

    <?php

if (isset($_REQUEST['Calcular']) && isset($_REQUEST['numero1']) && isset($_REQUEST['numero2'])) {
    $n1 = $_REQUEST['numero1'];
    $n2 = $_REQUEST['numero2'];
    $op = $_REQUEST['opciones'];


    if ($n1 <> "" && $n1 <> "") {
        echo "El resultado de la operacion es: ";
        switch ($op) {
            case 0:
                echo $n1 + $n2;
                break;
            case 1:
                echo $n1 - $n2;
                break;
            case 2:
                echo $n1 * $n2;
                break;
            case 3:
                echo $n1 / $n2;
                break;
        }
    }
} else {
    echo "";
}
echo "<br/>"
?>

</body>

</html>
