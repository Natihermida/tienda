<?php
// Inicia la sesión
session_start();

// Verifica si el usuario ha iniciado sesión
if (isset($_SESSION["username"])) {
    // Si el usuario ha iniciado sesión, guarda el nombre de usuario en una variable
    $username = $_SESSION["username"];
} else {
    // Si el usuario no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: index");
    exit();
}
include("conexiondb.php")
    ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Metadatos del documento -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <!-- Enlace a la hoja de estilos de Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Enlace a la hoja de estilos personalizada -->
    <link rel="stylesheet" href="css/tienda.css">
</head>

<body>
    <div class="container">
        <header>
            <!-- Icono de la tienda -->
            <i class="fa-solid fa-store"></i>
            <!-- Muestra el nombre de usuario -->
            <p><?php echo $_SESSION["username"]; ?></p>
        </header>
        <main>
            <aside>
                <!-- Menú de navegación -->
                <ul>
                    <li><a href="tienda"><i class="fa-solid fa-store"></i>Inicio</a></li>
                    <li><a href="proveedores"><i class="fa-solid fa-boxes-packing"></i>Proveedores</a></li>
                    <li><a href="clientes"><i class="fa-solid fa-user"></i>Clientes</a></li>
                    <li><a href="categorias"><i class="fa-solid fa-list"></i>Categorias</a></li>
                    <li><a href="productos"><i class="fa-brands fa-product-hunt"></i>Productos</a></li>
                </ul>
            </aside>