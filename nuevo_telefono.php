<?php
if (!isset($_POST["telefono"])) {
    header("Location: proveedores");
    exit();
}

include("conexiondb.php");

// Consulta para insertar el número de teléfono
$sql = "INSERT INTO telefonos (numero, idproveedores) VALUES (:numero, :proveedor_id)";

$stm = $conexion->prepare($sql);

// Vincular los parámetros con los valores del formulario
$stm->bindParam(":numero", $_POST["telefono"]);  // Asegúrate de que el campo sea "telefono" en el formulario
$stm->bindParam(":proveedor_id", $_POST["idproveedor"]);  // Asegúrate de que el id del proveedor esté en el formulario

// Ejecutar la consulta
$stm->execute();

// Redirigir a la página de proveedores con el id del proveedor como parámetro
header("Location: proveedores?id=" . $_POST["idproveedor"]);
exit();
?>
