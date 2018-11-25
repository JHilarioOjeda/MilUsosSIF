<?php

class BaseDatos
{
    private $conexion;
    private $dsn;
    private $username;
    private $passwd;

    public function __construct()
    {
        $host="localhost";
        $port="	3306";
        $dbname="milusos";
        $this->dsn="mysql:host=".$host.";port=".$port.";dbname=".$dbname;
        $this->username="root";
        $this->passwd="root";
    }

    public function __destruct()
    {
        $this->desconectar();
    }

    public function conectar()
    {
        try
        {
            $this->conexion = new PDO($this->dsn, $this->username, $this->passwd);
        }
        catch(PDOException $excepcion)
        {
            echo 'No se pudo conectar con la base de datos...';
            echo $excepcion->getMessage();
        }
    }

    public function crearpublicacion($idUsuario,$nomP,$Precio,$Descri)
    {
        $sql ="INSERT INTO `publicacion` (`idpublicacion`, `idusuario`, `nombre`, `precio`, `descripcion`, `imagen`, `activo`) VALUES (NULL,:idUsuario,:nomP,:Precio,:Descri,null,1);";
        $sentencia = $this->conexion->prepare($sql);
        $res=$sentencia->execute(array(':idUsuario'=> $idUsuario, ':nomP'=> $nomP, ':Precio'=> $Precio, ':Descri'=> $Descri) );
       //$resultado = $this->conexion->exec($sql);//modifica la base de datos regresa un numero entero que dice cuantas fueron modificadas
       var_dump($res);
    }
    
    public function crearusuario($nombre, $apellidos, $email, $password)
    {
        $sql ="INSERT INTO `usuario` (`idusuario`, `nombre`, `apellidos`, `edad`, `imagen`, `calle`, `colonia`, `codigopostal`, `email`, `password`, `telefono`, `paginaweb`, `activo`) VALUES (NULL,:nombre,:apellidos,1, null,null,null,null,:email,:password,null,null,1);";
        $sentencia = $this->conexion->prepare($sql);
        $res=$sentencia->execute(array(':nombre' => $nombre, ':apellidos' => $apellidos, ':email' => $email,  ':password' => password_hash($password,PASSWORD_DEFAULT) ) );
       //$resultado = $this->conexion->exec($sql);//modifica la base de datos regresa un numero entero que dice cuantas fueron modificadas
       var_dump($res);
    }

    public function actualizarusuario($nombre, $apellidos, $edad, $calle, $colonia, $cp, $email)
    {
        $sql = "UPDATE `usuario` SET `nombre` = :nombre, `apellidos`= :apellidos, `edad` = :edad, `calle` = :calle, `colonia` = :colonia, `codigopostal` = :cp  WHERE `email` = :email";
        $sentencia = $this->conexion->prepare($sql);
        $res=$sentencia->execute(array(':nombre' => $nombre,':apellidos'=>$apellidos, ':edad'=>$edad, ':calle'=>$calle, ':colonia' => $colonia, ':cp' => $cp, ':email' => $email));
    }

    public function consultamicuenta($email)
    {
            $consulta = "SELECT * FROM `usuario` WHERE `email` = :email;";
            $sentencia=$this->conexion->prepare($consulta);
            $resultado=$sentencia->execute(array(':email'=>$email));
            $usuario=$sentencia->fetchObject();
            $_SESSION['nombre']=$usuario->nombre;
            $_SESSION['telefono']=$usuario->telefono;
    }

    public function actualizarcuenta($web, $tel, $email)
    {
        $sql = "UPDATE `usuario` SET `paginaweb` = :web, `telefono`= :tel, `email` = :email WHERE `email` = :email";
        $sentencia = $this->conexion->prepare($sql);
        $res=$sentencia->execute(array(':web' => $web, ':tel' => $tel, ':email' => $email));
    }

    public function consultapsw($email,$contra_actual,$contra_nueva1,$contra_nueva2)
    {
            $consulta = "SELECT * FROM `usuario` WHERE `email` = :email;";
            $sentencia=$this->conexion->prepare($consulta);
            $resultado=$sentencia->execute(array(':email'=>$email));
            $usuario=$sentencia->fetchObject();
            
            if(password_verify($contra_actual, $usuario->password)) 
            {
                if($contra_nueva1==$contra_nueva2)
                {
                    $sql = "UPDATE `usuario` SET `password` = :contra_nueva1 WHERE `email` = :email";
                    $sentencia = $this->conexion->prepare($sql);
                    $res=$sentencia->execute(array(':contra_nueva1' => password_hash($contra_nueva1,PASSWORD_DEFAULT), ':email' => $email));
                    var_dump($res);
                }
            }
    }

    public function desconectar()
    {
        $this->conexion = null;
    }
}

?>