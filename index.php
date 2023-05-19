<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
</head>
  <body>
    <div class="container text-center">
        <div class="row">
            <div class="">
                <img src="img/logo.png" class="img-fluid" alt="Logo de la empresa">
    
            </div>
        </div>
        <div class="row shift">

            <h2>Su turno es: </h2>
            <h1><?php include_once('ticket_count.php');?> </h1>

        </div>
        <div class="row welcome">
            <p>Bienvenido, nuestro tiempo promedio de servicio es de 5 a 10 minutos.<br>
                Recuerda enviar tus documentos al mail 
                <a href="mailto:onsite140@gmail.com" class="btn btn-primary">
                  <i class="fas fa-envelope"></i> onsite140@gmail.com
                </a> o al whatsapp.
            </p>
    
        </div>

        <div class="row advisor">
            <p>Por favor no refresque ni salga de esta pagina hasta que sea atendido. Gracias.</p>
            <div class="center-image">
                <img src="img/wplogo.jpg" class="img-thumbnail" alt="Logo whatsapp">
            </div>

        </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
