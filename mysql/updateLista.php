<?php
require_once("conexion.php");
try{
    
    $idlista = filter_input(INPUT_POST, 'ID', FILTER_VALIDATE_INT);
    $nombre = $_POST['nombre'];
    
    $sth = $dbh->prepare("UPDATE listas SET nombre='$nombre' WHERE ID=$idlista");
    //Ejecutamos la consulta
    $sth->execute();
    
    
    
    $mensajerror = [
        "msg" => "Lista actualizada"
        ];
    header('Content-Type: application/json');
    echo json_encode($mensajerror);
    
}catch(PDOException $e ){
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>