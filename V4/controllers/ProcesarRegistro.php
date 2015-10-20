<?php
//=====================================================================================================================
// Fichero : ProcesarRegistro.php
// Creado por : jrodeiro
// Fecha : 29/9/2015
// Recoge por post los valores de registro de un usuario. Conecta con el gestor de bd y selecciona la bd
// Comprueba si existe el login. Si no existe lo inserta e informa. Si existe informa y proporciona link a Registro.php
//=====================================================================================================================


//incluimos las funciones comunes para tener la conexion a la bd
include '../functions/FuncionesComunes.php';

//Recogemos las variables que vienen por POST desde el formulario
$login= $_POST['login'];
$pass= $_POST['pass'];
$nombre= $_POST['nombre'];
$apellidos= $_POST['apellidos'];
$telefono= $_POST['telefono'];

//Conectarmos con la bd
ConectarBD();
$Idioma = CargaIdioma();

//Comprobamos si ya existe ese login
$consultaSilogin = "select * from Usuarios where LOGIN = '$login' ";
$resultado = mysql_query($consultaSilogin) or die('error al ejecutar la consulta de login');

// Si no devuelve ninguna fila no encontro el login
if (mysql_num_rows($resultado) == 0) 
{
	// insertamos el usuario en la bd
	$InsertaUsuario = "Insert into Usuarios (LOGIN, PASSWORD, NOMBRE, APELLIDOS, TELEFONO) values ('$login','$pass','$nombre','$apellidos','$telefono')";
	$insercion = mysql_query($InsertaUsuario) or die('error al ejecutar la insercion de usuario');
	//se incluye la clase de vista de error V_Error.php
	include '../views/V_Error.php';
	//se instancia dandole el texto a mostrar y la referencia a donde ir y el texto
	//del hiperenlace
	$mensaje = $Idioma['Ha sido registrado en el sistema el usuario : ']. $login . '<BR>';	
	$error = new Error($mensaje,'../controllers/Login.php',$Idioma['Ir al login'],$Idioma);
	//se invoca el metodo Display()
	$error->Display();
	
}
// devuelve una fila por lo tanto encontro ese login
else
{
	//se incluye la clase de vista de error V_Error.php
	include '../views/V_Error.php';
	//se instancia dandole el texto a mostrar y la referencia a donde ir y el texto
	//del hiperenlace
	$mensaje = $login . '&nbsp;' . $Idioma['ya existe en el sistema como usuario registrado'] . '<BR>';	
	$error = new Error($mensaje,'../controllers/Registro.php',$Idioma['Ir al Registro'],$Idioma);
	//se invoca el metodo Display()
	$error->Display();
	
}


?>
