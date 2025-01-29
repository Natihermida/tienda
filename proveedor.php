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
include("partials/cabecera.php");
$sql="SELECT P.id,P.nombre,P.web,D.id,D.calle,D.numero,D.comuna,D.ciudad
,T.id,T.numero FROM tienda.proveedores P 
left join tienda.direcciones D on P.id=D.proveedores_id
left join tienda.telefonos T on T.idproveedores=P.id
where P.id=:id;";
$stm=$conexion->prepare($sql);
$stm->bindParam(":id",$_GET["id"]);
$result=$stm->execute();


?>
<?php
include("partials/footer.php");
?>
<!DOCTYPE html>
<html lang="es">


        <section>
            <?php
            $direccions=[];
            $telefonos=[];
            $row=$stm->fetch( PDO::FETCH_ASSOC);
            if($row){
                echo"<div class='proveedor'>
                <h1>Proveedor</h1>
                <h4>{$row['nombre']}</h4>
                <p>Web: <a href='{$row['web']}'>{$row['web']}</a></p>
                </div>";
                
            }
            ?>
    
        </section>

    </main>
    

</body>

</html>