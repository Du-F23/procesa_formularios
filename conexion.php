<?php
$dsn = 'mysql:host=127.0.0.1:3307;dbname=viajes_experienciales';
$nombre_usuario = 'root';
$contrasena = '';
$opciones = [
    PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8'
    , PDO::ATTR_EMULATE_PREPARES => false
    , PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]; 

$conexion = new PDO($dsn, $nombre_usuario, $contrasena, $opciones);

print_r($conexion);

// $sql = 'select id, cliente_id from campanas limit 10';

// foreach ($conexion->query($sql, PDO::FETCH_ASSOC) as $row) {
//     print_r($row);
// }