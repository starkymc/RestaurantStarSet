<?php 

include 'CadenaConexion.php';

$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="../View/fotos/".$foto;
copy($ruta,$destino);



$nom_pro =$_POST['nombre'];
$precio =$_POST['precio'];
$stock =$_POST['stock'];


$insertar = $con -> query("INSERT INTO Productos(nom_pro, imagen, precio, stock) 
  values('$nom_pro','$destino','$precio','$stock')");

if ($insertar){
echo "<script>
location.href ='../View/ListaProductos.php';

</script>";

}else{
   echo "<script>
location.href ='../View/FrmRegistrarProductosError.php';

</script>";
}



?>