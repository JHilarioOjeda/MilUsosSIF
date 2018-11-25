<?php
include('Basededatos.php');
$bd = new BaseDatos();
$bd->conectar();
$email=$_SESSION['usuario'];

$bd->consultamicuenta($email);
      
$bd->desconectar();
?>


<div id="contenido">
            <div id="foto">
                <img id="foto-perfil" src="img/logo.jpg" alt="fotoPerfil">
            </div>
            <div id="datos">
                <label>Nombre</label>
                <input type="text" value="<?php echo $_SESSION['nombre']; ?>">
                <label>Correo electronico</label>
                <input type="email" value="<?php echo $_SESSION['usuario']; ?>">
                <label>Telefono</label>
                <input type="text" value="<?php echo $_SESSION['telefono']; ?>">
            </div>
</div>