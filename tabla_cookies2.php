<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_COOKIE) && count($_COOKIE) > 0) {
    echo "<h2>Cookies existentes:</h2>";
    echo "<table border='1'>
            <tr>
                <th>clave</th>
                <th>Valor</th>
            </tr>";

    foreach ($_COOKIE as $clave => $valor) {
        echo "<tr>
                <td>$clave</td>
                <td>$valor</td>
            </tr>";
    }

    echo "</table>";

    echo "<h2>Eliminar cookies:</h2>";
    echo "<form method='post' action=''>
            <label for='delete_cookie'>Selecciona una cookie para eliminar:</label>
            <select name='delete_cookie' id='delete_cookie'>";

    foreach ($_COOKIE as $clave => $valor) {
        echo "<option value='$clave'>$clave</option>";
    }

    echo "</select>
            <input type='submit' value='Eliminar'>
          </form>";
}
?>

    
</body>
</html>