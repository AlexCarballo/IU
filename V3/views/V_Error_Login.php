<?php
//=====================================================================================
//Fichero : V_Menu.php
//Creado por : jrodeiro
//Fecha : 6/10/2015
//Clase de Vista Error. Incluye la plantilla con css estructurada en V_Cabecera.php y 
//V_Footer.php
//=====================================================================================

//-------------------------------------------------------------------------------------
//Clase Menu
//Metodos: 
//	construct()
//	Display()
//Atributos :
//TextoError - texto de error a mostrar
//PaginaRegreso - Pagina a indicar en el hiperenlace
//TextoEnlace - Texto a mostrar en el hiperenlace
//--------------------------------------------------------------------------------------
class Error 
{

var $TextoError;
var $PaginaRegreso;
var $TextoEnlace;


//metodo constructor. No precisa parametros y por lo tanto no se le colocan
function __construct($textoerror,$paginaregreso, $textoenlace)
{

$this->TextoError = $textoerror;
$this->PaginaRegreso = $paginaregreso;
$this->TextoEnlace = $textoenlace;

}
//metodo de envio al cliente de la vista
Function Display()
{
	//se carga el menu de idioma
	$Idioma = CargaIdioma();
	//Se incluye la cabecera de la pagina html que llevan todas las paginas de la web
	include 'V_Cabecera_LogReg.php';

	//Aqui va el cuerpo principal de la pagina

	echo "$this->TextoError.<br>";
	echo "<a href='$this->PaginaRegreso'>$this->TextoEnlace</a>";

	//Fin de cuerpo de pagina

	//incluimos el pie de pagina que llevan todas las paginas de la web
	include 'V_Footer.php';
}

}
?>
