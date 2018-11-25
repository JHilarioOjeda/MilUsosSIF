<div id="contenido">
    <form method="POST">
             <div id="caracteristicas">
                <img class="foto-publicacion" src="img/logo.jpg" alt="logo">
                <div id="mitad-caracteristicas">
                    <div id="nombre">
                        <label>Nombre del servicio</label>
                        <input type="text" name="nombreP">
                    </div>
                    <div id="precio">
                        <label>Precio</label>
                        <input type="number" name="PrecioP">
                    </div>
                    
                </div>
            </div>
            <div id="nombre-menu"> </div>
            <div id="descripcion">
                <label class="descripcion-titulo">Descripción</label>
                <textarea rows="20" name="Descripcion"></textarea>
            </div>
            <div>
                <label>_</label>
                <input type="submit" value="Guardar">
           </div>
    </form>
</div>

<?php

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        include('Basededatos.php');
        $bd = new BaseDatos();
        $bd->conectar();
        echo 'si';
       $nomP=$_POST['nombreP'];
       $Precio=$_POST['PrecioP'];
       $Descri=$_POST['Descripcion'];
       $idUsuario=$_SESSION['id'];

       $bd->crearpublicacion($idUsuario,$nomP,$Precio,$Descri);
          
       $bd->desconectar();
    }

?>