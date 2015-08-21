<?php 
 
$server = "localhost";
$user = "root";
$pass = "1111";
$bd = "ajemex";
 
//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass,$bd) 
or die("Ha sucedido un error inexperado en la conexion de la base de datos");
 
//generamos la consulta
$sql = "SELECT * FROM productos";
mysqli_set_charset($conexion, "utf8"); //formato de datos utf8
 
if(!$result = mysqli_query($conexion, $sql)) die();
 
$trabajadores = array(); //creamos un array
 
while($row = mysqli_fetch_array($result)) 
{ 
    $id=$row['ID'];
    $descripcion=$row['Descripcion'];
    $piezas=$row['Piezas'];
    $precio=$row['Precio'];
   
    $productos[] = array('ID'=>$id, 'Descripcion' => $descripcion, 'Piezas'=>$piezas, 'Precio'=>$precio);
 
    
}
    
//desconectamos la base de datos
$close = mysqli_close($conexion) 
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
  
 
//Creamos el JSON
$json_string = json_encode($productos);
echo $json_string;
 
//Si queremos crear un archivo json, sería de esta forma:
/*
$file = 'trabajadores.json';
file_put_contents($file, $json_string);
*/
    
 
?>
