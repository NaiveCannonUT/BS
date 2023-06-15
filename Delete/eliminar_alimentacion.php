<?php
    //print_r($_GET);

    $id_alimentacion = $_GET['id_alimentacion'];

    include('../connection/connection.php');

    $consulta = "call arcasm32.eliminarAlimentacion($id_alimentacion)";
    //$consulta = "DELETE FROM alimentacion WHERE id_alimentacion = '$id_alimentacion'";

    $query = mysqli_query($conn,$consulta);

    header('Location: ../Alimentacion.php');
?>