<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Guardar Articulos</h1>
    <form action="update.php" method="post">
        <label for="">Sección</label><br>
            <input type="text" name="seccion"><br>
        <label for="">Nombre del artículo:</label><br>
            <input type="text" name="nombre_art"> <br> 
        <label for="">Fecha:</label><br>
            <input type="date" name="fecha"><br>
        <label for="">País:</label><br>
            <input type="text" name="pais"><br>
        <label for="">Precio: </label><br>
            <input type="number" name="precio"> <br> 
        <button type="submit">Enviar</button><br>
    </form><br>   
    <br>
    <a href="index.html">Volver</a>
</body>
</html>




