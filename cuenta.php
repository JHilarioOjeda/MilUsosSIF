<!DOCTYPE html>
<html lang="es">

<?php
session_start();

if(!isset($_SESSION['usuario']))
{
    header('Location: login.php' );
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
    <link href="css/cuenta.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Mi cuenta</title>
</head>

<body>
    <div id="contenedor">

        <div id="encabezado">
            <a id="logo" href="index.php"><img src="img/logo3.png" alt="logo"></a>
            <h1>Mi cuenta</h1>
            <a href="Logout.php">Salir de <?php echo $_SESSION['usuario']; ?></a>
        </div>

        <div id="menu">
            <ul>
                <li id="nombre-menu" class="titulo">Menu</li>
                <?php
                if($_SESSION['id']==6)
                  include('adm1.php');
                ?>
                <li class="titulo">Cuenta</li>
                <li id="mi-cuenta">Mi cuenta</li>
                <li id="datos-personales">Datos personales</li>
                <li id="datos-cuenta">Datos de la cuenta</li>
                <li id="seguridad">Seguridad</li>
                <li class="titulo">Servicios</li>
                <li id="publicacion">Crear publicación</li>
                <li id="mis-publicaciones">Mis publicaciones</li>
                <li class="titulo">Servicios solicitados</li>
                <li id="calificar">Calificar</li>
            </ul>
        </div>

       <?php
            if (isset($_GET["w1"])) {
                $phpVar1 = $_GET["w1"];
             
                if($phpVar1==1)
                { 
                   include('micuenta.php');
                           
                }
                else if($phpVar1==2)
                {
                    include('datospersonales.php');
                }
                else if($phpVar1==3)
                {
                    include('datoscuenta.php');
                }
                else if($phpVar1==4)
                {
                    include('seguridad.php');
                }
                else if($phpVar1==5)
                {
                    include('crearpublicacion.php');
                }
                else if($phpVar1==6)
                {
                    include('mispublicaciones.php');
                }
                else if($phpVar1==7)
                {
                    include('calificar.php');
                }
                else if($phpVar1==8)
                {
                    include('usuarios.php');
                }
                else if($phpVar1==9)
                {
                    include('publicaciones.php');
                }


            } 
            else {
                include('micuenta.php');
            }
       ?>
        
        <div id="pie"></div>
    </div>
    <script src="js/micuenta2.js"></script>
</body>

</html>

 
   