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
        // Si el usuario ha enviado ambos números...
        if (isset($_POST['num1']) && isset($_POST['num2'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            echo "<ul class='list-group'>";
            echo "<li class='list-group-item'>Suma: " . ($num1 + $num2) . "</li>";
            echo "<li class='list-group-item'>Resta: " . ($num1 - $num2) . "</li>";
            echo "<li class='list-group-item'>Multiplicación: " . ($num1 * $num2) . "</li>";
            echo "<li class='list-group-item'>División: " . ($num1 / $num2) . "</li>";
            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>
