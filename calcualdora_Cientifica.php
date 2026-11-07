<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Científica</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="container">
        <h2>Calculadora Científica</h2>

        <form method="POST">
            <label>Número 1:</label>
            <input type="number" step="any" name="num1" class="form-control mb-2" required>
            <label>Número 2:</label>
            <input type="number" step="any" name="num2" class="form-control mb-2" required>
            <button type="submit" class="btn btn-info">Calcular</button>
        </form>

        <br>

        <?php
        // IMPORTANTE: Llamar a la clase científica
        require_once 'CalculadoraCientifica.php'; 

        if (isset($_POST['num1']) && isset($_POST['num2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            
            $calc = new CalculadoraCientifica();

            echo '<ul class="list-group">';
            try {
                // Básicas
                echo '<li class="list-group-item">Suma: ' . $calc->sumar($num1, $num2) . '</li>';
                echo '<li class="list-group-item">Resta: ' . $calc->restar($num1, $num2) . '</li>';
                echo '<li class="list-group-item">Multiplicación: ' . $calc->multiplicar($num1, $num2) . '</li>';
                echo '<li class="list-group-item">División: ' . $calc->dividir($num1, $num2) . '</li>';
                
                // Científicas (Aquí estaba tu error de sintaxis en la captura)
                echo '<li class="list-group-item list-group-item-success">Potencia: ' . $calc->potencia($num1, $num2) . '</li>';
                echo '<li class="list-group-item list-group-item-success">Raíz Cuadrada de ' . $num1 . ': ' . $calc->raizCuadrada($num1) . '</li>';
                
            } catch (Exception $e) {
                echo '<li class="list-group-item list-group-item-danger">Error: ' . $e->getMessage() . '</li>';
            }
            echo '</ul>';
        }
        ?>
    </div>
</body>
</html>