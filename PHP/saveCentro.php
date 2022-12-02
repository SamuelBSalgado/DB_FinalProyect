<?php
include('../PHP/conection.php');

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$calle = $_POST['calle'];
$ciudad = $_POST['ciudad'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$des = $_POST['descripcion'];

$query = "CALL createCENTRO('$codigo','$nombre','$calle','$ciudad','$telefono','$email','$des')";
$resultado = mysqli_query($mysqli, $query);

if (!$resultado) {
  $e = 1;
  header("Location: ../Views/crearCentro.php?id=$e");
} else {
  $e = 2;
  header("Location: ../Views/crearCentro.php?id=$e");
}
