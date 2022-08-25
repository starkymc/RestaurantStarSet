<?php 

include 'CadenaConexion.php';



$idecliente =$_POST['idcliente'];
$nombre =$_POST['nombre'];
$telefono =$_POST['telefono'];
$direccion =$_POST['direccion'];
$ref =$_POST['referencia'];



$insertar = $con -> query("INSERT INTO enviodetalle(idcliente,nombre, telefono,direccion,referencia) 
  values('$idecliente','$nombre','$telefono','$direccion','$ref')");

if ($insertar){
echo "<script>
location.href ='../View/FrmVerVenta.php';

</script>";

}else{
   echo "<script>
location.href ='../View/FrmRegistrarVentaError.php';

</script>";
}



?>