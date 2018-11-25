<div id="contenido">
            <div class="datos">
            <form method="POST">
                    <div>
                        <label>Correo electrónico</label>
                        <input id="email" type="text">
                    </div>
                    <div>
                        <label>Teléfono</label>
                        <input id="telefono" type="text" name="telefono">
                    </div>
                    <div>
                        <label>Página web</label>
                        <input id="pagina" type="text" name="web">
                    </div>
                    <div>
                        <label >_</label>
                        <input type="submit" value="Actualizar" > 
                    </div>
                </form>
            </div>
</div>

<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    include('Basededatos.php');
    $bd = new BaseDatos();
    $bd->conectar();

    $web = $_POST['web'];
    $tel = $_POST['telefono'];
    $email=$_SESSION['usuario'];

    $bd->actualizarcuenta($web, $tel, $email);
          
    $bd->desconectar();

}
                
?>