<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    
    <div class="container">
        <h2>Calculadora</h2>
        
        
        <form method="POST">
            <label>Número 1:</label>
            <input type="number" name="num1" class="form-control mb-2" required>
            
            <label>Número 2:</label>
            <input type="number" name="num2" class="form-control mb-2" required>
            
            <button type="submit" class="btn btn-info">Calcular</button>
        </form>

        <br>

             <?php
        // Línea 29: Ahora que el archivo existe, esto ya no dará error
        require_once 'Calculadora.php'; 

        if (isset($_POST['num1']) && isset($_POST['num2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            
            $calc = new Calculadora(); // Línea 36

            echo '<ul class="list-group">';
            try {
                echo '<li class="list-group-item">Suma: ' . $calc->sumar($num1, $num2) . '</li>';
                echo '<li class="list-group-item">Resta: ' . $calc->restar($num1, $num2) . '</li>';
                echo '<li class="list-group-item">Multiplicación: ' . $calc->multiplicar($num1, $num2) . '</li>';
                echo '<li class="list-group-item">División: ' . $calc->dividir($num1, $num2) . '</li>';
            } catch (Exception $e) {
                echo '<li class="list-group-item list-group-item-danger">Error: ' . $e->getMessage() . '</li>';
            }
            echo '</ul>';
        }
        ?>
    </div>
</body>
</html>
