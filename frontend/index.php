<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="style.css">
   <script src="agregar.js"></script>
</head>
<body>
    <header>        
        <a href="index.php">cargar imagen</a>
        <a href="galeria.html">ver imagen</a>
    </header>
    <?php
    session_start();

    if (isset($_SESSION['usuario']) === true) {
        require_once "formulario.php";
    } else {
        echo "No has iniciado sesión.";
        echo "<a href='login.html'>login</a>";
    }
    ?>
    
</body>
</html>
