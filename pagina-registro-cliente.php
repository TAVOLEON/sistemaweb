<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="estilos-pagina-registro-cliente.css">
  <!--------IMPORTACION DE GOOGLE FONTS-------->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <title>Formulario Registro</title>
</head>
<body>
    


<form action="conex.php" method="post">    
  <section class="form-register">
    <center><h4>Registro de clientes</h4></center>
    <input class="controls" type="text" name="NumControl" id="NumControl" placeholder="Ingrese su n.control">
    <input class="controls" type="text" name="Nombre" id="Nombre" placeholder="Ingrese su Nombre">
    <input class="controls" type="text" name="Edad" id="Edad" placeholder="Ingrese su edad">
    <input class="controls" type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
    <button class="button" onclick="location.href='pagina-login.php'"><input class="button" type="button" name="enviar" value="Registrar"></button>
    
   
   <!-- <p><a href="#">¿Ya tengo Cuenta?</a></p>
  </section> -->
</form>
</body>
</html>

