<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
} else {
    header("location:index");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/tienda.css">

</head>

<body>
    <div class="container">

    </div>
    <header>
        <i class="fa-solid fa-store"></i>

        <p><?php echo $_SESSION["username"]; ?></p>

    </header>
    <main>
        <aside>
            <ul>
                <li><a href="tienda">Inicio</a></li>
                <li><a href="proveedores">Proveedores</a></li>
                <li><a href="clientes">Clientes</a></li>
                <li><a href="categorias">Categorías</a></li>
                <li><a href="productos">Productos</a></li>
                <li><a href="ventast">Ventas</a></li>
            </ul>

        </aside>
        <section>

        </section>

    </main>

</body>

</html>