<?php

    $nombre_clasificacion = $_POST['nombre_clasificacion'];

    include('../connection/connection.php');

    $consulta = "INSERT INTO clasificacion (nombre_clasificacion) VALUE ('$nombre_clasificacion')";

    $query = mysqli_query($conn, $consulta);

    header('Location: ../Clasificacion.php');

?>