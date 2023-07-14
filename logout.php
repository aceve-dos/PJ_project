<?php
//Deslog con report de error
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

//Parametro session para el inicio
session_start();
session_destroy();

//redirecciona al inicio del login
header("location: login.html");

?>