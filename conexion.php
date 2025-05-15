<?php
    $host = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "restaurante_delivery";

    $conexion = new mysqli($host, $usuario, $clave, $bd);

    if ($conexion->connect_error) {
        exit("Error de conexión: " . $conexion->connect_error);
    }
?>
