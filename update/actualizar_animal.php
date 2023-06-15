<?php
print_r($_POST);

$nombre_animal = $_POST['nombre_animal'];
$descripcion_animal = $_POST['descripcion_animal'];
$id_clasificacion = $_POST['id_clasificacion'];
$id_alimentacion = $_POST['id_alimentacion'];
$id_habitat = $_POST['id_habitat'];
$id_animal = $_POST['id_animal'];

include('../connection/connection.php');


$consulta ="call arcasm32.actualizarAnimal('$id_animal', '$nombre_animal', '$descripcion_animal', '$id_clasificacion', '$id_alimentacion', '$id_habitat')";
//$consulta = "UPDATE animal SET nombre_animal = '$nombre_animal', descripcion_animal = '$descripcion_animal', id_clasificacion_id = '$id_clasificacion', id_alimentacion_id = '$id_alimentacion', id_habitat_id = '$id_habitat' WHERE id_animal = '$id_animal'";

$query = mysqli_query($conn,$consulta);

header('Location: ../Animal.php');


?>

