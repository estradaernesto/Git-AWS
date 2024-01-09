<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <a href=""></a>
</head>
<body>
    <h1>Personas</h1>
    <?php
    $dsn="mysql:dbname=agenda;host=127.0.0.1";
    $usuario="ernestoea";
    $clave="1234";
    try{
    $bd=new PDO($dsn,$usuario,$clave);
    $sql="SELECT * FROM PERSONA";
    $resultado=$bd->query($sql);
    echo "<table border=\"1\">";
    echo "<tr><th>id</th><th>Nombre</th><th>Apellidos</th></tr>";
    while($persona=$resultado->fetch()){
        echo "<tr>";
        echo "<td>".$persona["id"]."</td>";
        echo "<td>".$persona["nombre"]."</td>";
        echo "<td>".$persona["apellidos"]."</td>";
        echo"</tr>";
    }
    $bd=null;
    echo"</table>";
    echo "<p><a href=\"principal.php\">Inicio</a>";
    }
    catch(PDOException $e){
        echo "Falló la conexión: " . $e->getMessage();
    }
 
    ?>
</body>
</html>