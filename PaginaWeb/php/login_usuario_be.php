<?php
    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $pass = $_POST['pass'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' AND pass='$pass' ");

    if(mysqli_num_rows($validar_login)>0){
        $_SESSION['usuario'] = $correo;
        header("location: ../catalogo.php");
        exit;
    }else{
        echo '
        <script>
            alert("Usuario no existente");
            window.location = "../index.php";
        </script>
        ';
    }
    

?>