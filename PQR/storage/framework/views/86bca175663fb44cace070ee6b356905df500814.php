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
            }

        </style>
        
        <script>
            function confirmar(){
                var cnf = confirm("¿Seguro desea continuar?");
                if( cnf == true ){
                    document.visi_registro.write("Datos enviados correctamente");
                    return true;
                }else{
                    document.visi_registro.write("No se enviaron los datos");
                    return false;
                }
            }
        </script>
    </head>


    <body>
        <div id="principal" class="content">
            <img src="<?php echo e(asset('UCT_logo.png')); ?>" alt="uct" width="150" height="50">
            <div class="separacion">
                <h2>Módulo de Trazabilidad</h2>
                <small> Confirme su número de Teléfono </small>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <form name="visi_registro" action="qr">
                                    <div class="container col-md-4 mb-3">
                                        <label for="nombre" class="datos form-label">Nombres</label>
                                        <input type="text" class="form-control" name="nombre" placeholder="Nombres">
                                    </div>

                                    <div class="container col-md-4 mb-3">
                                        <label for="apellido_p" class="datos form-label">Apellido paterno</label>
                                        <input type="text" class="form-control" name="apellido_p" placeholder="Apellido paterno">
                                    </div>

                                    <div class="container col-md-4 mb-3">
                                        <label for="apellido_m" class="datos form-label">Apellido materno</label>
                                        <input type="text" class="form-control" name="apellido_m" placeholder="Apellido materno">
                                    </div>

                                    <div class="container col-md-4 mb-3">
                                        <label for="feNa" class="datos form-label">Fecha de nacimiento</label>
                                        <input type="date" class="form-control" name="feNa">
                                    </div><br>

                                    <div class="form-check container col-md-4 mb-3">
                                        <h6>Sexo</h6><br>
                                        <label for="sexo" class="form-label">
                                            <input type="radio" class="form-control" name="sexo">Masculino 
                                        </label>

                                        <label for="sexo" class="form-label">
                                            <input type="radio" class="form-control" name="sexo">Femenino
                                        </label>
                                    </div><br>

                                    <div class="container col-md-4 mb-3">
                                        <label for="telef" class="datos form-label">Número de teléfono (*)</label>
                                        <input type="tel" class="form-control" id="tel1" name="telef1" placeholder="56991342565"  minlength="9" maxlength="12"  
                                        required pattern="[0-9]+" oninput="checkNum()"/>
                                    </div>

                                    <div class="container col-md-4 mb-3">
                                        <label for="telef2" class="datos form-label">Confirme su número de teléfono (*)</label>
                                        <input type="tel" class="form-control" id="tel2" name="telef2" placeholder="56991342565"  minlength="9" maxlength="12" 
                                        required pattern="[0-9]+" oninput="checkNum()"/>
                                    </div>

                                    <small id="error"></small>

                                    <div class="container col-md-4 mb-3">
                                        <label for="email" class="datos form-label">E-mail</label>
                                        <input type="email" class="form-control" name="email" placeholder="Example@gmail.com">
                                    </div><br>

                                    <div class="form-check container col-md-4 mb-3">
                                        <h6>Esquema de vacuna</h6><br>
                                        <label for="vacuna" class="form-label">
                                            <input type="radio" class="form-control" name="vacuna">Completo
                                        </label>

                                        <label for="vacuna" class="form-label">
                                            <input type="radio" class="form-control" name="vacuna">Incompleto
                                        </label>

                                        <label for="vacuna" class="form-label">
                                            <input type="radio" class="form-control" name="vacuna">No Realizado
                                        </label>
                                    </div>
                                    
                                    <button type="submit" id="buttonSub" onclick="confirmar()" class="btn btn-success">Ingresar <i class="fal fa-sign-in-alt"></i></button> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

        <script src="<?php echo e(asset('js/app.js')); ?>" type="text/js"></script>
        <script>

        </script>
    </body>
</html><?php /**PATH C:\Users\Admin\Documents\QR\PQR\resources\views/registro.blade.php ENDPATH**/ ?>