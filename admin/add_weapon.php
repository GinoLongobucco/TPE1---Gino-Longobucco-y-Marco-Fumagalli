<?php
include '../config/config.php';
session_start();

if (!isset($_SESSION['login_user'])) {
    header("location: admin.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $damage = $_POST['damage'];
    $range = $_POST['range'];
    $weapon_type_id = $_POST['weapon_type_id'];

    $sql = "INSERT INTO Weapon (NAME, damage, effective_range, weapon_type_id) VALUES ('$name', $damage, $range, $weapon_type_id)";
    
    if ($conn->query($sql) === TRUE) {
        header("location: dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$weapon_types = $conn->query("SELECT * FROM WeaponType");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Arma</title>
</head>
<body>
    <h2>Agregar Nueva Arma</h2>
    <form method="POST" action="">
        Nombre: <input type="text" name="name" required><br>
        Daño: <input type="number" name="damage" required><br>
        Rango Efectivo: <input type="number" name="range" required><br>
        Tipo de Arma: 
        <select name="weapon_type_id" required>
            <?php
            while ($row = $weapon_types->fetch_assoc()) {
                echo "<option value='{$row['id']}'>{$row['NAME']}</option>";
            }
            ?>
        </select><br>
        <input type="submit" value="Agregar">
    </form>
</body>
</html>
