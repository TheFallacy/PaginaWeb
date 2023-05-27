<?php 

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    $query = "INSERT INTO  usuarios(nombre_completo, correo, usuario, pass)
              VALUES ('$nombre_completo','$correo', '$usuario' , '$pass')";
   
   //Verificar que el correo no se repita en la base de datos
    $verificar_correo= mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
    
    if(mysqli_num_rows($verificar_correo)> 0){
        echo '
            <script>
                alert("Este correo ya esta registrado");
                window.location = "../index.php"; 
            </script>
        ';
        exit();
    }

    //Verificar que el USUARIO no se repita en la base de datos
    $verificar_usuario= mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");
    
    if(mysqli_num_rows($verificar_usuario)> 0){
        echo '
            <script>
                alert("Este usuario ya esta registrado");
                window.location = "../index.php"; 
            </script>
        ';
        exit();
    }



    $ejecutar = mysqli_query($conexion , $query);

    if($ejecutar){
        echo '
        <script>
            alart("Usuario almacenado exitosomente");
            window.location ="../index.php";
        </script>
        ';
    }else{ 
        echo '
            <script> 
                alert("Intentalo de nuevo, usuario no almacenado");
                window.location ="../index.php";
            <script>
        ';
    }

    mysqli_close($conexion);
?>