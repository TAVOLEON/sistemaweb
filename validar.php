<?php
    $NumerodeControl = $_POST['numerodecontrol'];
    $contraseña = $_POST['contraseña'];
    session_start();
    $_SESSION['usuario'] = $usuario;

    include('db.php');

    $consulta = "SELECT * FROM usuario WHERE Numcontrol = '$NumerodeControl' and password='$contraseña'";
    $resultado = mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas)
    {
        header("location:pagina-principal.php");
    }
    else
    {
        ?>
        <?php
        include("pagina-login.php");
        ?>
            <center><p>ERROR EN LA AUTENTICACION</p></center>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);

