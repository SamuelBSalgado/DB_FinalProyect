<?php
include('../PHP/conection.php');

$codigo = $_POST['codigo'];

$query = "CALL ELIMINAR('$codigo')";
$results = mysqli_query($mysqli, $query);
$mysqli->close();
if (!$results) {
  die("Error al eliminar centro");
} else {
  echo 'Centro eliminado con exito';
}
