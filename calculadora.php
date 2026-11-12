<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Fácil</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

    <h2>Calculadora en PHP</h2>

    <!-- El formulario envía los datos a la misma página usando el método POST -->
    <form method="POST">
        <input type="number" step="any" name="num1" placeholder="Número 1" required>
        
        <select name="operacion">
            <option value="+">Sumar (+)</option>
            <option value="-">Restar (-)</option>
            <option value="*">Multiplicar (*)</option>
            <option value="/">Dividir (/)</option>
        </select>

        <input type="number" step="any" name="num2" placeholder="Número 2" required>
        
        <button type="submit">Calcular</button>
    </form>

    <hr>

    <?php
    // Si el usuario ha pulsado el botón de calcular...
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        

        // Hacemos la operación matemática
        if ($op == "+") {
            $resultado = $n1 + $n2;
        } elseif ($op == "-") {
            $resultado = $n1 - $n2;
        } elseif ($op == "*") {
            $resultado = $n1 * $n2;
        } elseif ($op == "/") {
            // Comprobamos que no se divida entre 0
            if ($n2 == 0) {
                $resultado = "Error: No se puede dividir entre 0";
            } else {
                $resultado = $n1 / $n2;
            }
        }

        // Mostramos el resultado en pantalla
        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>

</body>
</html>

