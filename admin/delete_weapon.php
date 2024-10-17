<?php
include '../config/config.php';
session_start();

if (!isset($_SESSION['login_user'])) {
    header("location: admin.php");
    exit;
}

$id = $_GET['id'];
$sql = "DELETE FROM Weapon WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("location: dashboard.php");
} else {
    echo "Error al eliminar arma: " . $conn->error;
}
?>
