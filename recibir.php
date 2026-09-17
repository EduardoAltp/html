<doctype html>
<html lang="es"> 
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Recibir datos</title>
    </head>
    <body>

        <?php

        require_once 'conexion.php';

            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            echo "<h2>Recibido correctamente</h2>";
            if ($_SERVER ["REQUEST_METHOD"] == "POST") {
                $nombre = $_POST['nombre'];
                $email = $_POST['email'];   
                $fecha_nacimiento = $_POST['fecha_nacimiento'];
                
                $sql = "INSERT INTO personas (nombre, email, fecha_nacimiento) VALUES ('$nombre', '$email', '$fecha_nacimiento')";

                $conn->exec($sql);
                $stmt = $conn->query("SELECT * FROM personas");
                $personas = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($personas as $persona) 
                    {
                    echo "Nombre: " . $persona['nombre'] . "<br>";
                    echo "Email: " . $persona['email'] . "<br>";
                    echo "Fecha de nacimiento: " . $persona['fecha_nacimiento'] . "<br><br>";
                }
            }
            else 
                { 
                echo "<h2>Por favor, completa el formulario</h2>";
            }
        ?>

    </body>
</html>