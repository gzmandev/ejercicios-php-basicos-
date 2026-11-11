<?php

//http://localhost/3653_Guzman_Adriel/preguntas/pregunta3.php//

$calificaciones = [15, 12, 18, 10, 17];
$notaMinima = 13;

$suma = 0;
$aprobados = 0;
$desaprobados = 0;
$filas = [];

foreach ($calificaciones as $indice => $nota) {
    $numeroEstudiante = $indice + 1;
    $suma += $nota;

    if ($nota >= $notaMinima) {
        $estado = "Aprobado";
        $aprobados++;
    } else {
        $estado = "Desaprobado";
        $desaprobados++;
    }

    $filas[] = [
        "estudiante" => $numeroEstudiante,
        "nota" => $nota,
        "estado" => $estado,
    ];
}

$promedio = $suma / count($calificaciones);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen De Calificaciones</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Resumen De Calificaciones</h1>
                <p>Pregunta 3 - Bucles y arreglos</p>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Estudiante</th>
                            <th>Nota</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($filas as $fila): ?>
                            <tr>
                                <td>Estudiante <?php echo $fila["estudiante"]; ?></td>
                                <td><?php echo $fila["nota"]; ?></td>
                                <td>
                                    <?php if ($fila["estado"] === "Aprobado"): ?>
                                        <span class="badge badge-success">Aprobado</span>
                                    <?php else: ?>
                                        <span class="badge badge-danger">Desaprobado</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <div class="summary-box">
                    <div class="summary-item">
                        <span class="value"><?php echo number_format($promedio, 1); ?></span>
                        <span class="label">Promedio</span>
                    </div>
                    <div class="summary-item">
                        <span class="value"><?php echo $aprobados; ?></span>
                        <span class="label">Aprobados</span>
                    </div>
                    <div class="summary-item">
                        <span class="value"><?php echo $desaprobados; ?></span>
                        <span class="label">Desaprobados</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
