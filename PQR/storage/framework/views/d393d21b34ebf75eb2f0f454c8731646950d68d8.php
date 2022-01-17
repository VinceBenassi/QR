<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trazabilidad UCT</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Roboto&display=swap" rel="stylesheet">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="sweetalert2.all.min.js"></script>
        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
        <script src="https://unpkg.com/html5-qrcode"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" />
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

        <style>
            html, body {
                color: #636b6f;
                font-family: 'Roboto', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0 auto;
            }

            small{
                text-align: center;
                color: #636b6f;
            }
            
            #principal{
                padding-top: 3%;
                display: block;
                text-align: center;
            }
            .separacion{
                padding: 3%;
                position: relative;
                display: block;
            }

            #video {
                width: 65%;
                height: auto;
                device-height: 5%;
                margin-top: 0 auto;
                margin: 0 auto;
                display: inline-block;
                justify-content: center;
            }

            #code_ambi{
                height: 50px;
                width: 360px;
                margin: 0 auto;
                font-weight: bold;
                font-size: 18pt;
                position: absolute;
                top: 85%;
                left: 4px;
                right: 2px;
            }
            #botones{
                position: absolute;
                top: 95%;
                left: 4px;
                right: 2px;
            }

            #formulario{
                margin-bottom: 40px;
            }
            .hide{
                display: none;
            }

            .swal2-popup {
                font-size: 0.5rem !important;
            }
        </style>

        <script>
            function isMobile(){
                return (
                    (navigator.userAgent.match(/Android/i)) ||
                    (navigator.userAgent.match(/webOS/i)) ||
                    (navigator.userAgent.match(/iPhone/i)) ||
                    (navigator.userAgent.match(/iPod/i)) ||
                    (navigator.userAgent.match(/iPad/i)) ||
                    (navigator.userAgent.match(/BlackBerry/i))
                );
            }
        </script>
    </head>
    
    <body>
        <!-- Esta vista lo unico que hace es retornar error o exito en caso del resultado para ingresar a trazabilidad -->
        <div id="principal" class="content">
            <img src="<?php echo e(asset('UCT_logo.png')); ?>" alt="uct" width="150" height="50">
            <div class="separacion">
                <h2>Módulo de Trazabilidad</h2>
                <small>Bienvenido/a <?php echo e($n_com); ?></small>

                <div class="titulo">Escanéa o ingresa el código QR a registrar</div><br>

                <div id="video" class="col-md-4"></div>

                <div>
                    <form action="<?php echo e(route('qr')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <input class="container form-control text-center col-md-4" type="text" autofocus placeholder="O escriba el código QR" name="code_ambi" id="code_ambi"><br>
        
                        <div>
                            <div id="botones">
                                <button type="submit" name="t_traza" class="btn btn-success" value="ENTRADA">Entrada</button>
                                <button type="submit" name="t_traza" class="btn btn-danger" value="SALIDA">Salida</button>
                            </div>
                            <input value="<?php echo e($estado); ?>" type="text" id="estado" class="form-control hide" disabled>
                            <input value="<?php echo e($nom_ambi); ?>" type="text" id="nom_ambi" class="form-control hide" disabled>
                            <input value="<?php echo e($t_traza); ?>" type="text" id="t_traza" class="form-control hide" disabled>
                        </div><br>
                    </form>
                </div>
            </div> 
            
            <!--  -->
            <script type="text/javascript">
                // Inicializamos una variable la cual reproduce
                // sonido al momento de captar un qr
                var sonido = new Audio('js/sonidito.mp3');

                // Mediante esta sentencia iniciamos la llamada a la cámara
                // mediante el id que esta almacenado en la etiqueta video
                // definiendole un periodo de 5 segundos para capturar un elemento
                function onScanSuccess(respuesta) {
                    sonido.play();
                    document.getElementById('code_ambi').value=respuesta; //code_ambi es el input para escribir el QR
                    navigator.vibrate(1000);
                }
                
                var html5QrcodeScanner = new Html5QrcodeScanner(
                    "video", { fps: 10, qrbox: 250 });
                    html5QrcodeScanner.render(onScanSuccess);
            </script>
        </div>

        <script>
            // Script encargado de devolver la alerta segun el valor que tenga el input oculto de id "estado"
            $(document).ready(function() {
                var estado = document.getElementById("estado").value;
                var nom_ambi = document.getElementById("nom_ambi").value;
                var t_traza = document.getElementById("t_traza").value;
                // En caso de error arroja una alerta de error y vuelve a la vista QR
                if (estado == 'error'){
                    Swal.fire({
                        icon: 'error',
                        title: 'El código ingresado no es válido',
                        showConfirmButton: false,
                        timer: 2000,
                    })
                }
                else{
                // En caso de exito arroja una alerta de success y retorna la vista de inicio
                    Swal.fire({
                        icon: 'success',
                        title: 'Ha registrado '+t_traza+' con éxito a '+nom_ambi,
                        showConfirmButton: false,
                        timer: 4500,
                    }).then(function(){
                        window.location.href = "/";
                    });
                }          
            });
        </script>
    
        <script src="<?php echo e(asset('js/app.js')); ?>" type="text/js"></script>
            
    </body>
</html><?php /**PATH C:\Users\Admin\Documents\traza.uct.cl\resources\views/alerts.blade.php ENDPATH**/ ?>