<div id="contenido">
            <form class="datos" method="POST">
                <legend>Cambio de contraseña</legend>
                <div>
                    <label>Contraseña actual</label>
                    <input id="actual" type="password" name="actual">
                </div>
                <div>
                    <label>Nueva contraseña</label>
                    <input id="nueva" type="password" name="nueva">
                </div>
                <div>
                    <label>Repetir</label>
                    <input id="nueva2" type="password" name="nueva2">
                </div>
                <div>
                    <label >_</label>
                    <input type="submit" value="Actualizar"> 
                </div>
            </form>
</div>

<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    include('Basededatos.php');
    $bd = new BaseDatos();
    $bd->conectar();

    $contra_actual = $_POST['actual'];
    $contra_nueva1 = $_POST['nueva'];
    $contra_nueva2 = $_POST['nueva2'];
    $email= $_SESSION['usuario'];


    $bd->consultapsw($email,$contra_actual,$contra_nueva1,$contra_nueva2);
          
    $bd->desconectar();

}
                
?>