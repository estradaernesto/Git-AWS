<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <a href=""></a>
</head>
<body>
    <h1>Buscar Persona</h1>
    <?php
     if($_SERVER["REQUEST_METHOD"] =="POST"){
    $dsn="mysql:dbname=agenda;host=127.0.0.1";
    $usuario="ernestoea";
    $clave="1234";
    $nombrePersona=$_POST["nombre"];
    try{
    $bd=new PDO($dsn,$usuario,$clave);
    $sql="SELECT * FROM PERSONA Where nombre=\"$nombrePersona\";";
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
    }
    catch(PDOException $e){
        echo "Falló la conexión: " . $e->getMessage();
    }
}else{
    echo"<form action=\"buscarPersona.php\" method=\"post\">";
    echo"  <p><label>Nombre:<input type=\"text\" name=\"nombre\"></label></p>";
    echo"<p><input type=\"submit\" name=\"enviar\" value=\"Enviar\"></p>
    </form>";
}
echo "<p><a href=\"principal.php\">Inicio</a>";
    ?>
</body>
</html>