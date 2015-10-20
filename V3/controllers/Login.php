<?php
//se incluyen las funciones comunes
include '../functions/FuncionesComunes.php';
//si no tiene permisos se manda al Login
if (!(Conpermisos()))
{
	//Se incluye la clase Vista de Login
	include '../views/Login.php';
	//se instancia la clase vista de Login
	$login_view = new Login();
	//se invoca el metodo Display de Login
	$login_view->Display();
}
//Si esta logueado se manda al Menu
else
	header('Location:../controllers/Menu.php)');
?>
