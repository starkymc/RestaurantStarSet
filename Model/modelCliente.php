<?php 

include 'CadenaConexion.php';





$nom_cli =$_POST['nombre'];
$dni =$_POST['dni'];
$correo =$_POST['correo'];
$telf =$_POST['telf'];


$insertar = $con -> query("INSERT INTO cliente(nom_cli, dni, correo, telf) 
  values('$nom_cli','$dni','$correo','$telf')");

if ($insertar){
echo "<script>
location.href ='../View/frmCliente.php';

</script>";

}else{
   echo "<script>
location.href ='../View/FrmRegistrarProductosError.php';

</script>";
}



?>