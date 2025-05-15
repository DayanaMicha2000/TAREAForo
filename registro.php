<?php
include("conexion.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];

    
    $verificar = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $verificar->bind_param("s", $usuario);
    $verificar->execute();
    $resultado = $verificar->get_result();

    if ($resultado->num_rows > 0) {
        echo "El nombre de usuario ya está registrado.";
        exit;
    }

    
    $stmt = $conexion->prepare("INSERT INTO usuarios (cedula, nombre, apellido, correo, telefono, direccion, usuario, contrasena, fecha_nacimiento) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssssss", $cedula, $nombre, $apellido, $correo, $telefono, $direccion, $usuario, $contrasena, $fecha_nacimiento);

    if ($stmt->execute()) {
        
        session_start();
        $_SESSION['usuario'] = $usuario;
        header("Location: bienvenida.php");
        exit;
    } else {
        echo "Error al registrar: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
}
?>

