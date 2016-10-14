<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilos.css" type="text/css" />
    
    </head>
    <body>

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
<form action="myList.php" method="post" >
     <div class="form-group" >
         <label for="inputUser" class="text-info">Usuario</label>
         <input type="text" class="form-control"  placeholder="Usuario" id="user">
     </div>
     <div class="form-group">
         <label for="inputPassword" class="text-info">Contraseña</label>
         <input type="password" class="form-control" placeholder="Contraseña" id="pass">
     </div>
     
     <button type="submit" class="btn btn-success">Entrar</button>
     <br/>
</form>
    </body>
</html>