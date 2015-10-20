<?php
//=====================================================================================================================
// Fichero : ProcesarRegistro.php
// Creado por : jrodeiro
// Fecha : 29/9/2015
// Recoge por post los valores de registro de un usuario. Conecta con el gestor de bd y selecciona la bd
// Comprueba si existe el login. Si no existe lo inserta e informa. Si existe informa y proporciona link a Registro.php
//=====================================================================================================================

//Recogemos las variables que vienen por POST desde el formulario
$login= $_POST['login'];
$pass= $_POST['pass'];
$nombre= $_POST['nombre'];
$apellidos= $_POST['apellidos'];
$telefono= $_POST['telefono'];

//Conectamos con el gestor de la bd
mysql_connect('localhost','AccessSkeleton','AccessSkeleton') or die('error de conexion a la BD');
mysql_select_db('AccessSkeleton') or die('error de selección de la BD');


//Comprobamos si ya existe ese login
$consultaSilogin = "select * from Usuarios where LOGIN = '$login' ";
$resultado = mysql_query($consultaSilogin) or die('error al ejecutar la consulta de login');

// Si no devuelve ninguna fila no encontro el login
if (mysql_num_rows($resultado) == 0) 
{
	// insertamos el usuario en la bd
	$InsertaUsuario = "Insert into Usuarios (LOGIN, PASSWORD, NOMBRE, APELLIDOS, TELEFONO) values ('$login','$pass','$nombre','$apellidos','$telefono')";
	$insercion = mysql_query($InsertaUsuario) or die('error al ejecutar la insercion de usuario');
	echo 'El Login <b>' . $login . '</b> ha sido registrado en el sistema' . '<BR>';
}
// devuelve una fila por lo tanto encontro ese login
else
{
	echo 'El usuario <b>' . $login . '</b> ya existe en la bd <BR>';
	echo '<a href=\'../views/Registro.php\'>Volver al registro</a><BR>';

}


?>
