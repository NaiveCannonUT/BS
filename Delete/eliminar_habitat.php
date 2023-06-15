<?php
    //print_r($_GET);

    $id_habitat = $_GET['id_habitat'];

    include('../connection/connection.php');

    $consulta = "call arcasm32.eliminarHabitat($id_habitat)";
    //$consulta = "DELETE FROM habita WHERE id_habitat = '$id_habitat'";

    $query = mysqli_query($conn,$consulta);

    header('Location: ../Habitat.php');
?>