<div id="contenido">
            <div class="datos">
                <form method="POST">
                    <div>
                        <label>Nombre(s)</label>
                        <input id="nombre" type="text" name="nombre">
                    </div>
                    <div>
                        <label>Apellidos</label>
                        <input id="apellido" type="text" name="apellido">
                    </div>
                    <div>
                        <label>Edad</label>
                        <input id="edad" type="text" name="edad">
                    </div>
                    <div>
                        <label>Calle</label>
                        <input id="calle" type="text" name="calle">
                    </div>
                    <div>
                        <label>Colonia</label>
                        <input id="colonia" type="text" name="colonia">
                    </div>
                    <div>
                        <label>Código postal</label>
                        <input id="codigo" type="text" name="CP">
                    </div>
                    <label >_</label>
                    <input type="submit" value="Actualizar"> 
                </form>
            </div>
</div>

<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    include('Basededatos.php');
    $bd = new BaseDatos();
    $bd->conectar();

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $edad = $_POST['edad'];
    $calle = $_POST['calle'];
    $colonia= $_POST['colonia'];
    $cp= $_POST['CP'];
    $email=$_SESSION['usuario'];

    $bd->actualizarusuario($nombre, $apellidos, $edad, $calle, $colonia, $cp, $email);
          
    $bd->desconectar();

}
                
?>