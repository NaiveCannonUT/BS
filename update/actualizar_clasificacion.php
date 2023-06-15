<?php
print_r($_POST);

$nombre_clasificacion = $_POST['nombre_clasificacion'];
$id_clasificacion = $_POST['id_clasificacion'];

include('../connection/connection.php');

$consulta = "call arcasm32.actualizarClasificacion('$id_clasificacion', '$nombre_clasificacion')";
//$consulta = "UPDATE clasificacion SET nombre_clasificacion = '$nombre_clasificacion' WHERE id_clasificacion = '$id_clasificacion'";

$query = mysqli_query($conn,$consulta);

header('Location: ../Clasificacion.php');


?>