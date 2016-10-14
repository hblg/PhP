<?php 
    $listas = strip_tags( $_POST['listas'] );

      require("mysql/conexion.php"); 
      
    mysql_query("INSERT INTO listas VALUES ('', '$ID', '$nombre')");

    $query = mysql_query("SELECT * FROM tasks WHERE id='$id' and nombre='$nombre'");

    while( $row = mysql_fetch_assoc($query) ){
 $lista_id = $row['id'];
  $lista_name = $row['nombre'];
    }

    mysql_close();

    echo '<li><span>'.$lista_name.'</span><img id="'.$lista_id.'" class="delete-button" width="10px" src="images/close.svg" /></li>';
?>