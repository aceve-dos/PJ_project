<?php

//Report errors

error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "pj";


//conexion mediante mysqli_connect
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//informa si no se pudo conectar a la base de datos

if (!$conn){
    die("No conexion: " .mysqli_connect_error());
}
?>