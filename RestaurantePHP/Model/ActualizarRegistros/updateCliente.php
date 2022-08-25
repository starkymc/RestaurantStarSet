<?php
include '../CadenaConexion.php';
$nombres = $_POST['nombre'];
$dni = $_POST['dni'];
$correo = $_POST['correo'];
$telf = $_POST['telf'];



$id = $_POST['id'];

$up = $con -> query("UPDATE cliente SET nom_cli='$nombres',dni='$dni', correo='$correo' ,telf='$telf' WHERE id_cliente='$id'");

if ($up) {
    echo"<script>
    location.href = '../../View/FrmCliente.php';
    
    
    </script>";
}else
{
    echo "datos no actualizados";
}


?>