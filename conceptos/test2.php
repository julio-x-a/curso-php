<?php
    include('test.php'); /** Si no encuentra el archivo PHP específicado, sigue su ejecución */
    require('test.php'); /**Si no encuentra el archivo, genera un error */
    echo getData(4);


?>