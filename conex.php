<?php


$conex = mysqli_connect("localhost","id17546145_tavo","<Password10>","id17546145_desayuno")or die(mysql_error($mysqli));


insertar($conex);

function insertar($conex){
    $NumControl = $_POST['NumControl'];
    $Nombre = $_POST['Nombre'];
    $Edad = $_POST['Edad'];
    $password = $_POST['password'];

    if($NumControl=="" || $Nombre=="" || $Edad=="" || $password=="")
    {
        ?>
        <?php
        include("pagina-registro-cliente.php");
        ?>
            <center><p color="red">**Por favor llene todos los campos**</p></center>
        <?php
    }
    else
    {
        $consulta = "INSERT INTO usuario(NumControl, Nombre, Edad, password)
    VALUES ('$NumControl', '$Nombre', '$Edad', '$password')";
    $resultado = mysqli_query($conex,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas)
    {
        header("location:pagina-registro-cliente.php");
    }
    else
    {
        ?>
        <?php
        include("pagina-login.php");
        ?>
        <?php
    }

    mysqli_free_result($resultado);
    mysqli_close($conex);
    }
}
?>
