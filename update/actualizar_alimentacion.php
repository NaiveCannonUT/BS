<?php
print_r($_POST);

$tipo_alimento = $_POST['tipo_alimento'];
$id_alimentacion = $_POST['id_alimentacion'];

include('../connection/connection.php');

$consulta = "call arcasm32.actualizarAlimentacion('$id_alimentacion', '$tipo_alimento')";
//$consulta = "UPDATE alimentacion SET tipo_alimento = '$tipo_alimento' WHERE id_alimentacion = '$id_alimentacion'";

$query = mysqli_query($conn,$consulta);

header('Location: ../Alimentacion.php');


?>