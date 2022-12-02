<?php
include('../PHP/conection.php');
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$calle = $_POST['calle'];
$ciudad = $_POST['ciudad'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$des = $_POST['des'];

$query = "CALL ACTUALIZAR('$codigo','$nombre','$calle','$ciudad','$telefono','$email','$des')";
$results = mysqli_query($mysqli, $query);
$mysqli->close();
if (!$results) {
  die('Error al actualizar centro');
} else {
  echo 'Centro actualizado correctamente';
}
