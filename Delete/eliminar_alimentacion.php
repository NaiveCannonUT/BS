<?php
    //print_r($_GET);

    $id_alimentacion = $_GET['id_alimentacion'];

    include('../connection/connection.php');

    $consulta = "DELETE FROM alimentacion
    WHERE id_alimentacion = '$id_alimentacion'";

    $query = mysqli_query($conn,$consulta);

    header('Location: ../Alimentacion.php');
?>