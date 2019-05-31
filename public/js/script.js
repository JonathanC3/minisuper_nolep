            function realizarProceso(usuario, contrasenna){
               
               var parametros={
                  "usuario":usuario,
                  "contrasenna":contrasenna
               };
               $.ajax(
                       {
                         data: parametros,
                         url: '?controlador=Item&accion=proceso',
                         type: 'post',
                         beforeSend: function () {
                            $("#mensaje").html("Procesando, \n\ espere por favor...");
                         },
                         success: function (response) {
                             $("#mensaje").html(response);
                         }
                       }
                   );
                
            } // realizarProceso
