<?php
require_once("conexion.php");
try{
    
    $idtarea = filter_input(INPUT_POST, 'ID', FILTER_VALIDATE_INT);
    
    $sth = $dbh->prepare("DELETE FROM tareas where ID=$idtarea");
    
    //Ejecutamos la consulta
    $sth->execute();
    
    
    
    $mensajerror = [
        "msg" => "Tarea eliminda"
        ];
    header('Content-Type: application/json');
    echo json_encode($mensajerror);
    
}catch(PDOException $e ){
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>