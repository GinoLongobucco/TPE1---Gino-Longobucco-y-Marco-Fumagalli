<?php
include '../config/config.php';
session_start();

if (!isset($_SESSION['login_user'])) {
    header("location: admin.php");
    exit;
}

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
    <title>Panel de Administración</title>
</head>
<body>
    <h1>Panel de Administración</h1>
    <a href="logout.php">Cerrar Sesión</a>
    <h2>Gestión de Armas</h2>
    <a href="add_weapon.php">Agregar Nueva Arma</a>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Daño</th>
            <th>Rango Efectivo</th>
            <th>Acciones</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['NAME']}</td><td>{$row['weapon_type']}</td><td>{$row['damage']}</td><td>{$row['effective_range']}</td>";
                echo "<td><a href='edit_weapon.php?id={$row['id']}'>Editar</a> | <a href='delete_weapon.php?id={$row['id']}'>Eliminar</a></td></tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No se encontraron armas.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
