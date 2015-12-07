<?php
require_once('BaseDeDatos_class.php');
error_reporting(E_ALL);
$action = 'adddb';
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
        </tr>";
    }   
}

function action_adddb () {
    global $db;
    $db->definir_campos('nombre');
    $db->definir_campos('colonia');
    $db->definir_campos('codigo_postal');
    $db->definir_campos('rfc');
    $db->definir_valores('"'.$_POST['Nombre'].'"');
    $db->definir_valores('"'.$_POST['Colonia'].'"');
    $db->definir_valores('"'.$_POST['CodigoPostal'].'"');
    $db->definir_valores('"'.$_POST['rfc'].'"');
    $db->insertar ('receptor');
    //header ("Location: index.php");
    exit;
}

function action_updater(){
    global $db;
    $db->definir_Lugar('id_receptor',$_GET['id_receptor']);
    $db->definir_Cambios('nombre','"'.$_GET['Nombre'].'"');
    $db->definir_Cambios('colonia','"'.$_GET['Colonia'].'"');
    $db->definir_Cambios('codigo_postal','"'.$_GET['CodigoPostal'].'"');
    $db->definir_Cambios('rfc','"'.$_GET['rfc'].'"');
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
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <title>RECEPTORES</title>
</head>
<body>
<center>
<h3>Receptores</h3>
<table width='50%'>
    <tr >
        <th>ID</th>
        <th>Nombre</th>
        <th>Colonia</th>
        <th>Codigo Postal</th>
         <th>RFC</th>
    </tr>
    <?php printReceptors();?>
</table>
<div>
    <form action='index.php?action=<?php echo $action?>' method=post>
    <input type=text name='Nombre' >
    <input type=text name='Colonia' >
    <input type=text name='CodigoPostal' >
    <input type=text name='rfc' >
   <input type=submit value='Nuevo Receptor'></td>
<form>

</div>





</center>
</body>
</html>