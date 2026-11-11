<?php

////http://localhost/3653_Guzman_Adriel/preguntas/pregunta4.php////

require "conexion.php";

$consulta = "SELECT id, nombre, categoria, precio FROM productos ORDER BY id ASC";
$resultado = mysqli_query($conexion, $consulta);

$productos = [];
if ($resultado && mysqli_num_rows($resultado) > 0) {
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $productos[] = $fila;
    }
}

mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado De Productos</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Listado De Productos</h1>
                <p>Pregunta 4 - PHP con MySQL</p>
            </div>
            <div class="card-body">
                <?php if (count($productos) === 0): ?>
                    <div class="alert alert-info">
                        No existen productos registrados en la base de datos.
                    </div>
                <?php else: ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Producto</th>
                                <th>Categoria</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($productos as $producto): ?>
                                <tr>
                                    <td><?php echo $producto["id"]; ?></td>
                                    <td><?php echo htmlspecialchars($producto["nombre"]); ?></td>
                                    <td><?php echo htmlspecialchars($producto["categoria"]); ?></td>
                                    <td>S/ <?php echo number_format($producto["precio"], 2); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
