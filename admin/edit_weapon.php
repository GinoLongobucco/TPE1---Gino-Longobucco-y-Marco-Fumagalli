<?php
include '../config/config.php';
session_start();

if (!isset($_SESSION['login_user'])) {
    header("location: admin.php");
    exit;
}

$id = $_GET['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $damage = $_POST['damage'];
    $range = $_POST['range'];
    $weapon_type_id = $_POST['weapon_type_id'];

    $sql = "UPDATE Weapon SET NAME = '$name', damage = $damage, effective_range = $range, weapon_type_id = $weapon_type_id WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        header("location: dashboard.php");
    } else {
        echo "Error al actualizar arma: " . $conn->error;
    }
}

$weapon = $conn->query("SELECT * FROM Weapon WHERE id = $id")->fetch_assoc();
$weapon_types = $conn->query("SELECT * FROM WeaponType");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Arma</title>
</head>
<body>
    <h2>Editar Arma</h2>
    <form method="POST" action="">
        Nombre: <input type="text" name="name" value="<?php echo $weapon['NAME']; ?>" required><br>
        Daño: <input type="number" name="damage" value="<?php echo $weapon['damage']; ?>" required><br>
        Rango Efectivo: <input type="number" name="range" value="<?php echo $weapon['effective_range']; ?>" required><br>
        Tipo de Arma: 
        <select name="weapon_type_id" required>
            <?php
            while ($row = $weapon_types->fetch_assoc()) {
                $selected = $row['id'] == $weapon['weapon_type_id'] ? "selected" : "";
                echo "<option value='{$row['id']}' $selected>{$row['NAME']}</option>";
            }
            ?>
        </select><br>
        <input type="submit" value="Guardar Cambios">
    </form>
</body>
</html>
