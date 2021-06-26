<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <i class="bi-binoculars-fill"></i> Crear lugar mágico
                    </div>
                    <div class="card-body">
                        <form action="usuarios_guarda.php" method="POST">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" required class="form-control" id="nombre" aria-describedby="nombreHelp">
                                <div id="nombreHelp" class="form-text">Escribe sólo tu nombre(s). Usa mayúsculas y minúsculas.</div>
                            </div>
                            <div class="mb-3">
                                <label for="primer_apellido" class="form-label">Primer apellido</label>
                                <input type="text" name="primer_apellido" required class="form-control" id="primer_apellido" aria-describedby="primer_apellidoHelp">
                                <div id="primer_apellidoHelp" class="form-text">Escribe sólo tu primer apellido. Usa mayúsculas y minúsculas.</div>
                            </div>
                            <div class="mb-3">
                                <label for="segundo_apellido" class="form-label">Segundo apellido</label>
                                <input type="text" name="segundo_apellido" required class="form-control" id="segundo_apellido" aria-describedby="segundo_apellidoHelp">
                                <div id="segundo_apellidoHelp" class="form-text">Escribe sólo tu primer apellido. Usa mayúsculas y minúsculas.</div>
                            </div>
                            <div class="mb-3">
                                <label for="sexo1" class="form-label">Sexo</label>
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sexo" id="sexo1" value="Femenino">
                                        <label class="form-check-label" for="sexo1">
                                            Femenino
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sexo" id="sexo2" value="Masculino">
                                        <label class="form-check-label" for="sexo2">
                                            Masculino
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sexo" id="sexo3" value="Prefiero no decirlo">
                                        <label class="form-check-label" for="sexo3">
                                            Prefiero no decirlo
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                                <input type="date" name="fecha_nacimiento" required class="form-control" id="fecha_nacimiento" aria-describedby="fecha_nacimientoHelp">
                                <div id="fecha_nacimientoHelp" class="form-text">Elije tu fecha de nacimiento.</div>
                            </div>
                            <div class="mb-3">
                                <label for="numero_celular" class="form-label">Número de celular</label>
                                <input type="tel" name="numero_celular" required class="form-control" id="numero_celular" aria-describedby="numero_celularHelp">
                                <div id="numero_celularHelp" class="form-text">Proporciona tu número de celular.</div>
                            </div>
                            <div class="mb-3">
                                <label for="correo_electronico" class="form-label">Correo electrónico</label>
                                <input type="email" name="correo_electronico" required class="form-control" id="correo_electronico" aria-describedby="correo_electronicoHelp">
                                <div id="correo_electronicoHelp" class="form-text">Proporciona tu correo electrónico.</div>
                            </div>
                            <div class="mb-3">
                                <label for="contrasena" class="form-label">Contraseña</label>
                                <input type="password" name="contrasena" required class="form-control" id="contrasena" aria-describedby="contrasenaHelp">
                                <div id="contrasenaHelp" class="form-text">Al menos 8 caracteres.</div>
                            </div>
                            <div class="mb-3">
                                <label for="contrasena_confirmacion" class="form-label">Contraseña (confirma)</label>
                                <input type="password" name="contrasena_confirmacion" required class="form-control" id="contrasena_confirmacion" aria-describedby="contrasena_confirmacionHelp">
                                <div id="contrasena_confirmacionHelp" class="form-text">Confirma tu contraseña.</div>
                            </div>
                            <div class="mb-3">
                                <label for="perfil1" class="form-label">Perfil</label>
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="perfil" id="perfil1" value="Administrador">
                                        <label class="form-check-label" for="perfil1">
                                            Administrador
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="perfil" id="perfil2" value="Cliente">
                                        <label class="form-check-label" for="perfil2">
                                            Cliente
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="estatus1" class="form-label">Estatus</label>
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="estatus" id="estatus1" value="Activo">
                                        <label class="form-check-label" for="estatus1">
                                            Activo
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="estatus" id="estatus2" value="Inactivo">
                                        <label class="form-check-label" for="estatus2">
                                            Inactivo
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>