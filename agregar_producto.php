<?php
$db_host="localhost";
$db_user="root";
$db_password="1111";
$db_name="ajemex";
$db_table_name="productos";
   $db_connection = mysql_connect($db_host, $db_user, $db_password);

if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}
$subs_id = utf8_decode($_POST['nuevo_id']);
$subs_descripcion = ($_POST['nuevo_produc']);
$subs_piezas = utf8_decode($_POST['cantidad']);
$subs_precio = utf8_decode($_POST['precio']);


$resultado=mysql_query("SELECT * FROM ".$db_table_name." WHERE id = '".$subs_id."'", $db_connection);

if (mysql_num_rows($resultado)>0)
{

echo "No se logro conectar";

} else {
	
	$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (`ID` , `Descripcion` , `Piezas`,`Precio`) VALUES ("' . $subs_id . '", "' . $subs_descripcion . '", "' . $subs_piezas . '","' . $subs_precio . '")';/* Consulta para agregar datos */

mysql_select_db($db_name, $db_connection);
$retry_value = mysql_query($insert_value, $db_connection);

if (!$retry_value) {
   die('Error: ' . mysql_error());
}
	
header('Location: productos.html');
}

mysql_close($db_connection);
		
?>