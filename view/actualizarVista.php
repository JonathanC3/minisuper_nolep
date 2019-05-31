<?php
    include_once 'public/header.php';
?>
<div>
    <form  method="post" action="?controlador=Item&accion=actualizar">
        <div>
            <label for="name">Ingrese el código</label>
            <!--se necesita el name para que haga el post-->
            <input type="text" id="codigo" name="codigo" placeholder="codigo" required="true"/>
        </div>
        
        <div>
            <input type="submit" value="Actualizar">
        </div>
        <div>
            <label for="name">Nombre a modificar</label>
            <input type="text" id="nombre" name="nombre" placeholder="nombre" required="true"/>
        </div>
        <div>
          
        <label><?php echo $vars ?></label>  
            
        </div>
    </form>
</div>
<?php
    include_once 'public/footer.php';
?>
