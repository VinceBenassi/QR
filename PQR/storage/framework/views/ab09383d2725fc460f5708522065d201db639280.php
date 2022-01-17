<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trazabilidad</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Roboto&display=swap" rel="stylesheet">
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" />
        
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Roboto', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            
            #principal{
                padding-top: 3%;
            }

            .full-height { height: 100vh; }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref { position: relative; }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .separacion{
                padding: 3%;
            }

            .content { text-align: center; }

            .title { font-size: 84px; }
            
            .m-b-md { margin-bottom: 30px; }
        </style>
    </head>
    
    <body>
        <div id="principal" class="content">
            <img src="<?php echo e(asset('UCT_logo.png')); ?>" alt="uct" width="150" height="50">
            <div class="separacion">
                <h2>Módulo de Trazabilidad</h2>
                <small>Bienvenido/a </small>
            </div>   

            <div class="contenedor">
                <div class="abs-center">
                    <br><div class="titulo">Escanéa o ingresa el código QR a registrar</div><br>
                    <video id="previsualizacion" class="p-1 border" style="width:300px; height:200px;"></video>
                </div>
            </div>
            
            <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
            
            <script type="text/javascript">
                var scanner = new Instascan.Scanner({ 
                    video: document.getElementById('previsualizacion'), 
                    scanPeriod: 5, 
                    mirror: false 
                });
        
                Instascan.Camera.getCameras().then(function(cameras) {
                    if(cameras.length > 0){
                        scanner.start(cameras[0]);
                    }else{
                        console.error('No se han encontrado cámaras');
                        alert('No se encontraron cámaras');
                    }
                }).catch(function(e){
                    console.error(e);
                    alert("Error:" + e);
                });

                scanner.addListener('scan', function(respuesta) {
                    console.log("Contenido:" + respuesta);
                });


            </script>
            
            <div class="container col-md-4" style="text-align: center;">
                <input class="form-control text-center" type="text" placeholder="O escriba el código QR">
            </div><br>

            <a href="/" type="submit" class="btn btn-success">Entrada</a>
            <a href="/"  type="submit" class="btn btn-danger">Salida</a>
        </div>
    
        <script src="<?php echo e(asset('js/app.js')); ?>" type="text/js"></script>

    </body>
</html><?php /**PATH C:\Users\Admin\Documents\QR\PQR\resources\views/qr.blade.php ENDPATH**/ ?>