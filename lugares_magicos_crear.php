<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear lugar mágico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Viajes experienciales</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Catálogos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="categorias.html"><i class="bi-ui-checks"></i> Categorías</a></li>
                            <li><a class="dropdown-item" href="lugares-magicos.html"><i class="bi-binoculars-fill"></i> Lugares mágicos</a></li>
                            <li><a class="dropdown-item" href="viajes-experienciales.html"><i class="bi-cloud-moon"></i> Viajes experienciales</a></li>
                            <li><a class="dropdown-item" href="usuarios.html"><i class="bi-person-circle"></i> Usuarios</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <i class="bi-binoculars-fill"></i> Crear lugar mágico
                    </div>
                    <div class="card-body">
                        <form action="categorias-guardar.html" method="POST">
                            <div class="mb-3">
                                <label for="estado_id" class="form-label">Estado</label>
                                <select name="estado_id" id="estado_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option value="1" selected>Selecciona</option>
                                    <option value="1">Aguascalientes</option>
                                    <option value="2">Baja California</option>
                                    <option value="3">Baja California Sur</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="municipio_id" class="form-label">Municipio</label>
                                <select name="municipio_id" id="municipio_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option value="1" selected>Selecciona</option>
                                    <option value="1">Toluca</option>
                                    <option value="2">Xonacatlán</option>
                                    <option value="3">Metepec</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nombre_lugar" class="form-label">Nombre del lugar mágico</label>
                                <input type="text" class="form-control form-control-sm" name="nombre_lugar" id="nombre_lugar">
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label">Descripción</label>
                                <textarea class="form-control form-control-sm" name="descripcion" id="descripcion"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="estatus1" class="form-label">Estatus</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="estatus" id="estatus1" value="Activo">
                                        <label class="form-check-label" for="estatus1">Activo</label>
                                        <br>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="estatus" id="estatus2" value="Inactivo">
                                        <label class="form-check-label" for="estatus2">Inactivo</label>
                                    </div>
<?php
$sql = 'select id, estado from estados order by estados asc';
foreach ($conexion->query($sql, PDO::FETCH_ASSOC)as $row) {
    echo <<<fin 
    <option value ="{$row['id']}">{$row['estado']}</option>
fin;
}>>>

?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm"><i class="bi-save-fill"></i> guardar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
    <script src=""></script>
    <script>
$(function(){
    
});
</script>
</body>
</html>