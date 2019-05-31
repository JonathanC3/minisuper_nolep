
<?php include_once 'public/header.php'; 
    if(!isset($_SESSION['activo'])){

    }else{
        $_SESSION['activo'];
    } ?>
?>

    <div class="row">
        <h2 style="color: black">Ingrese las credenciales del Usuario</h2>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <form  method="post" action="?controlador=User&accion=login" style="color: black">
            
                <div>
                    <label for="nombre" >Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="nombre" required="true"/>
                </div>
                <div>
                    <label for="contrasenna">Contrasenna</label>
                    </br>
                    <input type="password" id="contrasenna" name="contrasenna" placeholder="contrasenna" required="true"/>
                </div>
                <div>
                    <input type="submit" value="Registrar" method="post">
                </div>
            </form>
        </div>
        <div class="col-sm-4"></div>
    </div>
</body>

