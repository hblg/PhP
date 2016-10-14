<?php
require_once("conexion.php");
try{
    
    $idlista = filter_input(INPUT_GET, 'ID_listas', FILTER_VALIDATE_INT);
    
    $sth = $dbh->prepare("Select * from tareas where ID_listas = $idlista ;");
    
    //Ejecutamos la consulta
    $sth->execute();
    
    
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    
    header('Content-Type: application/json');
    echo json_encode($result);
    
    $dbh=null;
}catch(PDOException $e ){
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>