<?php
require_once("conexion.php");
try{
    
    $idtarea = filter_input(INPUT_POST, 'ID', FILTER_VALIDATE_INT);
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $hecho = $_POST['hecho'];
    
    $sth = $dbh->prepare("UPDATE tareas SET nombre='$nombre', descripcion='$descripcion', hecho=$hecho WHERE ID=$idtarea");
    $sth->execute();
    
    
    
    $mensajerror = [
        "msg" => "Tarea actualizada"
        ];
    header('Content-Type: application/json');
    echo json_encode($mensajerror);
    
}catch(PDOException $e ){
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>