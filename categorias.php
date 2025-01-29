

<?php
// Incluye el archivo de cabecera
include("partials/cabecera.php");

// Consulta SQL para seleccionar todas las categorías ordenadas por id en orden descendente
$sql = "SELECT * FROM categorias ORDER BY id DESC";

// Ejecuta la consulta y guarda el resultado
$result = $conexion->query($sql);
?>

<section>
    <div class="listado">
        <h1>Categorías</h1>
        <table class="table-categorias">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Inicia un bucle que recorre cada fila del resultado de la consulta a la base de datos
                while ($fila = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    // Muestra el ID de la categoría
                    echo "<td>" . $fila['id'] . "</td>";
                    // Muestra el nombre de la categoría
                    echo "<td>" . $fila['nombre'] . "</td>";
                    // Muestra la descripción de la categoría
                    echo "<td>" . $fila['descripcion'] . "</td>";
                    // Muestra los enlaces para editar, añadir y ver la categoría
                    echo "<td>
                    <a href='editar_categorias.php?id=" . $fila['id'] . "'>Editar</a> |
                    <a href='categorias?id=" . $fila['id'] . "'>Añadir</a> |
                    <a href='categorias?id=" . $fila['id'] . "'>Ver</a>
                    </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <hr>
        <h3>Nueva Categoría</h3>
        <form action="nueva_categoria.php" method="post">
            <div class="form-categoria">
                <!-- Campo de entrada para el nombre de la nueva categoría -->
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-cat" required placeholder="Nombre de la categoria">
            </div>
            <div class="form-group">
                <!-- Campo de entrada para la descripción de la nueva categoría -->
                <label for="web">Descripción:</label>
                <input type="text" name="descripcion" id="web" class="form-cat" required placeholder="descripcion">
            </div>
            <div class="form-categoria">
                <!-- Botón para enviar el formulario y guardar la nueva categoría -->
                <input type="submit" value="Guardar" class="btn btn-primary">
            </div>
        </form>
    </div>
</section>
 
    <?php
include("partials/footer.php");
?>

