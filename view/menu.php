 

<?php
    include_once 'public/header.php';
?>
<h2><?php
 	if(!isset($_SESSION['activo'])){

 	}else{
        $_SESSION['activo'];
    } ?></h2>

<div>
	<h3>Ingrese los datos del nuevo usuario</h3>
	<div>
        <label for="name" >Nombre del usuario</label>
        <input type="text" id="name" name="name" placeholder="nombre" required="true"/>
    </div>
    <div>
        <label for="password">Contrasenna</label>
        </br>
        <input type="password" id="password" name="password" placeholder="contrasenna" required="true"/>
    </div>
    <div>
        <input type="submit" value="Registrar Usuario" method="post"><button type="button" class="btn btn-danger">Registrar Cliente</button>
    </div>
</div>
<?php
    include_once 'public/footer.php';
?>
