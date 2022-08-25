<?php 

include 'CadenaConexion.php';


$idproducto =$_POST['id'];
$nomcliente =$_POST['nombrecliente'];
$dnicliente =$_POST['dnicliente'];
$vendedor =$_POST['vendedor'];
$fecha =$_POST['fecha'];
$nomproducto =$_POST['nombreplato'];
$precio =$_POST['precio'];
$cantidad =$_POST['txtcant'];
$totalpagar =$_POST['txttotal'];


$insertar = $con -> query("INSERT INTO detalleventa(idproducto,nombrecliente, dniclinete,vendedor,fecha,nombreproducto,precio,cantidad,totalpago) 
  values('$idproducto','$nomcliente','$dnicliente','$vendedor','$fecha','$nomproducto','$precio','$cantidad','$totalpagar')");

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