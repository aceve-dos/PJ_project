<?php
//Error
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

include ("conexion.php");


//Formulario datos

$email = $_POST["email"];
$contraseña = $_POST["contraseña"];


//Consulta
if(isset($_POST["ingreso"])){
    $sql_consulta = "SELECT * FROM usuario WHERE email = '$email' AND contraseña = '$contraseña'";
    $query = mysqli_query($conn, $sql_consulta );
    

    session_start();
    $_SESSION['id_usuario'] = $row['id_usuario'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['contraseña'] = $row ['contraseña'];


} else{
    echo "<script> alert ('Usuario no existe'); widow.location = 'login.html'</script>";
}

//R de usuario
if (isset($_POST['registro'])){
    $sql_grabar = "INSERT INTO usuario (id_usuario, email, contraseña) values (NULL, '$email', '$contraseña')";

    if(mysqli_query($conn, $sql_grabar)){
        echo "<script>alert('Usuario registrado: $email'); widow.location = 'login.html' </script>";
    }else {
        echo "Error" . $sql."<br>".mysqli_error($conn); 
    }
}