<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Códigos QR </title>
    
    <style>
        body{
            background: #780206;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #061161, #780206);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #061161, #780206); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
        
        #campus{
            color: #333;
            font-size: 20px;
            font-weight: 600;
        }
        
        h4{
            color: white;
            text-align: center;
            font-family: 'Nunito', sans-serif;
            font-size: 40px;
            font-weight: 600;
        }
    </style>
</head>

<body>  
    <div class="container mt-5 p-5">
        <h4 class="text-center">Códigos QR Universidad Católica de Temuco</h4>
        <hr>
        <div class="row" style="background-color: #f7f8f8">
            @foreach($universidad as $uni)
                <div class="col-lg-4">
                    <label for="campus" id="campus">{{ $uni->ambi_nombre }}</label>
                    <br>
                    {{
                        $miQr = QrCode::
                        // format('png')
                        size(200)  //defino el tamaño
                        ->backgroundColor(250, 240, 215) //defino el fondo
                        ->color(0, 0, 0)
                        ->margin(1)  //defino el margen
                        ->generate($uni->ambi_codigo) /** genero el codigo qr **/
                    }}
                </div>
            @endforeach
        </div>
    </div>


</body>
</html>