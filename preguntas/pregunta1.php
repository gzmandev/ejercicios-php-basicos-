<?php

//http://localhost/3653_Guzman_Adriel/preguntas/pregunta1.php//

$producto = "Teclado mecanico";
$precio = 180.00;
$tipoCliente = "Frecuente";

if ($tipoCliente === "Frecuente") {
    $porcentajeDescuento = 10;
    $descuento = $precio * ($porcentajeDescuento / 100);
} else {
    $porcentajeDescuento = 0;
    $descuento = 0;
}

$total = $precio - $descuento;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Evaluacion De Descuento</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Evaluacion De Descuento</h1>
                <p>Pregunta 1 - Variables Y Condicionales</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <span class="form-label">Producto</span>
                        <p><?php echo htmlspecialchars($producto); ?></p>
                    </div>
                    <div class="col">
                        <span class="form-label">Precio</span>
                        <p>S/ <?php echo number_format($precio, 2); ?></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <span class="form-label">Tipo de cliente</span>
                        <p><?php echo htmlspecialchars($tipoCliente); ?></p>
                    </div>
                    <div class="col">
                        <span class="form-label">Descuento aplicado</span>
                        <p><?php echo $porcentajeDescuento; ?>%</p>
                    </div>
                </div>

                <div class="result-box">
                    Descuento aplicado: <?php echo $porcentajeDescuento; ?>%
                    &nbsp;|&nbsp;
                    Total a pagar: S/ <?php echo number_format($total, 2); ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
