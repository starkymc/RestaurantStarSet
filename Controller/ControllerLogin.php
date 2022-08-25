<?php
include "../Model/modelLogin.php";	

$usuario=$_POST["txtusuario"];
$contra=$_POST["txtcontra"];


$oEstado = new cUsuario();
$parametroEstado= $oEstado->validar_estado($usuario,$contra);

if($parametroEstado=="1")
{
	
	header("Location: http://localhost/RestaurantePHP/View/FrmIndex");


}else
{
	header("Location: http://localhost/RestaurantePHP/View/FrmLoginError");
}

?>