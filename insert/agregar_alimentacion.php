<?php

    $tipo_alimento = $_POST['tipo_alimento'];

    include('../connection/connection.php');

    $consulta = "INSERT INTO alimentacion (tipo_alimento) VALUE ('$tipo_alimento')";

    $query = mysqli_query($conn, $consulta);

    header('Location: ../Alimentacion.php');

?>