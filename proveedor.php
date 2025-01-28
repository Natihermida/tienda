<?php
if(! isset($_GET["id"])) {
    header("location:proveedores");
    exit();
}
?>
<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
} else {
    header("location:index");
    exit();
}
?>
<?php
include("partials/cabecera.php");
?>
<?php
include("partials/footer.php");
?>
<!DOCTYPE html>
<html lang="es">


        <section>

        </section>

    </main>
    

</body>

</html>