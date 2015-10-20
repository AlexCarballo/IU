<?php
//=====================================================================================
//Fichero : V_Menu.php
//Creado por : jrodeiro
//Fecha : 6/10/2015
//Clase de Vista Menu. Incluye la plantilla con css estructurada en V_Cabecera.php y 
//V_Footer.php
//=====================================================================================

//-------------------------------------------------------------------------------------
//Clase Menu
//Metodos: 
//	construct()
//	Display()
//Atributos :
//
//
//--------------------------------------------------------------------------------------
class Menu
{
//metodo constructor. No precisa parametros y por lo tanto no se le colocan
function __construct()
{
}
//metodo de envio al cliente de la vista
Function Display()
{
	//se carga el menu de idioma
	$Idioma = CargaIdioma();
	//Se incluye la cabecera de la pagina html que llevan todas las paginas de la web
	include 'V_Cabecera.php';

	//Aqui va el cuerpo principal de la pagina

	//Fin de cuerpo de pagina

	//incluimos el pie de pagina que llevan todas las paginas de la web
	include 'V_Footer.php';
}

}
?>
