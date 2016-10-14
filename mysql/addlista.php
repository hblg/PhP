<?php
require_once("conexion.php");
try{
    
    $nombre = $_POST['nombre'];
    
    //Consulta para ejecutar sql.
    $sth = $dbh->prepare("INSERT INTO listas (nombre) VALUES ('$nombre')");
    
    //Ejecutar  consulta
    $sth->execute();
    
    
    
    $mensajerror = [
        "msg" => "Lista Insertada"
        ];
    header('Content-Type: application/json');
    echo json_encode($mensajerror);
    
}catch(PDOException $e ){
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>