<?php
                    require_once './conexion.php';
?>                    
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores recibidos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Valores recibidos
                    </div>
                    <div class="card-body">
  <?php
                    require_once './conexion.php';
                    $sql = fin; 
            $sentencia=insert into usuarios
(nombre, primer_apellido, segundo_apellido, sexo, fecha_nacimiento, numero_celular, correo_electronico, contrasena, perfil, estatus)
VALUES(:nombre, :primer_apellido, :segundo_apellido, :sexo, :fecha_nacimiento,:numero_celular, :correo_electronico, :contraseña, :perfil, :estatus);
fin;
$sentencia = $conexion->prepare($sql);
$sentencia->bindValue(':nombre', $_REQUEST['nombre'], PDO::PARAM_STR);
$sentencia->bindValue(':primer_apellido', $_REQUEST['primer_apellido'], PDO::PARAM_STR);
$sentencia->bindValue(':segundo_apellido', $_REQUEST['segundo_apellido'], PDO::PARAM_STR);
$sentencia->bindValue(':sexo', $_REQUEST['sexo'], PDO::PARAM_STR);
$sentencia->bindValue(':fecha_nacimiento', $_REQUEST['fecha_nacimiento'], PDO::PARAM_STR);
$sentencia->bindValue(':numero_celular', $_REQUEST['numero_celular'], PDO::PARAM_STR);
$sentencia->bindValue(':correo_elecrtonico', $_REQUEST['correo_electronico'], PDO::PARAM_STR);
$sentencia->bindValue(':contraseña', $_REQUEST['contraseña'], PDO::PARAM_BCR);
$sentencia->bindValue(':perfil', $_REQUEST['perfil'], PDO::PARAM_STR);
$sentencia->bindValue(':status', $_REQUEST['estatus'], PDO::PARAM_STXR);
$sentencia->execute();
echo 'Valores guardados en la base de datos';


                    ?>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>