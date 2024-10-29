<?php
include 'conexion.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];

    $sql = "INSERT INTO postre (name, price) VALUES (?, ?)";

    if ($stmt = $conexion->prepare($sql)) {
        $stmt->bind_param("sd", $name, $price);
        if ($stmt->execute()) {
            header("Location: http://localhost:8012/postres/postre.php"); // Redirige a la página principal
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error: " . $conexion->error;
    }
}

$conexion->close();
?>
