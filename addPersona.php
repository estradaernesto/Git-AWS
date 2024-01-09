<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Añadir nueva persona</h1>
<?php
 if($_SERVER["REQUEST_METHOD"] =="POST"){
   
    $dsn="mysql:dbname=agenda;host=127.0.0.1";
    $usuario="ernestoea";
    $clave="1234";
    $nombrePersona=$_POST["nombre"];
    $apellidosPersona=$_POST["apellidos"];
    try{
    $bd=new PDO($dsn,$usuario,$clave);
    $sql="INSERT INTO persona(nombre,apellidos) values (\"$nombrePersona\",\"$apellidosPersona\"); ";
    if($bd->query($sql)){
        echo "Fila insertada correctamente";
    }else{
        echo "La fila no ha podido ser insertada";
    }
}catch(PDOException $e){
    echo "Falló la conexión: " . $e->getMessage();
}
    echo"<form action=\"addPersona.php\" method=\"post\">";
    echo"  <p><label>Nombre<input type=\"text\" name=\"nombre\"></label><p>";
    echo "<label>Apellidos:<input type=\"text\" name=\"apellidos\"></label>";
    echo"  <input type=\"submit\" name=\"enviar\" value=\"Enviar\">    </form>";
}
echo "<p><a href=\"principal.php\">Inicio</a>";
    ?>   

</body>
</html>