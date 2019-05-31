<?php
    include_once 'public/header.php';
    
?>
    <div class="row">
        <h2 style="color: black">Escoja que requiere hacer</h2>
        <div class="col-sm-6">
            <div class="thumbnail">
                <h4 style="text-align: center; color: #000;">Administrativo</h4>
                <img alt="Curso Lenguajes" src="public/img/login.png" />
                <a href="?controlador=Item&accion=administrativoView" class="link-item">adm</a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="thumbnail">
                <h4 style="text-align: center; color: #000;">Comprar</h4>
                <img alt="Curso Lenguajes" src="public/img/pelon.jpg"/>
            </div>
        </div>
    </div>

<?php
    include_once 'public/footer.php';
?>


