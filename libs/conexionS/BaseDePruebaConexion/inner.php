<!DOCTYPE html>
<?php
require_once('BaseDeDatos_class.php');
error_reporting(E_ALL);
$action = 'updater';
$data = array();

function printReceptors () {
    global $db;
//recibe el receptor de la base de datos que se conecta más abajo
    $receptor = $db->ordenar_por("id_receptor","DESC")->agrupar_por("nombre");
    $receptor = $receptor->obtener("receptor");
    while($r = $receptor->fetch_array()){
        echo "<tr>
            <td>{$r['id_receptor']}</td>
            <td>{$r['nombre']}</td>
            <td>{$r['colonia']}</td>
            <td>{$r['codigo_postal']}</td>
            <td>{$r['rfc']}</td>
            <td><a href='index.php?action=delete&id=$r[id_receptor]'>borrar</a></td>
            <td><a href='index.php?action=updater&id=$r[id_receptor]'>updater</a></td>
        </tr>";
    }   
}

#function action_adddb () {
#    global $db;
#    $db->definir_campos('nombre');
#   $db->definir_campos('colonia');
#    $db->definir_campos('codigo_postal');
#    $db->definir_campos('rfc');
#    $db->definir_valores('"'.$_POST['Nombre'].'"');
#    $db->definir_valores('"'.$_POST['Colonia'].'"');
#    $db->definir_valores('"'.$_POST['CodigoPostal'].'"');
#    $db->definir_valores('"'.$_POST['rfc'].'"');
#    $db->insertar ('receptor');
#    //header ("Location: index.php");
#    exit;
#}
#

function action_inner(){
global $db;
$db->tablesColumnsInner("profesores.nombre");
$db->tablesColumnsInner("profesores_has_materias.id_materia");
$db->definir_inner("profesores","profesores_has_materias","profesores.id_profesor","profesores_has_materias.id_profesor");
$filas = $db->inner();
echo $filas[1];
foreach ($filas as &$value) {
    echo $value;
}

for($i=0;$i<=count($filas);$i++){
for($j=0;$i<=1;$i++){
echo $filas[$i][$j];
	
}

}

}



function action_delete () {
    global $db;
    $db->definir_donde("id_receptor", $_GET['id']);
    $resultado_borrar = $db->borrar("receptor");
    var_dump($resultado_borrar);
    exit;
}

function printCount(){
    global $db;
    echo  $db->count("rfc","receptor");
}
//Esto comenzará a funcionar cuando la clase BaseDeDatos_class este funcionando
$db = new baseDeDatos ('localhost', 'root', 'root', 'Pruebas');
if ($_GET) {
    $f = "action_".$_GET['action'];
    if (function_exists ($f)) {
        $f();
        //action_delete();
    }
}

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inner</title>
</head>
<body>
	<?php action_inner(); ?>
</body>
</html>