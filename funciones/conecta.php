<?php
// Ubicacion del archivo: 
// ./funciones/conecta.php
define ("HOST", 'localhost');
define ("BD", 'id21371185_paysafe');
define ("USER_BD", 'root');
define ("PASS_BD", '');

function conecta(){
	$con = new mysqli(HOST, USER_BD, PASS_BD, BD);
	return $con;
}
?>
