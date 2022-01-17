<!DOCTYPE html>
<html lang="es-cl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Trazabilidad</title>
        <script src= "https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" />
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Roboto', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
            }

            label {
                margin-right: 5%;
                margin-left:5%;
            }

            #leftbox {
                float:left;
                width:100%;
                margin-left:10%;
            }

            #rightbox{
                float:right;
                width:20%;
            }

            div, h2, p {
                padding-top: 5%;
                padding-top: 5%;
            }

            div{
                padding-top: 3%;
                padding-top: 3%;
            }

            input[type="text"],
            input[type="number"], {
                width : 100%;
                border: 1px solid #333;
                box-sizing: border-box;
            }

            .guion{
                font-family: 'Roboto', sans-serif;
                font-weight: bold;
                font-size: 150%;
                text-align: center;
            }
            
            .hide{
                display: none;
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

            .content { text-align: center; }

            .title { font-size: 84px; }

            /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
            ::placeholder{
                opacity:10
            }

            /* Firefox */
            input[type=number] {
                -moz-appearance: textfield;
            }
            
            .m-b-md { margin-bottom: 30px; }
        </style>
    </head>
    
    <body>
        <div class="content">
            <img src="<?php echo e(asset('UCT_logo.png')); ?>" alt="uct" width="150" height="50">
            <h2>Módulo de Trazabilidad</h2>
            <small>Registro Acceso/Salida</small>
        
        <script src="<?php echo e(asset('js/app.js')); ?>" type="text/js"></script>


    </body>
</html><?php /**PATH C:\Users\Admin\Documents\QR\PQR\resources\views/layout.blade.php ENDPATH**/ ?>