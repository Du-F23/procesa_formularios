<!DOCTYPE html>
<html lang="es">
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iconos Bootstrap</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
<div class="row"></div>
<div class="col-3"></div>
<div class="col-6"></div>
<div class="card">
    <div class="card-header">
      Valores recividos
    </div>
    <div class="card-body">
     <pre>
       <?php
       print_r($_REQUEST);
      ?> 
     </pre>
    <div class="col-3"></div>
  </div>
</div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>