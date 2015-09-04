<?php
$db_host="localhost";
$db_user="root";
$db_password="1111";
$db_name="ajemex";
$db_table_name="agregar_productos";
   $db_connection = mysql_connect($db_host, $db_user, $db_password);

if (!$db_connection) {
	die('No se ha podido conectar a la base de datos');
}
$subs_fecha= date_default_timezone_set(America/Cancun);
$subs_cod_venta = ($_POST['cod_venta']);
$subs_num_cliente = ($_POST['num_cliente']);
$subs_cant_big_cola3l = ($_POST['cant_big_cola3l']);
$subs_cant_big_cola1l = ($_POST['cant_big_cola1l']);
$subs_cant_big_mza3l = ($_POST['cant_big_mza3l']);
$subs_cant_big_narj3l = ($_POST['cant_big_narj3l']);
$subs_cant_big_toronj3l = ($_POST['cant_big_toronj3l']);
$subs_cant_big_aqua1_5l = ($_POST['cant_big_aqua1_5l']);
$subs_cant_big_aqua1_5l_12_pz = ($_POST['cant_big_aqua1_5l_12_pz']);
$subs_cant_big_aqua_1l =  ($_POST['cant_big_aqua_1l']);
$subs_cant_big_aqua_620ml =  ($_POST['cant_big_aqua_620ml']);
$subs_cant_big_citrus_3l =  ($_POST['cant_big_citrus_3l']);
$subs_cant_big_citrus_500ml =  ($_POST['cant_big_citrus_500ml']);
$subs_cant_big_citrus_gas_2_5l =  ($_POST['cant_big_citrus_gas_2_5l']);
$subs_cant_big_citrus_500ml_12_pza =  ($_POST['cant_big_citrus_500ml_12_pza']);
$subs_cant_volt_473ml =  ($_POST['cant_volt_473ml']);
$subs_cant_volt_300ml =  ($_POST['cant_volt_300ml']);
$subs_cool_tea_limon =  ($_POST['cool_tea_limon']);
$subs_cool_tea_durazno =  ($_POST['cool_tea_durazno']);

$precio=(($subs_cant_big_cola3l*105)+($subs_cant_big_cola1l*85)+($subs_cant_big_mza3l*80)+($subs_cant_big_narj3l*80)+($subs_cant_big_toronj3l*80)+($subs_cant_big_aqua1_5l*70));
$resultado=mysql_query("SELECT * FROM ".$db_table_name." WHERE id = '".$subs_num_cliente."'", $db_connection);

if (mysql_num_rows($resultado)>0)
{

echo "No se logro conectar";


} else {

	$insert_value = 'INSERT INTO `' . $db_name . '`.`'.$db_table_name.'` (  `Fecha`,`Cliente`,`CajasBig_Cola_3_L`,`CajasBig_Cola_1_L`,`CajasBig_Manzana_3_L`,`CajasBig_Naranja_3_L`,`CajasBig_Toronja_3_L`,  `CajasBig_AQUA_1_5_L`,`CajasBig_AQUA_1_5_L_12_piezas`,`CajasBig_AQUA_1_L`,`CajasBig_AQUA_620_ML`,`CajasBig_CITRUS_3_L`,  `CajasBig_CITRUS_500_ML`,`CajasBig_CITRUS_Gasificada_2_5_L`,`CajasBig_CITRUS_500_ML_12_piezas`,   `CajasVOLT_473_ML`, `CajasVOLT_300_ML`,`CajasCOOL_TEA_LIMON_400_ML`,  `CajasCOOL_TEA_Durazno_400_ML`, `Total`) VALUES ("' . $subs_fecha . '","' . $subs_num_cliente . '","' . $subs_cant_big_cola3l . '","' . $subs_cant_big_cola1l . '","' . $subs_cant_big_mza3l . '","' . $subs_cant_big_narj3l . '","' . $subs_cant_big_toronj3l . '","' . $subs_cant_big_aqua1_5l . '","' . $subs_cant_big_aqua1_5l_12_pz . '","' . $subs_cant_big_aqua_1l . '","' . $subs_cant_big_aqua_620ml . '","' . $subs_cant_big_citrus_3l . '","' . $subs_cant_big_citrus_500ml . '","' . $subs_cant_big_citrus_gas_2_5l . '","' . $subs_cant_big_citrus_500ml_12_pza . '","' . $subs_cant_volt_473ml . '","' . $subs_cant_volt_300ml . '","' . $subs_cool_tea_limon . '","' . $subs_cool_tea_durazno . '","' . $precio . '")';/* Consulta para agregar datos */

mysql_select_db($db_name, $db_connection);

$retry_value = mysql_query($insert_value, $db_connection);

if (!$retry_value) {
   die('Error: ' . mysql_error());
}

header('Location: mostrar_pedidos_realizados.html');
}

mysql_close($db_connection);

?>
