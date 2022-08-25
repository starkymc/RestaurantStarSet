<?php
include "CadenaConexion.php"; 
/**
 * 
 */
class cUsuario


{
	/*definims las propiedades de la clase*/
	public  $nombreUsuario; 
	public  $direccionUsuario; 
	public  $idUsuario;  
	public  $loginUsuario;  
	public  $contraseña; 
	public  $estado; 
	
	function validar_estado($paramLoginUsuario, $paramContraseñaUsuario)
	{
	/*ingresa el id del usuario y devuelve 1 para bloqueado y 0 para no bloqueado */
     $vlUsuarioExiste = 0; 
		$oCadenaConeccion = new cConexion();
		$cn = $oCadenaConeccion->CrearConexion(); 
		$vlSql = "select COUNT(*) AS USUARIO_EXISTE from usuarios where usuario = '". $paramLoginUsuario ."' and contra = '". $paramContraseñaUsuario ."' and habilitado='1' ";
		$vlEjecucionQuery = mysqli_query($cn, $vlSql); 


        while($vlRegistro= mysqli_fetch_assoc($vlEjecucionQuery)){
        	$vlUsuarioExiste= $vlRegistro["USUARIO_EXISTE"];

        }  
        return $vlUsuarioExiste;
	}

}

?>