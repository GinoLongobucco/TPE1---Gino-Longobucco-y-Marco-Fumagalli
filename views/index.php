<?php
include '../config/config.php';  // Ruta corregida para incluir config

$sql = "SELECT Weapon.id, Weapon.NAME, Weapon.damage, Weapon.effective_range, WeaponType.NAME AS weapon_type 
        FROM Weapon 
        INNER JOIN WeaponType ON Weapon.weapon_type_id = WeaponType.id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Armas</title>
</head>
<body>
    <h1>Listado de Armas</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Daño</th>
            <th>Rango Efectivo</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['NAME']}</td><td>{$row['weapon_type']}</td><td>{$row['damage']}</td><td>{$row['effective_range']}</td></tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No se encontraron armas.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
