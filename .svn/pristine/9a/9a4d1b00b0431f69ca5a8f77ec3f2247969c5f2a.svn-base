<?php
//========================================================================================
//Fichero: ProcesarLogin.php V2
//Creado por: jrodeiro
//Fecha:29/9/2015
//Recoge login y password del formulario de login Login.php. Accede a la bd y comprueba si
//el login existe, si no existe informa. Despues comprueba si la password coincide, si no coincide informa.
//Si el login existe y la password coincide redirige a Menu.php
//----------------------------------------------------------------------------------------
//Fecha:5/10/2015
// Incluido registro de sesión del login de usuario e idioma
//----------------------------------------------------------------------------------------
//Se utiliza una libreria de funciones FuncionesComunes.php para la funcion de conexion a la bd
//========================================================================================

//incluimos las funciones comunes para tener la conexion a la bd
include '../functions/FuncionesComunes.php';

//Recogemos las variables que vienen por POST desde el formulario

$login= $_POST['login'];
$pass= $_POST['pass'];

//Conectarmos con la bd
ConectarBD();
$Idioma = CargaIdioma();

//comprobamos la identidad
$ExisteLogin = 'select * from Usuarios where Login = \''. $login . '\'';
$ResultadoExisteLogin = mysql_query($ExisteLogin) or die('No se puede comprobar si existe login');

if (mysql_num_rows($ResultadoExisteLogin)==1)
{
	//si existe el login
	//sacamos la fila de usuario del recordset
	$TuplaLogin = mysql_fetch_array($ResultadoExisteLogin);
	//comprobamos si el atributo PASSWORD coincide con lo introducido por el usuario como password para ese login
	if ($TuplaLogin['PASSWORD'] == $pass)
	{
		//Registramos el login del usuario y el idioma en la sesion
		session_start();
		$_SESSION['login'] = $login;
		$_SESSION['idioma'] = 'ESPANHOL';
		header('Location:../controllers/Menu.php');
	}
	else
	//la pass introducida por el usuario no es correcta para ese login
	{

		//se incluye la clase de vista de error V_Error.php
		include '../views/V_Error_Login.php';
		//se instancia dandole el texto a mostrar y la referencia a donde ir y el texto
		//del hiperenlace
		$error = new Error($Idioma['Error al introducir la password para ese login'],'../controllers/Login.php',$Idioma['Volver al login']);
		//se invoca el metodo Display()
		$error->Display();
	}	
}
//si es incorrecta
else
{
	echo $Idioma['Error, no existe ese login'];
	echo "<a href='../controllers/Login.php'>".$Idioma['Volver al login']."</a>";
}

?>
