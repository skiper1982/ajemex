<?php

$server = "localhost";
$user = "root";
$pass = "1111";
$bd = "ajemex";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd)
or die("Ha sucedido un error inexperado en la conexion de la base de datos");

//generamos la consulta
$sql = "SELECT * FROM agregar_productos";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8

if(!$result = mysqli_query($conexion, $sql)) die();

$productos = array(); //creamos un array

while($row = mysqli_fetch_array($result))
{
    $id=$row['ID_Pedido'];
     $fecha=$row['Fecha'];
    $vendedor=$row['Vendedor'];
    $cliente=$row['Cliente'];
    $big_cola_3l=$row['CajasBig_Cola_3_L'];
    $big_cola_1l=$row['CajasBig_Cola_1_L'];
    $big_manzana_3l=$row['CajasBig_Manzana_3_L'];
    $big_naranja_3l=$row['CajasBig_Naranja_3_L'];
    $big_toronja_3l=$row['CajasBig_Toronja_3_L'];
    $big_aqua_1_5l=$row['CajasBig_AQUA_1_5_L'];
    $big_aqua_1_5l_12_pza=$row['CajasBig_AQUA_1_5_L_12_piezas'];
    $big_aqua_1l=$row['CajasBig_AQUA_1_L'];
    $big_aqua_620ml=$row['CajasBig_AQUA_620_ML'];
    $agregar_productos[] = array('ID_Pedido'=>$id, 'Fecha' =>  $fecha, 'Vendedor'=>$vendedor, 'Cliente'=>$cliente, 'CajasBig_Cola_3_L'=>$big_cola_3l, 'CajasBig_Cola_1_L'=>$big_cola_1l, 'CajasBig_Manzana_3_L'=>$big_manzana_3l,'CajasBig_Naranja_3_L'=>$big_naranja_3l,'CajasBig_Toronja_3_L'=>$big_toronja_3l,'CajasBig_AQUA_1_5_L'=>$big_aqua_1_5l, 'CajasBig_AQUA_1_5_L_12_piezas'=>$big_aqua_1_5l_12_pza, 'CajasBig_AQUA_1_L'=>$big_aqua_1l, 'CajasBig_AQUA_620_ML'=>$big_aqua_620ml);


}

//desconectamos la base de datos
$close = mysqli_close($conexion)
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");


//Creamos el JSON
$json_string = json_encode($agregar_productos);
echo $json_string;

//Si queremos crear un archivo json, sería de esta forma:
/*
$file = 'productos.json';
file_put_contents($file, $json_string);
*/


?>
