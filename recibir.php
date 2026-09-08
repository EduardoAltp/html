<html lang="es"> 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recibir datos</title>
    </head>
    <body>
        <?php
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            echo "<h2>Recibido correctamente</h2>";
            echo "<h1>Hola $nombre, tu email es $email y naciste el $fecha_nacimiento</h1>";  
            if ($_SERVER ["REQUEST_METHOD"] == "POST") {
                $nombre = $_POST['nombre'];
                $email = $_POST['email'];   
                $fecha_nacimiento = $_POST['fecha_nacimiento'];
                
                echo "<h2>Hola $nombre, tu email es $email y naciste el $fecha_nacimiento</h2>";
            }
        ?>
    </body>
</html>