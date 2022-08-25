<?php 
include '../CadenaConexion.php';
$borrar=$_REQUEST['id'];

$delete = $con -> query("DELETE FROM productos WHERE id_producto='$borrar'");


if($delete){
    echo"<script>
 
    location.href = '/RestaurantePHP/View/ListaProductos.php';
    
    </script>";

}else {
    echo "datos no eliminados";
}

?>