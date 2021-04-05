<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Articulos</h1>
    <form action="busqueda.php" method="post">
        <label for=""> Buscar: </label>
            <input type="text" name="char">
        <button type="submit">Enviar</button>
    </form><br>   
    <?php
        require('conexion.php');
        $char = $_POST['char'];
        $link = "<form action='update.php' method='get'>
                 <button type='submit'>Actualizar</button>
                </form>";
        if ($char != '') {
            $query = "SELECT * FROM articulos WHERE nombre_articulo LIKE '%$char%'";
            $result = mysqli_query($conexion, $query);

            while ($rows = mysqli_fetch_array($result)) {
                echo "{$rows['NOMBRE_ARTICULO']} {$link}";
            }
        } else {
        
        }
    ?>
    <br>
    <a href="guardar.html">Insertar nuevo artículo</a>
</body>
</html>




