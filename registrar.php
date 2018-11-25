<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/registrar.css" rel="stylesheet">
    <title>Registrarse</title>
</head>

<body>
    <div id="logo">
        <a href="index.php"><img src="img/logo3.png" alt="logo"></a>
    </div>
    <h1>Crear cuenta</h1>
    <div id="contenido">
        <div id="registro">
            <form method="POST">
                <label>Nombre(s)</label>
                <input name="nombre" type="text">
                <label>Apellidos</label>
                <input name="apellido" type="text">
                <label>E-mail</label>
                <input name="correo" type="email">
                <label>Contraseña</label>
                <input name="password1" type="password">
                <label>Confirmar contraseña</label>
                <input name="password2" type="password">
                <input id="regis" type="submit" value="Registrarse">
            </form>
        </div>
        <div>
            <!--button id="boton-registrar">Registrar</button-->
        </div>
    </div>
</body>

</html>

<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    include('Basededatos.php');
    $bd = new BaseDatos();
    $bd->conectar();
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['correo'];
    $password1 = $_POST['password1'];
    $password2= $_POST['password2'];

      if($password1==$password2)
      {
        if ($nombre!= null)   
          { 
            $bd->crearusuario($nombre, $apellido, $email, $password1);
            echo ' <br>' .'Usuario Agregado';
            header('Location: login.php');
          }
          else
          {
            echo'<br>';
            echo 'Escribe tu nombre de usuario';
          }
      }
      else{
        echo'<br>';
        echo 'La contraseña no coincide';
      }
    $bd->desconectar();

}
                
?>