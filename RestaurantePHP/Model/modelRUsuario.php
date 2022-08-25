<?php 

include 'CadenaConexion.php';




$usuario =$_POST['txtusuario'];
$contrasena =$_POST['txtcontra'];
$habilitado =$_POST['SHabilitado'];


$insertar = $con -> query("INSERT INTO usuarios(usuario,contra, habilitado) 
  values('$usuario','$contrasena','$habilitado')");

if ($insertar){
echo "<script>
location.href ='../View/FrmRegistrarUsuario.php';

</script>";

}else{
  echo "<script>
location.href ='../View/FrmRegistrarUsuarioError.php';

</script>";
}



?>