<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Proyecto 2 lenguajes</title>
        <meta name="description" content="Minisuper Lompe"/>
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="public/css/estilo.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script type="text/javascript" src="public/js/jquery-3.3.1.js"></script>
        <!--<script>
          function realizarProceso(user, pass){
              var parametros={
                  "user":valor1,
                  "pass":valor2
               };  
              if($.trim(user).length > 0 && $.trim(pass).length > 0){
                $.ajax({
                  url:"?modelo=Item&accion=login",
                  type:"POST",
                  data: parametros,
                  cache:"false",
                  beforeSend:function() {
                    $('#login').val("Conectando...");
                  },
                  success:function(data) {
                    $('#login').val("Login");
                    if (data=="1") {
                      $(location).attr('href','indexView.php');
                    } else {
                      $("#result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> las credenciales son incorrectas.</div>");
                    }
                  }
                });
              };
            }
    </script>-->
    </head>   
    <body>
        <header>
            <h1>
                <a href="?controlador=acciondefault">
                    <img alt="Curso Lenguajes" src="public/img/logo.png"/>
                </a>
            </h1>
            <nav>
                <ul>
                    <li><a href="?controlador=Item&accion=registrarVista">Registrar</a></li><!-- llama a la pantalla por defecto -->
                    <li><a href="?controlador=Item&accion=listar">Listar</a></li>
                    <li><a href="?controlador=Item&accion=actualizarVista">Actualizar</a> </li>
                </ul>
            </nav>
        </header>
        
        
               