<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conceptos básicos de PHP</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Conceptos básicos de PHP</h1>
        <?php
        date_default_timezone_set('America/Mexico_City');
        // date_default_timezone_set('Africa/Nairobi');
        // echo date_default_timezone_get();
        echo '<h2>¡Hola mundo!</h2>';
        echo date(DATE_RSS) . '<br>';
        $hora = date('G');
        if($hora < 12) {
            echo '<h3>¡Buenos días!</h3>';
        } elseif ($hora <= 19) {
            echo '<h3>¡Buenas tardes!</h3>';
        } else {
            echo '<h3>¡Buenas noches, dulces sueños!</h3>';
        }
        switch (date('N')) {
            case 1://lunes
                $mensaje = '¡Ánimo, que tengas excelente semana de trabajo!';
                break;
            case 2://martes
                $mensaje = '¡Ánimo, hemos superados el día más difícil!';
                break;
            case 3://miércoles
                $mensaje = '¡Ánimo, que tengas excelente ombligo de la semana!';
                break;
            case 4://jueves
                $mensaje = '¡Ánimo, ya casi toca descanso!';
                break;
            case 5://viernes
                $mensaje = '¡Ánimo, ya es viernes y el cuerpo lo sabe!';
                break;
            case 6://sábado
                $mensaje = '¡Ánimo, disfruta tu fin de semana!';
                break;
            case 7://domingo
                $mensaje = '¡Ánimo, descansa temprano para estar con baterías el día de mañana!';
                break;
        }
        echo '<p>' . $mensaje . '</p>';
        echo "<p>{$mensaje}</p>";
        // echo '<pre>';
        // print_r($_SERVER);
        // echo '</pre>';
        ?>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>