<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Edad</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    
    <div class="container">
        <h2>Verificar Edad</h2>
        
        
        <form method="POST">
            <label>Escribe tu edad:</label>
            <input type="number" name="edad" class="form-control mb-2" required>
            <button type="submit" class="btn btn-primary">Comprobar</button>
        </form>

        <br>

        <?php
        // Si el usuario ha enviado el formulario...
        if (isset($_POST['edad'])) {
            $edad = $_POST['edad'];
            
            if ($edad >= 18) {
                echo "<div class='alert alert-success'>Eres mayor de edad.</div>";
            } else {
                echo "<div class='alert alert-danger'>Eres menor de edad.</div>";
            }
        }
        ?>
    </div>
</body>
</html>
