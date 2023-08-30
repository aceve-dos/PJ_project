<?php 
session_start();


include 'function.php';

csrf();
if (isset($_POST['submit'])&& !hash_equals($_SESSION['csrf'], $_POST['csrf'])){
    die();
}

$error = false;
$config = include 'config.php';

try {
    $dsn = 'mysql:host=' . $config ['db']['host'] . ';dbname=' . $config['db']['name']; $conexion = new PDO ($dsn, $config ['db']['user'], $config ['db']['pass'], $config ['db']['options']);
}
?>