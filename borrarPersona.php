<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Borrar persona</h1>
    <?php
    if($_SERVER["REQUEST_METHOD"] =="POST"){
        $dsn="mysql:dbname=agenda;host=127.0.0.1";
        $usuario="ernestoea";
        $clave="1234";
        $idPersona=$_POST["id"];
        try{
            $bd=new PDO($dsn,$usuario,$clave);
            $sql ="DELETE FROM PERSONA WHERE id=\"$idPersona\";";
            if($bd->query($sql)){
                echo "La persona con id: $idPersona se ha eliminado correctamente";
            }else{
                echo "La persona con id: $idPersona no se ha eliminado correctamente";
            }
           
       }catch(PDOException $e){
    echo "Falló la conexión: " . $e->getMessage();
}
$bd=null;
    }
        echo"<form action=\"borrarPersona.php\" method=\"post\">";
        echo"  <p><label>Id:<input type=\"number\" name=\"id\"></label></p>";
        echo"<p><input type=\"submit\" name=\"enviar\" value=\"Enviar\"></p>
        </form>";
    echo "<p><a href=\"principal.php\">Inicio</a>";
    ?>
    
        

</body>
</html>