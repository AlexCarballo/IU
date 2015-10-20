<?php
//Inclusion de funciones comunes
include_once '../functions/FuncionesComunes.php';
//si esta logueado se le muestra el Menu
if (ConPermisos())
{
	//Se incluye la clase de vista de Menu
	include '../views/V_Menu.php';
	//Se instancia la clase Menu
	$menu = new Menu;
	//Se muestra el Menu
	$menu->Display();
}
else
//Si no tiene permisos se redirige al Login
	header('Location:../controllers/Login.php');
?>
