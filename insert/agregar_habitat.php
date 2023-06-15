<?php

    $nombre_habitat = $_POST['nombre_habitat'];

    include('../connection/connection.php');
    
    $consulta = "call arcasm32.agregarHabitat('$nombre_habitat')";
    //$consulta = "INSERT INTO habitat (nombre_habitat) VALUE ('$nombre_habitat')";

    $query = mysqli_query($conn, $consulta);

    header('Location: ../Habitat.php');

?>