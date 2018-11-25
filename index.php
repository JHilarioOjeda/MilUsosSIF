<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/principal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Mil Usos</title>
</head>

<body>
    <div id="contenedor">

        <div id="encabezado">
            <a id="logo" href="index.php"><img src="img/logo3.png" alt="logo"></a>
            <div id="busqueda">
                <div class="columna">
                    <input id="buscar" placeholder="Buscar..." type="text">
                    <button><i id="boton-busqueda" class="fa fa-search w3-xlarge"></i></button>
                </div>
                <div class="columna">
                    <label id="iniciar-sesion" class="titulo">Iniciar sesión</label>
                    <label id="registrarse" class="titulo"> Registrarse</label>
                </div>
            </div>
        </div>

        <div id="menu">
            <ul>
                <li class="titulo" id="nombre-menu">Categorias</li>
                <li>Albañileria</li>
                <li>Electricidad</li>
                <li>Plomeria</li>
                <li>Carpinteria</li>
            </ul>
        </div>

        <div id="contenido">
            <div class="publicaciones">
                <div>
                    <label>Plomeria</label>
                </div>
                <div>
                    <a href="publicacion.html"><img class="foto-publicacion" src="img/logo.jpg" alt="logo"></a>
                </div>
                <div>
                    <div>
                        <label>$200</label>
                    </div>
                </div>
            </div>

            <div class="publicaciones">
                <div>
                    <label>Albañileria</label>
                </div>
                <div>
                    <a href="publicacion.html"><img class="foto-publicacion" src="img/logo.jpg" alt="logo"></a>
                </div>
                <div>
                    <div>
                        <label>$200</label>
                    </div>
                </div>
            </div>

            <div class="publicaciones">
                <div>
                    <label>Electricidad</label>
                </div>
                <div>
                    <a href="publicacion.html"><img class="foto-publicacion" src="img/logo.jpg" alt="logo"></a>
                </div>
                <div>
                    <div>
                        <label>$200</label>
                    </div>
                </div>
            </div>

            <div class="publicaciones">
                <div>
                    <label>Carpinteria</label>
                </div>
                <div>
                    <a href="publicacion.html"><img class="foto-publicacion" src="img/logo.jpg" alt="logo"></a>
                </div>
                <div>
                    <div>
                        <label>$200</label>
                    </div>
                </div>
            </div>

            <div class="publicaciones">
                <div>
                    <label>Carpinteria</label>
                </div>
                <div>
                    <a href="publicacion.html"><img class="foto-publicacion" src="img/logo.jpg" alt="logo"></a>
                </div>
                <div>
                    <div>
                        <label>$200</label>
                    </div>
                </div>
            </div>
        </div>

        <div id="pie"></div>
    </div>
    <script src="js/principal.js"></script>
</body>

</html>