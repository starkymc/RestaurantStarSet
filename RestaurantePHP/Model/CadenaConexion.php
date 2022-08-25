<?php

/**
 * 
 */
class cConexion 
{
	
public $veServidor ;
public $veUsuario ;
public $vePassword ;
public $veBaseDatos;

	function CrearConexion()
	{
		

$veServidor = "localhost";
$veUsuario = "root";
$vePassword ="";
$veBaseDatos="Restaurantephp2";

$vlConexion= new mysqli($veServidor,$veUsuario,$vePassword,$veBaseDatos);
return $vlConexion;
	}
}

?>
<?php 
$con = new mysqli("localhost","root","","Restaurantephp2");


?>