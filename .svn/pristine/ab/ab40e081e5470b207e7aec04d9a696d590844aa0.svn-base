<?php
//=================================================================================
//Fichero:FuncionesComunes.php V2
//Creado por: jrodeiro
//Fecha: 29/9/2015
//Funciones generales del proyecto AccessSkeleton 
//=================================================================================

//---------------------------------------------------------------------------------
//Funcion: ConectarBD()
//Creado por: jrodeiro
//Fecha: 29/9/2015
//Establece conexion con el gestor de bd, si no es posible informa y devuelve 0.
//A continuacion selecciona la bd, si no es posible informa y devuelve 0.
//---------------------------------------------------------------------------------
function ConectarBD()
{
	if (!(mysql_connect('localhost','AccessSkeleton','AccessSkeleton')))
	{
		echo 'No es posible conectar al gestor de bd';
		return 0;
	}
	if (!(mysql_select_db('AccessSkeleton')))
	{
		echo 'No es posible seleccionar la bd';
		return 0;
	}
}
//---------------------------------------------------------------------------------
//Funcion: CargaIdioma()
//Creado por: jrodeiro
//Fecha: 5/10/2015
//Carga en un array el idioma de la aplicacion a partir de un fichero de idioma
//Utiliza un array asociativo
//---------------------------------------------------------------------------------
function CargaIdioma()
{

	//asignamos idioma español como defecto
//	if (!(isset($_SESSION['idioma'])))
		$_SESSION['idioma'] = 'ENGLISH';
	//incluimos el array de idioma correspondiente con el indicado en la session
	switch ($_SESSION['idioma'])
	{
	case 'ESPANHOL':
		include '../models/ESPANHOL.php';
		break;
	case 'ENGLISH':
		include '../models/ENGLISH.php';
		break;
	DEFAULT:
		break;
	}
	return $Idioma;
}

//---------------------------------------------------------------------------------
//Funcion: ConPermisos()
//Creado por: jrodeiro
//Fecha: 5/10/2015
//Comprueba si existe login registrado en el sistema, si no existe devuelve 0 
//si existe devuelve 1
//---------------------------------------------------------------------------------
function ConPermisos()
{
session_start();
if (isset($_SESSION['login']))
	return 1;
else
	return 0;
}
?>
