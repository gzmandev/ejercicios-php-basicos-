<?php

//http://localhost/3653_Guzman_Adriel/preguntas/pregunta2.php//

$numero1 = "";
$numero2 = "";
$opcion = "";
$operacionTexto = "";
$simbolo = "";
$resultado = null;
$mensajeError = "";
$seEnvio = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $seEnvio = true;
    $numero1 = (float) $_POST["numero1"];
    $numero2 = (float) $_POST["numero2"];
    $opcion = (int) $_POST["opcion"];

    switch ($opcion) {
        case 1:
            $operacionTexto = "Sumar";
            $simbolo = "+";
            $resultado = $numero1 + $numero2;
            break;

        case 2:
            $operacionTexto = "Restar";
            $simbolo = "-";
            $resultado = $numero1 - $numero2;
            break;

        case 3:
            $operacionTexto = "Multiplicar";
            $simbolo = "*";
            $resultado = $numero1 * $numero2;
            break;

        case 4:
            $operacionTexto = "Dividir";
            $simbolo = "/";
            if ($numero2 == 0) {
                $mensajeError = "No se puede dividir entre cero.";
            } else {
                $resultado = $numero1 / $numero2;
            }
            break;

        default:
            $operacionTexto = "Opcion no valida";
            $mensajeError = "Selecciona una operacion valida (1 a 4).";
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menu De Operaciones</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Menu De Operaciones</h1>
                <p>Pregunta 2 - Estructura Switch</p>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="row">
                        <div class="col">
                            <label class="form-label" for="numero1">Numero 1</label>
                            <input class="form-control" type="number" step="any" id="numero1" name="numero1"
                                   value="<?php echo htmlspecialchars($numero1); ?>" required>
                        </div>
                        <div class="col">
                            <label class="form-label" for="numero2">Numero 2</label>
                            <input class="form-control" type="number" step="any" id="numero2" name="numero2"
                                   value="<?php echo htmlspecialchars($numero2); ?>" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label class="form-label" for="opcion">Operacion</label>
                            <select class="form-control" id="opcion" name="opcion" required>
                                <option value="">Selecciona una opcion</option>
                                <option value="1" <?php echo ($opcion == 1) ? "selected" : ""; ?>>1. Sumar</option>
                                <option value="2" <?php echo ($opcion == 2) ? "selected" : ""; ?>>2. Restar</option>
                                <option value="3" <?php echo ($opcion == 3) ? "selected" : ""; ?>>3. Multiplicar</option>
                                <option value="4" <?php echo ($opcion == 4) ? "selected" : ""; ?>>4. Dividir</option>
                            </select>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Calcular</button>
                </form>

                <?php if ($seEnvio): ?>
                    <p class="text-muted" style="margin-top:20px;">
                        Opcion seleccionada: <?php echo htmlspecialchars($opcion); ?> - <?php echo htmlspecialchars($operacionTexto); ?>
                    </p>

                    <?php if ($mensajeError !== ""): ?>
                        <div class="alert alert-danger"><?php echo htmlspecialchars($mensajeError); ?></div>
                    <?php else: ?>
                        <div class="result-box">
                            Resultado: <?php echo $numero1; ?> <?php echo $simbolo; ?> <?php echo $numero2; ?>
                            = <?php echo $resultado; ?>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>
