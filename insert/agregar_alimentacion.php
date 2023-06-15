<?php

    $tipo_alimento = $_POST['tipo_alimento'];

    include('../connection/connection.php');
    $consulta = "call arcasm32.agregarAlimentacion('$tipo_alimento')";
    //$consulta = "INSERT INTO alimentacion (tipo_alimento) VALUE ('$tipo_alimento')";

    $query = mysqli_query($conn, $consulta);

    header('Location: ../Alimentacion.php');

?>