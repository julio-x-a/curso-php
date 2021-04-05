<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Nombre:</label><br>
        <input type="text" name="name" id="name"><br>
        <label for="">Edad:</label><br>
        <input type="number" name="edad" id="edad"><br>
        <button type="submit" name="envio">Enviar</button>
    </form>

    <?php
        if (isset($_POST['envio'])) 
        {
           $usuario = $_POST['name'];
           $edad = $_POST['edad'];

           echo "Hola! $usuario, tienes una edad de $edad años! <br>";
           echo date(DATE_RSS);
        }
    ?>

    
</body>
</html>