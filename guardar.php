<?php
$hostname = 'localhost';	
$database = 'ipweb';
$username = 'root';
$password = '';

$mysqli = new mysqli($hostname, $username,$password, $database);
if ($mysqli -> connect_errno) {
die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
. ") " . $mysqli -> mysqli_connect_error());
}




$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$fecha = $_POST['datetimepicker'];
$direccion = $_POST['direccion'];
$menu = $_POST['menu'];
$personas = $_POST['personas'];

if ($stmt = $mysqli->prepare("INSERT INTO usuario VALUES(NULL,?,?,?,?,?,?,?)") ){
/* ligar parámetros para marcadores */
$stmt->bind_param('sssssss',$nombres,$apellidos,$email,$fecha,$direccion,$menu,$personas); 
/* ejecutar la consulta */
$stmt->execute();
/* cerrar sentencia */
$stmt->close();
echo "Gracias por registrarte en hotel Wilson, DISFRUTE SU ESTANCIA Y SU COMIDA CORTESIA DE HOTEL Wilson";
}
else{
echo "Error al ejecutar la sentencia preparada".$mysqli->error;
}



?>