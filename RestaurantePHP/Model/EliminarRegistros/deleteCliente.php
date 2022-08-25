<?php 
include '../CadenaConexion.php';
$borrar=$_REQUEST['id'];

$delete = $con -> query("DELETE FROM cliente WHERE id_cliente='$borrar'");


if($delete){
    echo"<script>
 
    location.href = '/RestaurantePHP/View/FrmCliente.php';
    
    </script>";

}else {
    echo "datos no eliminados";
}

?>