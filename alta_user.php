<?php
session_start();


include 'function.php';

csrf();
if (isset($_POST['submit'])&& !hash_equals($_SESSION['csrf'], $_POST['csrf'])){
    die();
}

$error = false;
$config = include 'config.php';

?>