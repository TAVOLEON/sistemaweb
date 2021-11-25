<html> 
<head>
    <title>Sistema WEB Desayunos</title> 
    <!--------IMPORTACION DE GOOGLE FONTS-------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!--------IMPORTACION DE BOOTSTRAP-------->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--------IMPORTACION DE ESTILOS-------->
    <link rel="stylesheet" type="text/css" href="estilos-pagina-login.css">
    <link rel="stylesheet" href="estilos-slider.css">
</head> 

<!--------ENCABEZADO DE LA PAGINA LOGIN-------->
<header class="container-fluid header">
    <center>
    <table>
        <tr>
            <td>
                <img src="https://paginadefault.000webhostapp.com/sistema/Imagenes/imagen%20desayuno.png" >
            </td>
            <td width="400px">
                <h1>Sistema de Desayunos</h1>
            </td>
            <td text-align="center" width="200px">
                <p>Registrese o Inicie Sesion</p>
            </td>
            <td width="120px"><button onclick="location.href='pagina-registro-cliente.php'" class="button"  type="button" name="registrarse">Registrarme</button></td>
            <td>
                <form action= "validar.php" method="post">
                    <table>
                        <tr>
                            <td>Numero de Control: </td>
                            <td class="controls"><input type="text" name="numerodecontrol" placeholder="8 digitos"></td>
                        </tr>
                        <tr>
                            <td>Contraseña: </td>
                            <td class="controls"><input type="password" name="contraseña" placeholder="Ingrese su Contraseña"></td>
                            <td><input type="submit" value="Ingresar"></td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
       
    </table>
    </center>
</header>
<!---------CUERPO DE LA PAGINA---------------->
<body class="container-fluid body"> 
        <center>
            <h1 class="titulos">Ingresa para poder disfrutar de nuestros ricos desayunos</h1>
            <div id="hcg-slider-1" class="hcg-slider">
            <div class="hcg-slide-container">
	            <div class="hcg-slider-body">
		        <a class="hcg-slides animated" style="display:block">
			    <span class="hcg-slide-number">1/4</span>
			    <img src="https://paginadefault.000webhostapp.com/sistema/sliderLogin/imagenes/img1.jpg" alt="Image 1">
			    <span class="hcg-slide-text">Image 1</span>
		        </a>
	            </div>
            </div>
            <div class="hcg-slide-dot-control"></div>
            </div>
        </center>
    <script type="text/javascript" src="script-slider.js"></script>
    <!--------PIE DE PAGINA------------>
    <footer class="footer">
    <center><p>Creado por Gustavo Casiano Leon, Saul Davila Vazquez All rights reserved.</p></center>
    </footer>
    <!--------SCRIPT DE BOOTSTRAP------------>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>





