<?php
$config = include 'configuration.php';


error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);


try{
    $conexion = new PDO
    ('mysql:host=' . $config['db']['host'], $config ['db']['user'], $config ['db']['pass'], $config ['db']['options']);
    $sql = file_get_contents("bd/pj.sql");

    $conexion -> exec($sql);

    echo "La base de datos se creó con éxito";
} catch(PDOException $error){
    echo $error -> getMessage();
}
?>