<?php
require_once("conexion.php");
try{

    $idlista = filter_input(INPUT_POST, 'ID', FILTER_VALIDATE_INT);
    
    $sth = $dbh->prepare("DELETE FROM listas where ID=$idlista");
    
    $sth->execute();
    
    
    
    $mensajerror = [
        "msg" => "Lista Eliminada correctamente"
        ];
    header('Content-Type: application/json');
    echo json_encode($mensajerror);
    
}catch(PDOException $e ){
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>