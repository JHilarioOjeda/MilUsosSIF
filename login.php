

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/login.css" rel="stylesheet">
    <title>Iniciar sesión</title>
</head>

<body>
    <div id="logo">
        <a href="index.php"><img src="img/logo3.png" alt="logo"></a>
    </div>
    <h1>Iniciar sesión</h1>
    <form id="contenido" method="POST">
        <div>
            <label>Correo electronico</label>
        </div>
        <div>
            <input name="correo" type="email">
        </div>
        <div>
            <label>Contraseña</label>
        </div>
        <div>
            <input type="password" name="password">
        </div>
        <div>
            <!--button id="boton-iniciar">Iniciar</button-->
            <input id="boton-iniciar" type="submit" value="Iniciar">
        </div>
    </form>

</body>

</html>

<?php 
session_start();

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $email = $_POST['correo'];
        $password = $_POST['password'];
    
        $host="localhost";
        $port="	3306";
        $dbname="milusos";
        $dsn="mysql:host=".$host.";port=".$port.";dbname=".$dbname;
        $username="root";
        $passwd="root";

        try{
            $bd = new PDO($dsn, $username, $passwd);
            $consulta = "SELECT * FROM usuario WHERE email='$email'";
            $sentencia=$bd->prepare($consulta);
            $resultado=$sentencia->execute(array(':email'=>$email));
            
            $usuario=$sentencia->fetchObject();
            
            $_SESSION['id']=$usuario->idusuario;

            if($resultado===false)
            {
                die('UPS!, me equivoque en SQL! o el servidor esta ocupado');
            }
            if($usuario === false){
                echo 'correo o contraseña incorrecta';
            }
            else if(password_verify($password, $usuario->password)) {
                $_SESSION['usuario']=$email;
                header('Location: cuenta.php');
            }
        }
        catch(PDOException $excepcion){
            echo 'No se pudo conectar con la base de datos...';
            echo $excepcion->getMessage();
        }
    }
?>