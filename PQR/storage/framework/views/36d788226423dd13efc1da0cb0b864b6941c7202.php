<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Traza</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Roboto&display=swap" rel="stylesheet">
        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet" type="text/css" />
        
        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <style>
            html, body {
                font-family: 'Roboto', sans-serif;
            }

            form {
                text-align:center
            }

            .datos{
                float: left;
                color: gray;
            }

            .content { text-align: center; }

            .separacion{
                padding: 3%;
            }

            h2, h5{
                text-align:center;
                color: #636b6f;
            }

            #principal{
                padding-top: 3%;
            }

            h6{
                color: gray;
            }

            small{
                text-align: center;
                color: #636b6f;
                font-style: italic;
            }

            .dato_label{
                text-align: center;
                font-style: italic;
                font-weight: bold;
                color: grey;
            }

            #tel1, #tel2{
                border-color: green;
            }

            .center {
                text-align: center;
            }

        </style>
    </head>


    <body>
        <div id="principal" class="content">
            <img src="<?php echo e(asset('UCT_logo.png')); ?>" alt="uct" width="150" height="50">
            <div class="separacion">
                <h2>Módulo de Trazabilidad</h2>
                <small> Confirme los datos requeridos (*) </small>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="<?php echo e(route('confirma')); ?>" method="POST" onSubmit="return confirm('Está seguro de los datos ingresados?');">
                                    <?php echo csrf_field(); ?>
                                    <div class="container col-md-4 mb-3">
                                        <label for="nombre" class="datos form-label">Rut/pasaporte:</label>
                                        <label for="num_rut" class="datos form-label dato_label">12345678 - 9/K/P</label>
                                    </div>

                                    <div class="container center col-md-4 mb-3">
                                        <label for="num_rut" class=" dato_label">Juan eduardo pérez martinez</label>
                                    </div>

                                    <div class="container col-md-4 mb-3">
                                        <label for="telef" class="datos form-label">Número fijo/celular (*)</label>
                                        <input type="tel" class="form-control" id="tel1" name="telef1" placeholder="45 / 569"  minlength="7" maxlength="12"  
                                        required pattern="[0-9]+" oninput="checkNum()"/>
                                    </div>

                                    <div class="container col-md-4 mb-3">
                                        <input type="tel" class="form-control" id="tel2" name="telef2" placeholder="Confirme 45 / 569"  minlength="7" maxlength="12" 
                                        required pattern="[0-9]+" oninput="checkNum()"/>
                                    </div>

                                    <small id="error"></small>

                                    <div class="container col-md-4 mb-3">
                                        <label for="email" class="datos form-label">E-mail</label>
                                        <input type="email" class="form-control" name="email" placeholder="Example@gmail.com">
                                    </div>

                                    <div class="form-check container col-md-4 mb-3">
                                        <h6>Esquema de vacuna</h6>
                                        <label for="vacuna" class="form-label">
                                            <input type="radio" class="form-control" name="vacuna">Completo
                                        </label>

                                        <label for="vacuna" class="form-label">
                                            <input type="radio" class="form-control" name="vacuna">Incompleto
                                        </label>

                                        <label for="vacuna" class="form-label">
                                            <input type="radio" class="form-control" name="vacuna">No realizado
                                        </label>
                                    </div>
                                    
                                    <button type="submit" id="buttonSub" class="btn btn-success">Ingresar <i class="fal fa-sign-in-alt"></i></button> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="<?php echo e(asset('js/app.js')); ?>" type="text/js"></script>
        <script>
            function checkNum() {
                var tel1 = document.getElementById("tel1").value;
                var tel2 = document.getElementById("tel2").value;
                var button = document.getElementById("buttonSub");
                var error = document.getElementById("error");
                
                if (tel1 != tel2){ 
                    button.disabled = true;
                    error.textContent = "Los números no coinciden";
                    error.style.color = "red";
                }
                else {
                    button.disabled = false;
                    error.textContent = '';
                }
            }            
        </script>
    </body>
</html><?php /**PATH C:\Users\Admin\Documents\traza.uct.cl\resources\views/confirm.blade.php ENDPATH**/ ?>