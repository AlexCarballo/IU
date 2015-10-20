<?php

Class Registro
{


function __construct($Idioma)
{

	$this->Idioma = $Idioma;
	
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
	
	<?php 
		$Idioma = $this->Idioma;
		include '../views/V_Cabecera_Simple.php';

	?>

	<div id='box'>
		
		<form name = 'formulario' action='../controllers/ProcesarRegistro.php' method='POST'>

		<?php echo $Idioma['Usuario']; ?>&nbsp;: <input type='text' name='login'><BR>
		<?php echo $Idioma['Contraseña']; ?>&nbsp;: <input type='password' name='pass'><BR>
		<?php echo $Idioma['Nombre']; ?>&nbsp;: <input type='text' name='nombre'><BR>
		<?php echo $Idioma['Apellidos']; ?>&nbsp;: <input type='text' name='apellidos'><BR>
		<?php echo $Idioma['Teléfono']; ?>&nbsp;: <input type='text' name='telefono'><BR>

		<input type='submit' name='accion' value='<?php echo $Idioma['Registrar']; ?>' onClick='validar()'>

</form>
	</form>
	</div>

<?php
}

} //fin de clase
?>

