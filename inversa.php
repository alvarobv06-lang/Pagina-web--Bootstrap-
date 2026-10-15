<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio Inversa</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="container">
        <h2>Serie Inversa</h2>
        <div class="card mt-3">
            <div class="card-body">
                <?php
                $numero = 10;
                echo "<p><strong>Ascendente:</strong> ";
                for ($i = 1; $i <= $numero; $i++) { echo $i . " "; }
                echo "</p>";
                echo "<p><strong>Descendente:</strong> ";
                for ($i = $numero; $i >= 1; $i--) { echo $i . " "; }
                echo "</p>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>
