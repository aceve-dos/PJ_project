<?php
//Da referencia al guardado del usuario al registrarse en la base de datos.

//Report errores
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);

include("conexion.php");


$email = $_POST["email"];
$contraseña = $_POST["contraseña"];

//if de consulta a la BD
if(isset($_POST["ingreso"])){
    $sql_consulta = "SELECT * from usuario where email = '$email' and contraseña = '$contraseña'";
    $query = mysqli_query($conn, $sql_consulta);
    $numrow = mysqli_num_rows($query);
}





//REGISTRO DE USUARIO GUARDADO EN EL BD
if (isset($_POST['registro'])){
    $sqlgrabar = "INSERT INTO usuario(id_usuario, email, contraseña) values (NULL, '$email', '$contraseña')";

    //conexion con bd y alerta de registro
    if(mysqli_query($conn, $sqlgrabar)){
        echo "<script> alert ('usuario registrado con exito: $email'); widow.location = login.html' </script>"; header('location:login.html');
    }else{
        echo "Error" . $sql . "<br>".mysqli_error($conn);
    }
}
?>