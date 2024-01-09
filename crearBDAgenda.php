<?php

$dsn="mysql:host=localhost";
$usuario="ernestoea";
$clave="1234";
try{
    $bd=new PDO($dsn,$usuario,$clave);
    $nombreBD="Agenda";
    $nombreTabla="Persona";
    $sql="CREATE DATABASE $nombreBD CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci";
    if($bd->query($sql)){
        echo "<p>Base de datos $nombreBD creada correctamente</p>";
        $crearTabla="CREATE TABLE $nombreTabla(
            id INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
            nombre VARCHAR(20),
            apellidos VARCHAR(50),
            PRIMARY KEY(id)
            )";
            $dsn="mysql:dbname=agenda;host=127.0.0.1";
            $bd=null;
            $bd=new PDO($dsn,$usuario,$clave);
        if($bd->query($crearTabla)){
            echo "<p>Tabla $nombreTabla creada correctamente</p>";
        }
}else{
        echo "<p>Error al crear la base de datos. </p>";
    }
    $bd=null;
}catch(PDOException $e){
    echo "Falló la conexión: " . $e->getMessage();
}


?>