<?php
include '../CadenaConexion.php';
$nombres = $_POST['nombre'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];



$id = $_POST['id'];

$up = $con -> query("UPDATE productos SET nom_pro='$nombres',precio='$precio', stock='$stock' WHERE id_producto='$id'");

if ($up) {
    echo"<script>
    location.href = '../../View/ListaProductos.php';
    
    
    </script>";
}else
{
    echo "datos no actualizados";
}


?>