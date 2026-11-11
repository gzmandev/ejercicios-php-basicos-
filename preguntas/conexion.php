<?php

$host = "localhost";
$usuario = "root";
$clave = "";
$baseDatos = "evaluacion_web";

$conexion = mysqli_connect($host, $usuario, $clave, $baseDatos);

if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

mysqli_set_charset($conexion, "utf8");
