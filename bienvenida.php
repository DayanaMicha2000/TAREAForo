<?php
session_start();


if (!isset($_SESSION['usuario'])) {
    header("Location: index.php"); 
    exit;
}

$usuario = $_SESSION['usuario'];


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cerrar_sesion'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit;
}


$conexion = new mysqli("localhost", "root", "", "restaurante_delivery");

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

$stmt = $conexion->prepare("SELECT nombre, apellido FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $fila = $resultado->fetch_assoc();
    $nombre_completo = $fila['nombre'] . ' ' . $fila['apellido'];
} else {
    $nombre_completo = $usuario; 
}

$stmt->close();
$conexion->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-purple-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-10 rounded-xl shadow-lg text-center max-w-md">
        <h1 class="text-3xl font-bold text-purple-700 mb-4">¡Hola, <?php echo htmlspecialchars($nombre_completo); ?>!</h1>
        <p class="text-gray-700 mb-6">Tu cuenta fue creada correctamente. ¡Bienvenido al sistema de pedidos del restaurante!</p>

        <form method="post">
            <button type="submit" name="cerrar_sesion" class="bg-purple-500 hover:bg-purple-600 text-white px-6 py-2 rounded-full transition">
                Cerrar Sesión
            </button>
        </form>
    </div>
</body>
</html>
