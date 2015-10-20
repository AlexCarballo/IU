<?php

Class Login
{

function __construct()
{
}

function Display()
{
?>

	<!--
	======================================================================
	Fichero: Login.php V2
	Creado por: jrodeiro
	Fecha: 29/9/2015
	Formulario de login. Envia los datos a ProcesarLogin.php
	======================================================================
	-->	
 
	<form action='../controllers/ProcesarLogin.php' method='POST'>

		Login : <input type='text' name='login'><BR>
		Password : <input type='password' name='pass'><BR>

		<input type='submit' name='accion' value='validar'>

	</form>

<?php
}

} //fin de clase
?>

